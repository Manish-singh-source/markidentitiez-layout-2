<?php
$title = "Brand Positioning";
include("layouts/header.php"); ?>

<style>
    .bpos-hero-title {
        font-size: clamp(70px, 12vw, 120px);
        line-height: .84;
        letter-spacing: 0;
    }

    .bpos-kicker,
    .bpos-eyebrow {
        color: #fff669;
        text-transform: uppercase;
        letter-spacing: 1.8px;
        font-size: 14px;
        font-weight: 600;
    }

    .bpos-copy {
        color: rgba(255, 255, 255, .74);
        font-size: 18px;
        line-height: 1.65;
    }

    .bpos-hero-copy {
        color: rgba(255, 255, 255, .78);
        font-size: 20px;
        line-height: 1.45;
        max-width: 620px;
    }

    .bpos-hero-img,
    .bpos-image-card,
    .bpos-wide-img {
        border-radius: 8px;
        overflow: hidden;
        background: #111;
    }

    .bpos-hero-img {
        min-height: 540px;
    }

    .bpos-image-card {
        min-height: 420px;
    }

    .bpos-hero-img img,
    .bpos-image-card img,
    .bpos-wide-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .bpos-stat {
        border-top: 1px solid rgba(255, 255, 255, .16);
        padding-top: 24px;
    }

    .bpos-stat h4 {
        color: #fff;
        font-size: clamp(42px, 5vw, 84px);
        line-height: .9;
        margin-bottom: 8px;
    }

    .bpos-stat span {
        color: rgba(255, 255, 255, .68);
    }

    .bpos-section-title {
        color: #fff;
        font-size: clamp(42px, 8vw, 72px);
        line-height: .92;
        letter-spacing: 0;
    }

    .bpos-pill-list {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .bpos-pill-list span {
        border: 1px solid rgba(255, 255, 255, .18);
        border-radius: 999px;
        color: #fff;
        padding: 10px 18px;
        line-height: 1;
    }

    .bpos-item {
        border-top: 1px solid rgba(255, 255, 255, .14);
        padding: 34px 0;
    }

    .bpos-item span {
        color: #fff669;
        display: inline-block;
        margin-bottom: 14px;
    }

    .bpos-item h4 {
        color: #fff;
        font-size: clamp(28px, 3vw, 44px);
        margin-bottom: 0;
    }

    .bpos-item p {
        color: rgba(255, 255, 255, .7);
        margin-bottom: 0;
    }

    .bpos-process-card {
        border: 1px solid rgba(255, 255, 255, .12);
        border-radius: 8px;
        padding: 34px 28px;
        height: 100%;
        background: rgba(255, 255, 255, .03);
    }

    .bpos-process-card span {
        color: #fff669;
        display: inline-block;
        font-size: 18px;
        margin-bottom: 44px;
    }

    .bpos-process-card h4 {
        color: #fff;
        font-size: 30px;
        margin-bottom: 16px;
    }

    .bpos-process-card p {
        color: rgba(255, 255, 255, .68);
        margin-bottom: 0;
    }

    .bpos-wide-img {
        height: min(58vw, 680px);
        min-height: 360px;
    }

    .bpos-cta {
        border-top: 1px solid rgba(255, 255, 255, .14);
        border-bottom: 1px solid rgba(255, 255, 255, .14);
    }

    @media (max-width: 767px) {
        .bpos-hero-img,
        .bpos-image-card {
            min-height: 320px;
        }

        .bpos-item {
            padding: 26px 0;
        }
    }
</style>

<main>

    <!-- hero area start -->
    <section class="bpos-hero-area pt-180 pb-120 p-relative fix">
        <div class="container container-1750">
            <div class="row align-items-end mb-70">
                <div class="col-xl-8 col-lg-8">
                    <span class="bpos-kicker d-inline-block mb-25">Brand Positioning</span>
                    <h1 class="bpos-hero-title text-white tp-char-animation">Find the space only your brand can own.</h1>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <p class="bpos-hero-copy mb-35">
                        We help brands move from being one option in the market to becoming the clear choice in the customer's mind.
                    </p>
                    <a class="tp-btn-white-border tp-btn-transparent" href="mailto:info@markidentitiez.com">
                        <span>Position your brand</span>
                    </a>
                </div>
            </div>
            <div class="row gx-30 align-items-stretch">
                <div class="col-lg-8">
                    <div class="bpos-hero-img tp_img_reveal mb-30">
                        <img src="assets/img/portfolio/mark/mehta.jpg" alt="Brand positioning showcase">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row h-100">
                        <div class="col-md-6 col-lg-12">
                            <div class="bpos-stat mb-45">
                                <h4><span class="purecounter" data-purecounter-duration="1" data-purecounter-end="3">0</span>x</h4>
                                <span>Sharper market recall when the positioning is focused and repeated.</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="bpos-stat mb-45">
                                <h4><span class="purecounter" data-purecounter-duration="1" data-purecounter-end="5">0</span></h4>
                                <span>Core pillars that guide messaging, design, campaigns, and sales conversations.</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="bpos-stat">
                                <h4><span class="purecounter" data-purecounter-duration="1" data-purecounter-end="1">0</span></h4>
                                <span>Clear idea your audience can remember, compare, and choose.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero area end -->

    <!-- overview area start -->
    <section class="bpos-overview-area pt-110 pb-100" data-bg-color="#111113">
        <div class="container container-1430">
            <div class="row align-items-start">
                <div class="col-lg-5">
                    <span class="bpos-eyebrow d-inline-block mb-25">Market position</span>
                    <h2 class="bpos-section-title mb-40">A sharper reason to believe, buy, and remember.</h2>
                </div>
                <div class="col-lg-7">
                    <p class="bpos-copy mb-35">
                        Brand positioning defines how your brand should be perceived against competitors. We study your audience, category, strengths, and white spaces to create a position that is relevant, ownable, and easy to communicate across every channel.
                    </p>
                    <div class="bpos-pill-list">
                        <span>Audience mapping</span>
                        <span>Competitor audit</span>
                        <span>Category gaps</span>
                        <span>Differentiation</span>
                        <span>Message pillars</span>
                        <span>Positioning line</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- overview area end -->

    <!-- gallery area start -->
    <section class="bpos-gallery-area pt-120 pb-90">
        <div class="container container-1750">
            <div class="row gx-30">
                <div class="col-lg-4">
                    <div class="bpos-image-card tp--hover-item mb-30">
                        <div class="tp--hover-img" data-displacement="assets/img/webgl/1.jpg" data-intensity="0.6" data-speedin="1" data-speedout="1">
                            <img src="assets/img/portfolio/mark/delta-cab.jpg" alt="Positioning research visual">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bpos-image-card tp--hover-item mb-30">
                        <div class="tp--hover-img" data-displacement="assets/img/webgl/1.jpg" data-intensity="0.6" data-speedin="1" data-speedout="1">
                            <img src="assets/img/portfolio/mark/frago.jpg" alt="Brand differentiation visual">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bpos-image-card tp--hover-item mb-30">
                        <div class="tp--hover-img" data-displacement="assets/img/webgl/1.jpg" data-intensity="0.6" data-speedin="1" data-speedout="1">
                            <img src="assets/img/portfolio/mark/urbansports.jpg" alt="Positioning rollout visual">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery area end -->

    <!-- deliverables area start -->
    <section class="bpos-deliverables-area pt-70 pb-120">
        <div class="container container-1430">
            <div class="row mb-60">
                <div class="col-lg-7">
                    <span class="bpos-eyebrow d-inline-block mb-25">Positioning framework</span>
                    <h2 class="bpos-section-title">Strategic clarity your team can use every day.</h2>
                </div>
            </div>
            <div class="bpos-item">
                <div class="row align-items-center">
                    <div class="col-lg-3"><span>01</span></div>
                    <div class="col-lg-4"><h4>Audience Insight</h4></div>
                    <div class="col-lg-5"><p>We define who you need to influence, what they value, what they reject, and what moves them to trust.</p></div>
                </div>
            </div>
            <div class="bpos-item">
                <div class="row align-items-center">
                    <div class="col-lg-3"><span>02</span></div>
                    <div class="col-lg-4"><h4>Competitive Territory</h4></div>
                    <div class="col-lg-5"><p>We map the market to find overused claims, open opportunities, and the space your brand can credibly own.</p></div>
                </div>
            </div>
            <div class="bpos-item">
                <div class="row align-items-center">
                    <div class="col-lg-3"><span>03</span></div>
                    <div class="col-lg-4"><h4>Core Positioning</h4></div>
                    <div class="col-lg-5"><p>We craft the positioning statement, value promise, proof points, and communication pillars.</p></div>
                </div>
            </div>
            <div class="bpos-item">
                <div class="row align-items-center">
                    <div class="col-lg-3"><span>04</span></div>
                    <div class="col-lg-4"><h4>Rollout Direction</h4></div>
                    <div class="col-lg-5"><p>We translate strategy into brand voice, campaign cues, sales messaging, and content themes.</p></div>
                </div>
            </div>
        </div>
    </section>
    <!-- deliverables area end -->

    <!-- banner area start -->
    <section class="bpos-banner-area pb-120">
        <div class="container container-1750">
            <div class="bpos-wide-img">
                <img data-speed=".8" src="assets/img/portfolio/mark/Linkpro-banner.png" alt="Brand positioning banner">
            </div>
        </div>
    </section>
    <!-- banner area end -->

    <!-- process area start -->
    <section class="bpos-process-area pt-120 pb-120" data-bg-color="#1b1b1d">
        <div class="container container-1430">
            <div class="row align-items-end mb-70">
                <div class="col-lg-7">
                    <span class="bpos-eyebrow d-inline-block mb-25">Working process</span>
                    <h2 class="bpos-section-title">From market noise to one clear position.</h2>
                </div>
                <div class="col-lg-5">
                    <p class="bpos-copy mb-0">We keep the strategy practical, specific, and easy to convert into campaigns, websites, decks, and sales language.</p>
                </div>
            </div>
            <div class="row gx-30">
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="bpos-process-card">
                        <span>01</span>
                        <h4>Research</h4>
                        <p>Understand customers, competitors, product strengths, current perception, and category conventions.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="bpos-process-card">
                        <span>02</span>
                        <h4>Map</h4>
                        <p>Find where competitors cluster, where customers feel friction, and where your brand can stand apart.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="bpos-process-card">
                        <span>03</span>
                        <h4>Frame</h4>
                        <p>Build the positioning statement, value promise, messaging pillars, and key proof points.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="bpos-process-card">
                        <span>04</span>
                        <h4>Activate</h4>
                        <p>Turn the strategy into brand voice, campaign lines, website messaging, and team-ready guidelines.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- process area end -->

    <!-- text slider area start -->
    <section class="ar-about-us-4-text-area bpos-cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ar-about-us-4-text-warp">
                        <div class="swiper-container tp-brand-active">
                            <div class="swiper-wrapper slide-transtion">
                                <div class="swiper-slide"><h2 class="ar-about-us-4-text-title">OWN YOUR MARKET SPACE</h2></div>
                                <div class="swiper-slide"><h2 class="ar-about-us-4-text-title">CLARIFY THE CHOICE</h2></div>
                                <div class="swiper-slide"><h2 class="ar-about-us-4-text-title">STAND APART WITH PURPOSE</h2></div>
                                <div class="swiper-slide"><h2 class="ar-about-us-4-text-title">OWN YOUR MARKET SPACE</h2></div>
                                <div class="swiper-slide"><h2 class="ar-about-us-4-text-title">CLARIFY THE CHOICE</h2></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- text slider area end -->

</main>

<?php include("layouts/footer.php"); ?>
