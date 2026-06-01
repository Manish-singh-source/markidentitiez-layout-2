<?php
$title = "Sapphire Accessories | Premium Portfolio Case Study";

$sapphireImages = [
    'hero'      => './assets/img/new-images/portfolio/sapphire/1.png',
    'logo'      => './assets/img/new-images/portfolio/sapphire/2.png',
    'website'   => './assets/img/new-images/portfolio/sapphire/3.png',
    'salesflow' => './assets/img/new-images/portfolio/sapphire/4.png',
    'product'   => './assets/img/new-images/portfolio/sapphire/4.png',
    'seo'       => './assets/img/new-images/portfolio/sapphire/5.png',
    'identity'  => './assets/img/new-images/portfolio/sapphire/6.png',
];
?>
<?php include('layouts/header.php'); ?>

<style>
/* ─── RESET & BASE ───────────────────────────────────────────── */
/* Scope this case-study styling so theme header/footer stay intact */
.sapphire-page, .sapphire-page *, .sapphire-page *::before, .sapphire-page *::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.sapphire-page {
    --black:   #060809;
    --ink:     #0e1318;
    --card:    #131c24;
    --green:   #6eda51;
    --green2:  #b8ff85;
    --cyan:    #66e3ff;
    --white:   #ffffff;
    --muted:   rgba(255,255,255,0.62);
    --line:    rgba(255,255,255,0.10);
    --radius:  28px;
    /* Match site typography (theme uses Inter) */
    --font-h:  var(--tp-ff-heading, 'Inter', sans-serif);
    --font-b:  var(--tp-ff-body, 'Inter', sans-serif);
}

.sapphire-page {
    background: var(--black);
    color: var(--white);
    font-family: var(--font-b);
    overflow-x: hidden;
    -webkit-font-smoothing: antialiased;
}

.sapphire-page :where(h1,h2,h3,h4,h5,h6) {
    color: var(--white);
    font-family: var(--font-h);
}

.sapphire-page p {
    color: var(--muted);
    font-family: var(--font-b);
}

.sapphire-page img { display: block; max-width: 100%; }
.sapphire-page a   { text-decoration: none; }

.sapphire-page .container {
    width: 100%;
    max-width: 1380px;
    margin-inline: auto;
    padding-inline: clamp(20px, 5vw, 80px);
}

.sapphire-page .label {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 7px 14px;
    border-radius: 999px;
    border: 1px solid var(--line);
    background: rgba(255,255,255,0.06);
    font-family: var(--font-h);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.72);
}

.sapphire-page .label::before {
    content: '';
    width: 7px; height: 7px;
    border-radius: 50%;
    background: var(--green);
    box-shadow: 0 0 0 5px rgba(110,218,81,0.18);
}

/* ─── HERO ───────────────────────────────────────────────────── */
.s-hero {
    position: relative;
    height: 100vh;
    min-height: 600px;
    overflow: hidden;
}

.s-hero__bg {
    position: absolute;
    inset: 0;
    z-index: 0;
}

.s-hero__bg img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.s-hero__bg::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom,
        rgba(6,8,9,0.42) 0%, rgba(6,8,9,0.18) 40%,
        rgba(6,8,9,0.72) 85%, rgba(6,8,9,1) 100%);
}

.s-nav {
    position: absolute;
    top: 0; left: 0; right: 0;
    z-index: 10;
    padding: 30px 0;
}

.s-nav__inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
}

.s-nav__brand {
    font-family: var(--font-h);
    font-size: 18px;
    font-weight: 800;
    color: var(--white);
}

.s-nav__back {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 18px;
    border-radius: 999px;
    border: 1px solid rgba(255,255,255,0.18);
    background: rgba(255,255,255,0.09);
    backdrop-filter: blur(12px);
    font-size: 13px;
    font-weight: 600;
    color: var(--white);
    transition: all 0.2s;
}

.s-nav__back:hover {
    background: rgba(255,255,255,0.16);
    transform: translateX(-3px);
}

.s-nav__back::before { content: '←'; }

.s-scroll {
    position: absolute;
    bottom: 56px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 10;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
}

.s-scroll__line {
    width: 1px;
    height: 50px;
    background: linear-gradient(to bottom, var(--green), transparent);
    animation: scrollPulse 2s ease-in-out infinite;
}

@keyframes scrollPulse {
    0%,100% { opacity: 1; }
    50%      { opacity: 0.4; }
}

.s-scroll__text {
    font-size: 10px;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    color: var(--muted);
}

.s-hero__meta {
    position: absolute;
    bottom: 56px;
    left: 0; right: 0;
    z-index: 10;
}

.s-hero__meta-inner {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 24px;
}

.s-hero__pills {
    display: flex;
    flex-wrap: wrap;
    gap: 9px;
}

.s-hero__pill {
    padding: 8px 15px;
    border-radius: 999px;
    border: 1px solid rgba(255,255,255,0.16);
    background: rgba(6,8,9,0.55);
    backdrop-filter: blur(16px);
    font-size: 12px;
    font-weight: 600;
    color: rgba(255,255,255,0.88);
}

.s-hero__cta {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 14px 24px;
    border-radius: 999px;
    background: linear-gradient(135deg, var(--green), var(--green2));
    font-family: var(--font-h);
    font-size: 13px;
    font-weight: 800;
    color: #071008;
    white-space: nowrap;
    transition: all 0.22s;
    box-shadow: 0 12px 28px rgba(110,218,81,0.22);
}

.s-hero__cta:hover {
    transform: translateY(-2px);
    box-shadow: 0 18px 38px rgba(110,218,81,0.32);
}

.s-hero__cta::after { content: '↗'; }

/* ─── INTRO ─────────────────────────────────────────────────── */
.s-intro {
    padding: 80px 0 60px;
    border-bottom: 1px solid var(--line);
}

.s-intro__inner {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    align-items: center;
}

.s-intro__title {
    font-family: var(--font-h);
    font-size: clamp(36px, 5vw, 72px);
    font-weight: 800;
    line-height: 0.94;
    letter-spacing: -0.06em;
}

.s-intro__title em {
    font-style: normal;
    background: linear-gradient(90deg, var(--green), var(--cyan));
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}

.s-intro__body {
    font-size: 16px;
    line-height: 1.78;
    color: var(--muted);
}

/* ─── STATS ─────────────────────────────────────────────────── */
.s-stats {
    padding: 50px 0;
    border-bottom: 1px solid var(--line);
}

.s-stats__grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1px;
    background: var(--line);
    border: 1px solid var(--line);
    border-radius: 20px;
    overflow: hidden;
}

.s-stat {
    padding: 30px 28px;
    background: var(--ink);
}

.s-stat__num {
    font-family: var(--font-h);
    font-size: 42px;
    font-weight: 800;
    color: var(--white);
    margin-bottom: 10px;
}

.s-stat__num span { color: var(--green); }

.s-stat__text {
    font-size: 13px;
    color: var(--muted);
    line-height: 1.6;
}

/* ═════════════════════════════════════════════════════════════════
   SECTION LAYOUTS — DIVERSE & UNIQUE
═════════════════════════════════════════════════════════════════ */

/* ────── SECTION 01: LOGO DESIGN — Card Centered ────────────── */
.s-service-01 {
    padding: 100px 0;
    border-bottom: 1px solid var(--line);
}

.s-service-01__content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    align-items: center;
}

.s-service-01__card {
    position: relative;
    max-width: 420px;
    margin-inline: auto;
}

.s-service-01__img {
    position: relative;
    border-radius: var(--radius);
    overflow: hidden;
    aspect-ratio: 1/1;
    margin-bottom: 30px;
}

.s-service-01__img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.55s ease;
}

.s-service-01__img:hover img { transform: scale(1.04); }

.s-service-01__step {
    position: absolute;
    top: 20px;
    left: 20px;
    z-index: 4;
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: rgba(6,8,9,0.82);
    border: 1px solid rgba(255,255,255,0.16);
    font-family: var(--font-h);
    font-size: 14px;
    font-weight: 800;
    color: var(--green);
}

.s-service-01__tag {
    display: inline-block;
    margin-bottom: 16px;
    padding: 8px 16px;
    border-radius: 999px;
    background: rgba(110,218,81,0.12);
    border: 1px solid rgba(110,218,81,0.28);
    font-size: 12px;
    font-weight: 600;
    color: var(--green);
}

.s-service-01__text h2 {
    font-family: var(--font-h);
    font-size: clamp(30px, 4vw, 50px);
    font-weight: 800;
    line-height: 0.96;
    letter-spacing: -0.055em;
    margin-bottom: 16px;
}

.s-service-01__text p {
    font-size: 15px;
    line-height: 1.76;
    color: var(--muted);
    margin-bottom: 24px;
}

.s-service-01__points {
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.s-service-01__points li {
    display: flex;
    gap: 10px;
    font-size: 13px;
    color: rgba(255,255,255,0.78);
}

.s-service-01__points li::before {
    content: '◆';
    color: var(--green);
    font-size: 6px;
    margin-top: 4px;
    flex-shrink: 0;
}

/* ────── SECTION 02: E-COMMERCE WEBSITE — Full Width Image + Overlay ────────────── */
.s-service-02 {
    padding: 100px 0;
    border-bottom: 1px solid var(--line);
}

.s-service-02__wrapper {
    position: relative;
    border-radius: var(--radius);
    overflow: hidden;
    aspect-ratio: 16 / 9;
}

.s-service-02__bg {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.s-service-02__overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, 
        rgba(6,8,9,0.72) 0%, 
        rgba(14,19,24,0.52) 40%,
        transparent 100%);
    padding: 60px;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
}

.s-service-02__step {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: rgba(255,255,255,0.12);
    border: 1px solid rgba(255,255,255,0.18);
    font-family: var(--font-h);
    font-size: 14px;
    font-weight: 800;
    color: var(--cyan);
    margin-bottom: 20px;
}

.s-service-02__title {
    font-family: var(--font-h);
    font-size: clamp(32px, 5vw, 56px);
    font-weight: 800;
    line-height: 0.96;
    letter-spacing: -0.055em;
    margin-bottom: 16px;
    max-width: 600px;
}

.s-service-02__desc {
    font-size: 15px;
    line-height: 1.76;
    color: rgba(255,255,255,0.78);
    max-width: 520px;
}

/* Content below image */
.s-service-02__content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    margin-top: 50px;
}

.s-service-02__col h3 {
    font-family: var(--font-h);
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 14px;
    color: var(--white);
}

.s-service-02__points {
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.s-service-02__points li {
    display: flex;
    gap: 10px;
    font-size: 13px;
    color: var(--muted);
    line-height: 1.6;
}

.s-service-02__points li::before {
    content: '→';
    color: var(--cyan);
    flex-shrink: 0;
    font-weight: 600;
}

/* ────── SECTION 03: SALES FLOW — Step by Step Horizontal ────────────── */
.s-service-03 {
    padding: 100px 0;
    border-bottom: 1px solid var(--line);
}

.s-service-03__header {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    align-items: center;
    margin-bottom: 60px;
}

.s-service-03__label { margin-bottom: 20px; }

.s-service-03__title {
    font-family: var(--font-h);
    font-size: clamp(30px, 4vw, 54px);
    font-weight: 800;
    line-height: 0.96;
    letter-spacing: -0.055em;
    margin-bottom: 20px;
}

.s-service-03__desc {
    font-size: 15px;
    line-height: 1.76;
    color: var(--muted);
}

.s-service-03__steps {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.s-service-03__step {
    padding: 28px;
    border-radius: 20px;
    background: linear-gradient(135deg, rgba(110,218,81,0.08), rgba(102,227,255,0.05));
    border: 1px solid var(--line);
    position: relative;
}

.s-service-03__step::before {
    content: '';
    position: absolute;
    top: -1px;
    left: 28px;
    right: auto;
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--green), var(--cyan));
    transform: translateY(-50%);
    z-index: 5;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: var(--font-h);
    font-weight: 800;
    color: #060809;
}

.s-service-03__step:nth-child(1)::before {
    content: '01';
    font-size: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.s-service-03__step:nth-child(2)::before {
    content: '02';
    font-size: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    left: 28px;
}

.s-service-03__step:nth-child(3)::before {
    content: '03';
    font-size: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    left: 28px;
}

.s-service-03__step-title {
    font-family: var(--font-h);
    font-size: 18px;
    font-weight: 700;
    margin-top: 32px;
    margin-bottom: 10px;
}

.s-service-03__step-text {
    font-size: 13px;
    line-height: 1.6;
    color: var(--muted);
}

/* ────── SECTION 04: PRODUCT BRANDING — Image Showcase ────────────── */
.s-service-04 {
    padding: 100px 0;
    border-bottom: 1px solid var(--line);
}

.s-service-04__header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    margin-bottom: 50px;
    gap: 40px;
}

.s-service-04__title-box {
    max-width: 520px;
}

.s-service-04__label { 
    display: block;
    margin-bottom: 18px; 
}

.s-service-04__title {
    font-family: var(--font-h);
    font-size: clamp(30px, 4vw, 54px);
    font-weight: 800;
    line-height: 0.96;
    letter-spacing: -0.055em;
    margin-bottom: 20px;
}

.s-service-04__step {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 54px;
    height: 54px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--green), var(--green2));
    font-family: var(--font-h);
    font-size: 16px;
    font-weight: 800;
    color: #060809;
}

.s-service-04__visual {
    position: relative;
    border-radius: var(--radius);
    overflow: hidden;
    aspect-ratio: 5 / 4;
}

.s-service-04__visual img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.55s ease;
}

.s-service-04__visual:hover img { transform: scale(1.03); }

.s-service-04__content {
    margin-top: 50px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
}

.s-service-04__col p {
    font-size: 14px;
    line-height: 1.7;
    color: var(--muted);
    margin-bottom: 16px;
}

.s-service-04__col p:last-child { margin-bottom: 0; }

/* ────── SECTION 05: SEO OPTIMISATION — Metrics Card ────────────── */
.s-service-05 {
    padding: 100px 0;
    border-bottom: 1px solid var(--line);
}

.s-service-05__wrapper {
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: 60px;
    align-items: center;
}

.s-service-05__left {
    display: flex;
    flex-direction: column;
    gap: 28px;
}

.s-service-05__label { display: block; }

.s-service-05__title {
    font-family: var(--font-h);
    font-size: clamp(30px, 4vw, 54px);
    font-weight: 800;
    line-height: 0.96;
    letter-spacing: -0.055em;
}

.s-service-05__desc {
    font-size: 15px;
    line-height: 1.76;
    color: var(--muted);
}

.s-service-05__metrics {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
}

.s-service-05__metric {
    padding: 24px;
    border-radius: 16px;
    background: rgba(110,218,81,0.08);
    border: 1px solid rgba(110,218,81,0.16);
}

.s-service-05__metric-val {
    font-family: var(--font-h);
    font-size: 32px;
    font-weight: 800;
    color: var(--green);
    margin-bottom: 6px;
}

.s-service-05__metric-lab {
    font-size: 12px;
    color: var(--muted);
    line-height: 1.5;
}

.s-service-05__right {
    position: relative;
    border-radius: var(--radius);
    overflow: hidden;
    aspect-ratio: 4 / 5;
}

.s-service-05__right img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.55s ease;
}

.s-service-05__right:hover img { transform: scale(1.04); }

.s-service-05__tag {
    position: absolute;
    bottom: 20px;
    right: 20px;
    padding: 10px 16px;
    border-radius: 999px;
    background: rgba(6,8,9,0.82);
    border: 1px solid rgba(102,227,255,0.28);
    font-size: 12px;
    font-weight: 600;
    color: var(--cyan);
}

/* ────── SECTION 06: FULL BRAND IDENTITY — Spotlight Layout ────────────── */
.s-service-06 {
    padding: 100px 0;
}

.s-service-06__wrapper {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

.s-service-06__img {
    position: relative;
    border-radius: var(--radius);
    overflow: hidden;
    aspect-ratio: 4 / 3;
}

.s-service-06__img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.55s ease;
}

.s-service-06__img:hover img { transform: scale(1.04); }

.s-service-06__step {
    position: absolute;
    bottom: 24px;
    left: 24px;
    width: 64px;
    height: 64px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--green), var(--green2));
    font-family: var(--font-h);
    font-size: 18px;
    font-weight: 800;
    color: #060809;
}

.s-service-06__content {
    display: flex;
    flex-direction: column;
    gap: 24px;
}

.s-service-06__label { display: block; }

.s-service-06__title {
    font-family: var(--font-h);
    font-size: clamp(32px, 4vw, 56px);
    font-weight: 800;
    line-height: 0.96;
    letter-spacing: -0.055em;
}

.s-service-06__desc {
    font-size: 15px;
    line-height: 1.76;
    color: var(--muted);
}

.s-service-06__highlights {
    display: grid;
    grid-template-columns: 1fr;
    gap: 14px;
    padding: 24px;
    border-radius: 20px;
    background: linear-gradient(135deg, rgba(110,218,81,0.10), rgba(102,227,255,0.06));
    border: 1px solid var(--line);
}

.s-service-06__highlight {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 14px;
    color: rgba(255,255,255,0.82);
}

.s-service-06__highlight::before {
    content: '';
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--green), var(--cyan));
    flex-shrink: 0;
}

/* ────── CTA ────────────────────────────────────────────────────── */
.s-cta {
    padding: 80px 0 100px;
}

.s-cta__box {
    padding: clamp(36px, 5vw, 64px);
    border-radius: 36px;
    background:
        radial-gradient(ellipse at 80% 0%, rgba(110,218,81,0.20), transparent 50%),
        linear-gradient(145deg, #0e1a11 0%, #101920 60%, #0e1318 100%);
    border: 1px solid rgba(110,218,81,0.14);
    box-shadow: 0 30px 80px rgba(0,0,0,0.28);
}

.s-cta__inner {
    display: grid;
    grid-template-columns: 1fr auto;
    gap: 32px;
    align-items: center;
}

.s-cta__title {
    font-family: var(--font-h);
    font-size: clamp(28px, 4vw, 52px);
    font-weight: 800;
    line-height: 0.98;
    letter-spacing: -0.055em;
    margin-bottom: 14px;
}

.s-cta__text {
    font-size: 15px;
    line-height: 1.76;
    color: var(--muted);
    max-width: 680px;
}

.sapphire-page .s-cta.is-light {
    background: #ffffff;
    color: var(--ink);
}

.sapphire-page .s-cta.is-light :where(h1,h2,h3,h4,h5,h6) { color: var(--ink); }
.sapphire-page .s-cta.is-light p { color: rgba(14,19,24,0.72); }

.sapphire-page .s-cta.is-light .s-cta__box {
    background:
        radial-gradient(ellipse at 80% 0%, rgba(110,218,81,0.22), transparent 55%),
        linear-gradient(145deg, #ffffff 0%, #f3f7ff 55%, #ffffff 100%);
    border: 1px solid rgba(14,19,24,0.14);
    box-shadow: 0 28px 70px rgba(0,0,0,0.14);
}

.sapphire-page .s-cta.is-light .btn-ghost {
    border-color: rgba(14,19,24,0.18);
    color: var(--ink);
}

.sapphire-page .s-cta.is-light .btn-ghost:hover { background: rgba(14,19,24,0.06); }

.s-cta__btns {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.sapphire-page .btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 13px 22px;
    border-radius: 999px;
    font-family: var(--font-h);
    font-size: 13px;
    font-weight: 800;
    transition: all 0.22s;
    white-space: nowrap;
}

.sapphire-page .btn-primary {
    background: linear-gradient(135deg, var(--green), var(--green2));
    color: #071008;
    box-shadow: 0 10px 24px rgba(110,218,81,0.22);
}

.sapphire-page .btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 16px 36px rgba(110,218,81,0.34);
}

.sapphire-page .btn-ghost {
    background: transparent;
    border: 1px solid rgba(255,255,255,0.16);
    color: var(--white);
}

.sapphire-page .btn-ghost:hover { background: rgba(255,255,255,0.07); }

.sapphire-page .btn::after { content: '→'; }

/* ─── RESPONSIVE ─────────────────────────────────────────────── */
@media (max-width: 1100px) {
    .s-intro__inner,
    .s-service-01__content,
    .s-service-02__content,
    .s-service-03__header,
    .s-service-04__header,
    .s-service-04__content,
    .s-service-05__wrapper,
    .s-service-06__wrapper,
    .s-cta__inner { grid-template-columns: 1fr; }

    .s-stats__grid { grid-template-columns: repeat(2, 1fr); }

    .s-service-03__steps { grid-template-columns: 1fr; }
}

@media (max-width: 860px) {
    .s-hero__meta-inner { flex-direction: column; align-items: flex-start; }
    .s-cta__btns { flex-direction: row; }
    .s-service-04__visual { aspect-ratio: 3/2; }
}

@media (max-width: 540px) {
    .s-stats__grid { grid-template-columns: 1fr 1fr; }
    .s-service-01__img { aspect-ratio: 4/3; }
    .s-service-04__col { grid-column: 1/-1; }
    .s-service-05__metrics { grid-template-columns: 1fr; }
}
</style>

<main class="sapphire-page">

<!-- ═════════════════════════════════════════════════════════════
     HERO
═════════════════════════════════════════════════════════════ -->
<section class="s-hero">
    <div class="s-hero__bg">
        <img src="<?= htmlspecialchars($sapphireImages['hero'], ENT_QUOTES, 'UTF-8') ?>"
             alt="Sapphire Accessories hero" loading="eager">
    </div>

    <div class="s-scroll">
        <span class="s-scroll__text">scroll</span>
        <div class="s-scroll__line"></div>
    </div>

    <div class="s-hero__meta">
        <div class="container">
            <div class="s-hero__meta-inner">
                <div class="s-hero__pills">
                    <span class="s-hero__pill">Logo Design</span>
                    <span class="s-hero__pill">E-commerce</span>
                    <span class="s-hero__pill">Product Branding</span>
                    <span class="s-hero__pill">SEO Setup</span>
                    <span class="s-hero__pill">Sales Flow</span>
                </div>
                <a href="https://sapphireaccessories.com/" target="_blank" rel="noopener" class="s-hero__cta">
                    Visit Live Website
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ═════════════════════════════════════════════════════════════
     INTRO
═════════════════════════════════════════════════════════════ -->
<section class="s-intro">
    <div class="container">
        <div class="s-intro__inner">
            <div>
                <div class="label" style="margin-bottom: 20px;">Premium Portfolio Case Study</div>
                <h1 class="s-intro__title">Brand to<br><em>Commerce</em><br>Execution.</h1>
            </div>
            <p class="s-intro__body">
                A complete brand-to-commerce build for Sapphire Accessories. This project covers every layer: identity, website, product presentation, sales flow, SEO structure, and brand consistency across all customer touchpoints.
            </p>
        </div>
    </div>
</section>

<!-- ═════════════════════════════════════════════════════════════
     STATS
═════════════════════════════════════════════════════════════ -->
<section class="s-stats">
    <div class="container">
        <div class="s-stats__grid">
            <div class="s-stat">
                <div class="s-stat__num">06<span>+</span></div>
                <div class="s-stat__text">Deliverables</div>
            </div>
            <div class="s-stat">
                <div class="s-stat__num">01<span>x</span></div>
                <div class="s-stat__text">Unified Brand System</div>
            </div>
            <div class="s-stat">
                <div class="s-stat__num">100<span>%</span></div>
                <div class="s-stat__text">SEO Ready</div>
            </div>
            <div class="s-stat">
                <div class="s-stat__num">E2E</div>
                <div class="s-stat__text">Sales Journey</div>
            </div>
        </div>
    </div>
</section>

<!-- ═════════════════════════════════════════════════════════════
     01 — LOGO DESIGN (Card Centered Layout)
═════════════════════════════════════════════════════════════ -->
<section class="s-service-01">
    <div class="container">
        <div class="s-service-01__content">
            <div class="s-service-01__card">
                <div class="s-service-01__img">
                    <span class="s-service-01__step">01</span>
                    <img src="<?= htmlspecialchars($sapphireImages['logo'], ENT_QUOTES, 'UTF-8') ?>"
                         alt="Logo Design" loading="lazy">
                </div>
            </div>

            <div>
                <div class="label" style="margin-bottom: 16px;">Step 01</div>
                <span class="s-service-01__tag">Logo & Mark</span>
                <h2 class="s-service-01__text">
                    <h2 style="font-family: var(--font-h); font-size: clamp(30px, 4vw, 50px); font-weight: 800; line-height: 0.96; letter-spacing: -0.055em; margin-bottom: 16px;">Logo Design</h2>
                </h2>
                <p>Created a clean, modern brand mark that communicates trust, quality and premium positioning. The logo foundation that powers every touchpoint — website, packaging, social media.</p>
                <ul class="s-service-01__points">
                    <li>Brand mark versatile for digital & print</li>
                    <li>Premium colour palette selection</li>
                    <li>Wordmark & symbol variants</li>
                    <li>Modern, clarity-focused typography</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ═════════════════════════════════════════════════════════════
     02 — E-COMMERCE WEBSITE (Full Width Image + Overlay)
═════════════════════════════════════════════════════════════ -->
<section class="s-service-02">
    <div class="container">
        <div class="s-service-02__wrapper">
            <img src="<?= htmlspecialchars($sapphireImages['website'], ENT_QUOTES, 'UTF-8') ?>"
                 alt="E-commerce Website" class="s-service-02__bg" loading="lazy">
            <div class="s-service-02__overlay">
                <div class="s-service-02__step">02</div>
                <h2 class="s-service-02__title">E-commerce Website</h2>
                <p class="s-service-02__desc">
                    Designed the full online store experience with product-led browsing, clear categories, and a purchase path that moves visitors from discovery to order.
                </p>
            </div>
        </div>

        <div class="s-service-02__content">
            <div class="s-service-02__col">
                <h3>Website Foundation</h3>
                <ul class="s-service-02__points">
                    <li>Homepage structured for product discovery</li>
                    <li>Category pages for all product lines</li>
                    <li>Product detail with specs & benefits</li>
                    <li>Trust signals & brand consistency</li>
                </ul>
            </div>
            <div class="s-service-02__col">
                <h3>Conversion Focused</h3>
                <ul class="s-service-02__points">
                    <li>Cart interaction designed for ease</li>
                    <li>Checkout path minimized for speed</li>
                    <li>Order confirmation & trust messaging</li>
                    <li>Mobile-first responsive design</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ═════════════════════════════════════════════════════════════
     03 — SALES ORDER FLOW (Step by Step Horizontal)
═════════════════════════════════════════════════════════════ -->
<section class="s-service-03">
    <div class="container">
        <div class="s-service-03__header">
            <div>
                <div class="s-service-03__label label">Step 03</div>
                <h2 class="s-service-03__title">Sales Order Flow</h2>
            </div>
            <p class="s-service-03__desc">
                Structured the complete customer journey from initial browse to confirmed order. Every step designed to reduce friction and build purchase confidence.
            </p>
        </div>

        <div class="s-service-03__steps">
            <div class="s-service-03__step">
                <h3 class="s-service-03__step-title">Browse & Discover</h3>
                <p class="s-service-03__step-text">Product categories, filters, and recommendations visible at every step</p>
            </div>
            <div class="s-service-03__step">
                <h3 class="s-service-03__step-title">Add & Review</h3>
                <p class="s-service-03__step-text">Offer visibility, upsell moments, cart review, and quantity controls</p>
            </div>
            <div class="s-service-03__step">
                <h3 class="s-service-03__step-title">Checkout & Order</h3>
                <p class="s-service-03__step-text">Minimal form fields, clear CTA, order confirmation and next steps</p>
            </div>
        </div>
    </div>
</section>

<!-- ═════════════════════════════════════════════════════════════
     04 — PRODUCT BRANDING (Image Showcase + Content Below)
═════════════════════════════════════════════════════════════ -->
<section class="s-service-04">
    <div class="container">
        <div class="s-service-04__header">
            <div class="s-service-04__title-box">
                <div class="s-service-04__label label">Step 04</div>
                <h2 class="s-service-04__title">Product Branding</h2>
            </div>
            <div class="s-service-04__step">04</div>
        </div>

        <div class="s-service-04__visual">
            <img src="<?= htmlspecialchars($sapphireImages['product'], ENT_QUOTES, 'UTF-8') ?>"
                 alt="Product Branding" loading="lazy">
        </div>

        <div class="s-service-04__content">
            <div class="s-service-04__col">
                <p>Refined how each Sapphire product is presented — from earbuds and neckbands to cables and accessories. A premium product presentation is the difference between a browser and a buyer.</p>
                <p><strong>Product Naming</strong> — Clear, memorable product names and taglines that communicate benefits. <strong>Feature Callouts</strong> — Written for scan-friendly reading and benefit-first approach.</p>
            </div>
            <div class="s-service-04__col">
                <p><strong>Image Standards</strong> — Consistent product photography and presentation across all categories. <strong>Visual Hierarchy</strong> — Key specs and value drivers highlighted at a glance.</p>
                <p>The overall result is a catalogue that feels premium, cohesive, and trustworthy — driving customers toward purchase with every product page.</p>
            </div>
        </div>
    </div>
</section>

<!-- ═════════════════════════════════════════════════════════════
     05 — SEO OPTIMISATION (Metrics Left + Image Right)
═════════════════════════════════════════════════════════════ -->
<section class="s-service-05">
    <div class="container">
        <div class="s-service-05__wrapper">
            <div class="s-service-05__left">
                <div>
                    <div class="s-service-05__label label">Step 05</div>
                    <h2 class="s-service-05__title">SEO Optimisation</h2>
                    <p class="s-service-05__desc">
                        Built the website with search visibility in mind from the start. Clean structure, keyword-informed hierarchy, and product pages written for both customers and search engines.
                    </p>
                </div>

                <div class="s-service-05__metrics">
                    <div class="s-service-05__metric">
                        <div class="s-service-05__metric-val">8+</div>
                        <div class="s-service-05__metric-lab">Target keywords per category</div>
                    </div>
                    <div class="s-service-05__metric">
                        <div class="s-service-05__metric-val">100%</div>
                        <div class="s-service-05__metric-lab">Mobile-first responsive</div>
                    </div>
                    <div class="s-service-05__metric">
                        <div class="s-service-05__metric-val">H1→H3</div>
                        <div class="s-service-05__metric-lab">Structured heading hierarchy</div>
                    </div>
                    <div class="s-service-05__metric">
                        <div class="s-service-05__metric-val">Core</div>
                        <div class="s-service-05__metric-lab">Web Vitals ready</div>
                    </div>
                </div>
            </div>

            <div class="s-service-05__right">
                <img src="<?= htmlspecialchars($sapphireImages['seo'], ENT_QUOTES, 'UTF-8') ?>"
                     alt="SEO Optimisation" loading="lazy">
                <span class="s-service-05__tag">Search Ready</span>
            </div>
        </div>
    </div>
</section>

<!-- ═════════════════════════════════════════════════════════════
     06 — FULL BRAND IDENTITY (Image Left + Content Spotlight)
═════════════════════════════════════════════════════════════ -->
<section class="s-service-06">
    <div class="container">
        <div class="s-service-06__wrapper">
            <div class="s-service-06__img">
                <img src="<?= htmlspecialchars($sapphireImages['identity'], ENT_QUOTES, 'UTF-8') ?>"
                     alt="Full Brand Identity" loading="lazy">
                <span class="s-service-06__step">06</span>
            </div>

            <div class="s-service-06__content">
                <div>
                    <div class="s-service-06__label label">Step 06 — Complete</div>
                    <h2 class="s-service-06__title">Full Brand Identity</h2>
                </div>

                <p class="s-service-06__desc">
                    Delivered a unified brand system that works across every customer touchpoint. From website to social media to packaging direction — every element of how Sapphire Accessories looks, speaks and feels is consistent, deliberate and memorable.
                </p>

                <div class="s-service-06__highlights">
                    <div class="s-service-06__highlight">Colour system, typography, spacing guidelines documented</div>
                    <div class="s-service-06__highlight">Social media profile & post layout directions created</div>
                    <div class="s-service-06__highlight">Brand voice and tone defined across all formats</div>
                    <div class="s-service-06__highlight">Trust badges, guarantees & credibility elements designed</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═════════════════════════════════════════════════════════════
     CTA
═════════════════════════════════════════════════════════════ -->
<section class="s-cta is-light">
    <div class="container">
        <div class="s-cta__box">
            <div class="s-cta__inner">
                <div>
                    <h2 class="s-cta__title">Portfolio-ready case study.</h2>
                    <p class="s-cta__text">
                        This project demonstrates a complete transformation — not just website design, but a full brand, commerce, product presentation, conversion and SEO execution for a live consumer electronics brand.
                    </p>
                </div>
                <div class="s-cta__btns">
                    <a href="https://sapphireaccessories.com/" target="_blank" rel="noopener" class="btn btn-primary">Live Website</a>
                    <a href="portfolio.php" class="btn btn-ghost">Back to Portfolio</a>
                </div>
            </div>
        </div>
    </div>
</section>
</main>

<?php include('layouts/footer.php'); ?>
