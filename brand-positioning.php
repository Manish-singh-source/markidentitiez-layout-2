<?php
$title = "Brand Positioning";
include("layouts/header.php"); ?>

<style>
    /* .bi-hero-title {
        font-size: clamp(70px, 12vw, 120px);
        line-height: .94;
        letter-spacing: 0;
    } */

    .bi-kicker,
    .bi-eyebrow {
        color: #fff669;
        text-transform: uppercase;
        letter-spacing: 1.8px;
        font-size: 14px;
        font-weight: 600;
    }

    .bi-copy {
        color: rgba(255, 255, 255, .74);
        font-size: 18px;
        line-height: 1.65;
    }

    .bi-hero-copy {
        color: rgba(255, 255, 255, .78);
        font-size: 20px;
        line-height: 1.45;
        max-width: 620px;
    }

    .bi-hero-img,
    .bi-image-card,
    .bi-wide-img {
        border-radius: 8px;
        overflow: hidden;
        background: #111;
    }

    .bi-hero-img {
        min-height: 540px;
    }

    .bi-image-card {
        min-height: 420px;
    }

    .bi-hero-img img,
    .bi-image-card img,
    .bi-wide-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .bi-hero-img img {
        height: 660px;
    }

    .bi-stat {
        border-top: 1px solid rgba(255, 255, 255, .16);
        padding-top: 24px;
    }

    .bi-stat h4 {
        color: #fff;
        font-size: clamp(42px, 5vw, 84px);
        line-height: .9;
        margin-bottom: 8px;
    }

    .bi-stat span {
        color: rgba(255, 255, 255, .68);
    }

    .bi-section-title {
        color: #fff;
        font-size: clamp(42px, 8vw, 67px);
        line-height: .9;
        letter-spacing: 1;
    }

    .bi-pill-list {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .bi-pill-list span {
        border: 1px solid rgba(255, 255, 255, .18);
        border-radius: 999px;
        color: #fff;
        padding: 10px 18px;
        line-height: 1;
    }

    .bi-system-item {
        border-top: 1px solid rgba(255, 255, 255, .14);
        padding: 34px 0;
    }

    .bi-system-item span {
        color: #fff669;
        display: inline-block;
        margin-bottom: 14px;
    }

    .bi-system-item h4 {
        color: #fff;
        font-size: clamp(28px, 3vw, 44px);
        margin-bottom: 0;
    }

    .bi-system-item p {
        color: rgba(255, 255, 255, .7);
        margin-bottom: 0;
    }

    .bi-process-card {
        border: 1px solid rgba(255, 255, 255, .12);
        border-radius: 8px;
        padding: 34px 28px;
        height: 100%;
        background: rgba(255, 255, 255, .03);
    }

    .bi-process-card span {
        color: #fff669;
        display: inline-block;
        font-size: 18px;
        margin-bottom: 44px;
    }

    .bi-process-card h4 {
        color: #fff;
        font-size: 30px;
        margin-bottom: 16px;
    }

    .bi-process-card p {
        color: rgba(255, 255, 255, .68);
        margin-bottom: 0;
    }

    .bi-wide-img {
        height: min(58vw, 680px);
        min-height: 360px;
    }

    .bi-cta {
        border-top: 1px solid rgba(255, 255, 255, .14);
        border-bottom: 1px solid rgba(255, 255, 255, .14);
    }

    .bi-fit-area {
        background: linear-gradient(180deg, #ffffff 0%, #f3efe7 100%);
    }

    .bi-fit-shell {
        border: 1px solid rgba(17, 17, 19, .08);
        border-radius: 26px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 30px 80px rgba(17, 17, 19, .08);
    }

    .bi-fit-intro {
        background:
            radial-gradient(circle at top right, rgba(255, 246, 105, .55), transparent 30%),
            linear-gradient(135deg, #121214 0%, #1d1d20 100%);
        padding: 48px;
        height: 100%;
    }

    .bi-fit-intro p,
    .bi-fit-intro li,
    .bi-fit-links a span:last-child {
        color: rgba(255, 255, 255, .72);
    }

    .bi-fit-intro ul {
        margin: 24px 0 0;
        padding-left: 18px;
    }

    .bi-fit-intro li + li {
        margin-top: 10px;
    }

    .bi-fit-grid {
        padding: 28px;
    }

    .bi-fit-card,
    .bi-fit-faq-item {
        border: 1px solid rgba(17, 17, 19, .08);
        border-radius: 20px;
        padding: 28px;
        background: linear-gradient(180deg, #fff 0%, #faf7f1 100%);
        height: 100%;
    }

    .bi-fit-card span,
    .bi-fit-faq-item span {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 42px;
        height: 42px;
        border-radius: 50%;
        background: #111113;
        color: #fff669;
        font-size: 14px;
        font-weight: 700;
        margin-bottom: 18px;
    }

    .bi-fit-card h4,
    .bi-fit-faq-item h4 {
        color: #111113;
        font-size: 26px;
        margin-bottom: 14px;
    }

    .bi-fit-card p,
    .bi-fit-faq-item p {
        color: rgba(17, 17, 19, .72);
        margin-bottom: 0;
    }

    .bi-fit-faq-area {
        background: #111113;
    }

    .bi-fit-faq-head {
        margin-bottom: 45px;
    }

    .bi-fit-faq-head p {
        max-width: 620px;
        margin-bottom: 0;
    }

    .bi-fit-faq-item {
        background: rgba(255, 255, 255, .03);
        border-color: rgba(255, 255, 255, .1);
    }

    .bi-fit-faq-item h4 {
        color: #fff;
    }

    .bi-fit-faq-item p {
        color: rgba(255, 255, 255, .7);
    }

    .bi-fit-links {
        display: flex;
        flex-wrap: wrap;
        gap: 16px;
        margin-top: 36px;
    }

    .bi-fit-links a {
        min-width: 220px;
        padding: 18px 22px;
        border-radius: 18px;
        border: 1px solid rgba(255, 255, 255, .1);
        background: rgba(255, 255, 255, .03);
    }

    .bi-fit-links a span {
        display: block;
    }

    .bi-fit-links a span:first-child {
        color: #fff;
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 4px;
    }

    @media (max-width: 767px) {

        .bi-hero-img,
        .bi-image-card {
            min-height: 320px;
        }

        .bi-system-item {
            padding: 26px 0;
        }

        .bi-fit-intro,
        .bi-fit-grid {
            padding: 24px;
        }
    }

    .bi-gallery-area,
    .bi-banner-area {
        background-color: #fff;
    }

    .bi-banner-area {
        padding-top: 120px;
    }

    @media (min-width: 1400px) {
        .bi-hero-title {
            font-size: clamp(70px, 12vw, 100px);
            line-height: .94;
            letter-spacing: 0;
        }

        .bi-image-card {
            min-height: 360px;
        }
    }

    @media (min-width: 1200px) and (max-width: 1399px) {
        .bi-hero-title {
            font-size: clamp(70px, 12vw, 70px);
            line-height: .94;
            letter-spacing: 0;
        }

        .bi-hero-copy {
            color: rgba(255, 255, 255, .78);
            font-size: 15px;
            line-height: 1.45;
            max-width: 620px;
        }

        .bi-section-title {
            color: #fff;
            font-size: clamp(42px, 8vw, 52px);
            line-height: .9;
            letter-spacing: 1;
        }

        .bi-copy {
            color: rgba(255, 255, 255, .74);
            font-size: 14px;
            line-height: 1.65;
        }

        .bi-image-card {
            min-height: 260px;
        }
    }

    @media (min-width: 992px) and (max-width: 1199px) {
        .bi-hero-title {
            font-size: clamp(60px, 12vw, 50px);
            line-height: .94;
            letter-spacing: 0;
        }

        .bi-hero-copy {
            color: rgba(255, 255, 255, .78);
            font-size: 13px;
            line-height: 1.45;
            max-width: 620px;
        }

        .bi-section-title {
            color: #fff;
            font-size: clamp(42px, 8vw, 45px);
            line-height: .9;
            letter-spacing: 1;
        }

        .bi-copy {
            color: rgba(255, 255, 255, .74);
            font-size: 12px;
            line-height: 1.65;
        }

        .bi-image-card {
            min-height: 160px;
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .bi-hero-title {
            font-size: clamp(60px, 12vw, 50px);
            line-height: .94;
            letter-spacing: 0;
            margin-bottom: 15px;
        }

        .bi-section-title {
            color: #fff;
            font-size: clamp(42px, 8vw, 50px);
            line-height: .9;
            letter-spacing: 1;
        }
    }

    @media (min-width: 576px) and (max-width: 767px) {
        .bi-hero-title {
            font-size: clamp(60px, 12vw, 40px);
            line-height: .94;
            letter-spacing: 0;
            margin-bottom: 15px;
        }
    }

    @media (max-width: 575px) {
        .bi-hero-title {
            font-size: clamp(30px, 12vw, 35px);
            line-height: .94;
            letter-spacing: 1;
            margin-bottom: 15px;
        }

        .bi-section-title {
            color: #fff;
            font-size: 26px;
            line-height: 1;
            letter-spacing: 1;
        }

        .bi-image-card {
            min-height: 160px;
        }

        .bi-banner-area {
            padding-top: 35px;
            padding-bottom: 35px;
        }
    }
</style>

<main>

    <!-- hero area start -->
    <section class="bi-hero-area pt-150 pb-80 pt-lg-180 pb-lg-120 p-relative fix">
        <div class="container container-1750">
            <div class="row align-items-end mb-70">
                <div class="col-xl-8 col-lg-8">
                    <span class="bi-kicker d-inline-block mb-25">Brand Positioning</span>
                    <h1 class="bi-hero-title text-white tp-char-animation">Position your brand clearly in the market.</h1>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <p class="bi-hero-copy mb-35">
                        We define your audience, message, voice, and reason to choose your brand.
                    </p>
                    <a class="tp-btn-white-border tp-btn-transparent" href="mailto:info@markidentitiez.com">
                        <span>Position your brand</span>
                    </a>
                </div>
            </div>
            <div class="row gx-30 align-items-stretch">
                <div class="col-lg-8">
                    <div class="bi-hero-img tp_img_reveal mb-30">
                        <img src="assets/img/new-images/brand-positioning1.png" alt="Brand positioning strategy showcase">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row h-100">
                        <div class="bi-stat mb-35">
                            <h4><span class="purecounter" data-purecounter-duration="1" data-purecounter-end="4">0</span></h4>
                            <span>Core pillars: audience, market, message, and differentiation.</span>
                        </div>

                        <div class="bi-stat mb-35">
                            <h4><span class="purecounter" data-purecounter-duration="1" data-purecounter-end="360">0</span>°</h4>
                            <span>Complete view of your audience, market, and competitors.</span>
                        </div>

                        <div class="bi-stat mb-35">
                            <h4><span class="purecounter" data-purecounter-duration="1" data-purecounter-end="1">0</span></h4>
                            <span>Clear positioning statement for your brand direction.</span>
                        </div>
                        <div class="bi-stat">
                            <h4><span class="purecounter" data-purecounter-duration="1" data-purecounter-end="100">0</span>%</h4>
                            <span>Focused communication across every brand channel.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero area end -->

    <!-- identity overview area start -->
    <section class="bi-overview-area pt-70 pb-70 pt-lg-100 pb-lg-110" data-bg-color="#111113">
        <div class="container container-1430">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <span class="bi-eyebrow d-inline-block mb-25">Positioning strategy</span>
                    <h2 class="bi-section-title mb-40">Before people remember your brand, they need to understand it.</h2>
                </div>
                <div class="col-lg-7">
                    <p class="bi-copy mb-35">
                        Brand positioning gives your business a clear place in the market. At Mark Identitiez, we study your audience, competitors, category, offer, strengths, and brand ambition to define a sharp positioning direction that makes your brand easier to understand, easier to trust, and easier to choose.
                    </p>
                    <div class="bi-pill-list">
                        <span>Audience clarity</span>
                        <span>Market research</span>
                        <span>Competitor mapping</span>
                        <span>Differentiation</span>
                        <span>Messaging strategy</span>
                        <span>Brand voice</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- identity overview area end -->

    <!-- gallery area start -->
    <section class="bi-gallery-area pt-60 pb-60 pt-lg-120 pb-lg-90">
        <div class="container container-1750">
            <div class="row gx-30">
                <div class="col-lg-4">
                    <div class="bi-image-card tp--hover-item mb-30">
                        <div class="tp--hover-img" data-displacement="assets/img/webgl/1.jpg" data-intensity="0.6" data-speedin="1" data-speedout="1">
                            <img src="assets/img/new-images/brand-positioning2.png" alt="Logo identity system">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bi-image-card tp--hover-item mb-30">
                        <div class="tp--hover-img" data-displacement="assets/img/webgl/1.jpg" data-intensity="0.6" data-speedin="1" data-speedout="1">
                            <img src="assets/img/new-images/brand-positioning3.png" alt="Brand collateral design">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bi-image-card tp--hover-item mb-30">
                        <div class="tp--hover-img" data-displacement="assets/img/webgl/1.jpg" data-intensity="0.6" data-speedin="1" data-speedout="1">
                            <img src="assets/img/new-images/brand-positioning4.png" alt="Visual identity application">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery area end -->

    <!-- system area start -->
    <section class="bi-system-area pt-70 pb-70 pt-lg-70 pb-lg-100">
        <div class="container container-1430">
            <div class="row mb-60">
                <div class="col-lg-7">
                    <span class="bi-eyebrow d-inline-block mb-25">What you get</span>
                    <h2 class="bi-section-title">Clear strategy for a stronger brand position.</h2>
                </div>
            </div>
            <div class="bi-system-item">
                <div class="row align-items-center">
                    <div class="col-lg-1"><span>01</span></div>
                    <div class="col-lg-4">
                        <h4>Market Understanding</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>We study your category, audience behavior, customer expectations, competitors, and current market language to find where your brand can stand apart.</p>
                    </div>
                </div>
            </div>
            <div class="bi-system-item">
                <div class="row align-items-center">
                    <div class="col-lg-1"><span>02</span></div>
                    <div class="col-lg-4">
                        <h4>Audience Definition</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>We define who your brand is speaking to, what they care about, what problems they want solved, and what message will make them pay attention.</p>
                    </div>
                </div>
            </div>
            <div class="bi-system-item">
                <div class="row align-items-center">
                    <div class="col-lg-1"><span>03</span></div>
                    <div class="col-lg-4">
                        <h4>Differentiation&nbsp;Strategy</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>We identify your strongest advantages, unique value points, proof areas, and emotional hooks so your brand does not sound like everyone else.</p>
                    </div>
                </div>
            </div>
            <div class="bi-system-item">
                <div class="row align-items-center">
                    <div class="col-lg-1"><span>04</span></div>
                    <div class="col-lg-4">
                        <h4>Positioning Framework</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>We create a clear positioning statement, brand promise, key messaging pillars, tone direction, and communication guidance for marketing and design teams.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- system area end -->

    <!-- banner area start -->
    <section class="bi-banner-area pb-120">
        <div class="container container-1750">
            <div class="bi-wide-img">
                <img data-speed=".8" src="assets/img/new-images/brand-positioning5.png" alt="Brand identity banner">
            </div>
        </div>
    </section>
    <!-- banner area end -->

    <!-- process area start -->
    <section class="bi-process-area pt-70 pb-70 pt-lg-120 pb-lg-120" data-bg-color="#1b1b1d">
        <div class="container container-1430">
            <div class="row align-items-end mb-70">
                <div class="col-lg-7">
                    <span class="bi-eyebrow d-inline-block mb-25">Working process</span>
                    <h2 class="bi-section-title">From market confusion to brand clarity.</h2>
                </div>
                <div class="col-lg-5">
                    <p class="bi-copy mb-0">We turn research, audience insight, and business strengths into a clear positioning direction your brand can use across identity, content, campaigns, and sales communication.</p>
                </div>
            </div>
            <div class="row gx-30">
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="bi-process-card">
                        <span>01</span>
                        <h4>Research</h4>
                        <p>We understand your business, audience, competitors, industry language, current perception, and growth goals.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="bi-process-card">
                        <span>02</span>
                        <h4>Find the Gap</h4>
                        <p>We identify market opportunities, competitor weaknesses, audience needs, and the space your brand can own.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="bi-process-card">
                        <span>03</span>
                        <h4>Define Position</h4>
                        <p>We build your positioning statement, brand promise, value proposition, messaging pillars, and tone direction.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="bi-process-card">
                        <span>04</span>
                        <h4>Apply Direction</h4>
                        <p>We guide how the positioning should reflect across your brand identity, website, content, social media, campaigns, and customer touchpoints.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- process area end -->

    <!-- best fit area start -->
    <section class="bi-fit-area pt-120 pb-120">
        <div class="container container-1750">
            <div class="bi-fit-shell">
                <div class="row g-0">
                    <div class="col-xl-5">
                        <div class="bi-fit-intro">
                            <span class="bi-eyebrow d-inline-block mb-25">Best fit for</span>
                            <h2 class="bi-section-title mb-30">Brands that need a sharper place in the customer's mind.</h2>
                            <p class="bi-copy">This service is most valuable when the offer is good but the market message still feels generic. We bring structure to what you say, how you sound, and why your brand deserves attention over similar alternatives.</p>
                            <ul>
                                <li>Businesses preparing for rebranding, launch, or category expansion</li>
                                <li>Founders struggling to explain their real difference clearly</li>
                                <li>Teams whose design and marketing feel active but not aligned</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="bi-fit-grid">
                            <div class="row gx-4 gy-4">
                                <div class="col-md-6">
                                    <div class="bi-fit-card">
                                        <span>01</span>
                                        <h4>What this fixes</h4>
                                        <p>Weak recall, broad messaging, competitor-like language, and a brand story that changes from sales deck to website to social media.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bi-fit-card">
                                        <span>02</span>
                                        <h4>How users feel the difference</h4>
                                        <p>The brand sounds easier to understand, more credible, and more focused because the message is built around one defensible point of view.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bi-fit-card">
                                        <span>03</span>
                                        <h4>What teams gain internally</h4>
                                        <p>Clearer message hierarchy for presentations, campaigns, content, website sections, and sales conversations across departments.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bi-fit-card">
                                        <span>04</span>
                                        <h4>What makes it commercially useful</h4>
                                        <p>The output is not just strategic language. It becomes a working direction for identity, communication, launches, and future brand decisions.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- best fit area end -->

    <!-- faq area start -->
    <section class="bi-fit-faq-area pt-110 pb-120">
        <div class="container container-1430">
            <div class="bi-fit-faq-head">
                <span class="bi-eyebrow d-inline-block mb-25">Decision support</span>
                <h2 class="bi-section-title mb-20">Questions clients ask before defining brand positioning.</h2>
                <p class="bi-copy">Competitor pages often explain the service deeply. This section makes the value easier to judge without making the page feel text-heavy.</p>
            </div>
            <div class="row gx-30 gy-30">
                <div class="col-lg-4">
                    <div class="bi-fit-faq-item">
                        <span>01</span>
                        <h4>Do I need positioning if I already have a logo?</h4>
                        <p>Yes, if the brand still sounds unclear. A logo improves recognition, but positioning explains why the brand matters and how it should be understood.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bi-fit-faq-item">
                        <span>02</span>
                        <h4>Will this help website and content writing too?</h4>
                        <p>Absolutely. Positioning shapes your value proposition, tone, messaging pillars, headlines, offers, and the structure of high-conversion communication.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bi-fit-faq-item">
                        <span>03</span>
                        <h4>What usually comes after positioning?</h4>
                        <p>Most brands move into identity design, packaging direction, or tonality and messaging so the strategic clarity reflects in every customer-facing asset.</p>
                    </div>
                </div>
            </div>
            <div class="bi-fit-links">
                <a href="brand-proposition.php">
                    <span>Related service</span>
                    <span>Refine your value proposition</span>
                </a>
                <a href="brand-identity.php">
                    <span>Related service</span>
                    <span>Translate strategy into identity</span>
                </a>
                <a href="contactus.php?service=Brand%20Positioning">
                    <span>Start the project</span>
                    <span>Discuss your positioning challenge</span>
                </a>
            </div>
        </div>
    </section>
    <!-- faq area end -->

    <!-- text slider area start -->
    <section class="ar-about-us-4-text-area bi-cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ar-about-us-4-text-warp">
                        <div class="swiper-container tp-brand-active">
                            <div class="swiper-wrapper slide-transtion">
                                <div class="swiper-slide">
                                    <h2 class="ar-about-us-4-text-title">DEFINE YOUR MARKET POSITION</h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="ar-about-us-4-text-title">MAKE YOUR BRAND CLEARER</h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="ar-about-us-4-text-title">STAND APART FROM COMPETITORS</h2>
                                </div>
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
