const url = process.argv[1];
const wsUrl = process.argv[2];
const pageUrl = process.argv[3];
let id = 0;
const pending = new Map();
const ws = new WebSocket(wsUrl);
function send(method, params={}) { return new Promise((resolve,reject)=>{ const msgId=++id; pending.set(msgId,{resolve,reject,method}); ws.send(JSON.stringify({id:msgId,method,params})); }); }
ws.onmessage = async (event) => {
  const msg = JSON.parse(event.data);
  if (msg.id && pending.has(msg.id)) {
    pending.get(msg.id).resolve(msg.result);
    pending.delete(msg.id);
  }
};
ws.onopen = async () => {
  try {
    const target = await fetch('http://127.0.0.1:9222/json/new?' + encodeURIComponent(pageUrl), {method:'PUT'}).then(r=>r.json());
    const pageWs = new WebSocket(target.webSocketDebuggerUrl);
    let pid = 0;
    const ppending = new Map();
    const psend = (method, params={}) => new Promise((resolve,reject)=>{ const mid=++pid; ppending.set(mid,{resolve,reject}); pageWs.send(JSON.stringify({id:mid,method,params})); });
    pageWs.onmessage = async (ev) => {
      const m = JSON.parse(ev.data);
      if (m.id && ppending.has(m.id)) { ppending.get(m.id).resolve(m.result); ppending.delete(m.id); }
    };
    pageWs.onopen = async () => {
      await psend('Page.enable');
      await psend('Runtime.enable');
      await psend('Page.navigate', {url: pageUrl});
      await new Promise(r=>setTimeout(r, 5000));
      const evalRes = await psend('Runtime.evaluate', {expression: `(() => {
        const footer = document.querySelector('footer');
        const footerArea = document.querySelector('.tp-footer-area');
        const copyright = document.querySelector('.tp-copyright-area');
        const collab = document.querySelector('.mi-about-collab-area');
        const smooth = document.querySelector('#smooth-content');
        function info(el){ if(!el) return null; const r = el.getBoundingClientRect(); const cs = getComputedStyle(el); return {display:cs.display, visibility:cs.visibility, opacity:cs.opacity, position:cs.position, zIndex:cs.zIndex, height:r.height, top:r.top, bottom:r.bottom}; }
        return JSON.stringify({
          bodyHeight: document.body.scrollHeight,
          docHeight: document.documentElement.scrollHeight,
          viewport: window.innerHeight,
          footer: info(footer),
          footerArea: info(footerArea),
          copyright: info(copyright),
          collab: info(collab),
          smooth: info(smooth),
          bodyOverflow: getComputedStyle(document.body).overflow,
          htmlOverflow: getComputedStyle(document.documentElement).overflow,
          text: footerArea ? footerArea.innerText.slice(0,120) : null
        });
      })()`, returnByValue: true});
      console.log(evalRes.result.value);
      process.exit(0);
    };
  } catch (e) {
    console.error(String(e));
    process.exit(1);
  }
};
