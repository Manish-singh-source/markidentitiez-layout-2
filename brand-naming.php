<?php
$title = "Brand Naming";
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
        background: linear-gradient(180deg, #ffffff 0%, #f4efe5 100%);
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
                    <span class="bi-kicker d-inline-block mb-25">Brand Naming</span>
                    <h1 class="bi-hero-title text-white tp-char-animation">Create a name people remember.</h1>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <p class="bi-hero-copy mb-35">
                        We create meaningful, memorable, and market-ready names for brands, products, services, and sub-brands.
                    </p>
                    <a class="tp-btn-white-border tp-btn-transparent" href="mailto:info@markidentitiez.com">
                        <span>Name your brand</span>
                    </a>
                </div>
            </div>
            <div class="row gx-30 align-items-stretch">
                <div class="col-lg-8">
                    <div class="bi-hero-img tp_img_reveal mb-30">
                        <img src="assets/img/new-images/brand-naming5.png" alt="Premium brand naming strategy workspace">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row h-100">
                        <div class="bi-stat mb-35">
                            <h4><span class="purecounter" data-purecounter-duration="1" data-purecounter-end="5">0</span></h4>
                            <span>Core naming focus: meaning, recall, sound, relevance, and uniqueness.</span>
                        </div>

                        <div class="bi-stat mb-35">
                            <h4><span class="purecounter" data-purecounter-duration="1" data-purecounter-end="360">0</span>°</h4>
                            <span>Clear naming direction for brand, product, service, and sub-brand launches.</span>
                        </div>

                        <div class="bi-stat mb-35">
                            <h4><span class="purecounter" data-purecounter-duration="1" data-purecounter-end="1">0</span></h4>
                            <span>Names shaped around audience, category, tone, and business positioning.</span>
                        </div>
                        <div class="bi-stat">
                            <h4><span class="purecounter" data-purecounter-duration="1" data-purecounter-end="100">0</span>%</h4>
                            <span>Practical naming options built for digital, print, and market use.</span>
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
                    <span class="bi-eyebrow d-inline-block mb-25">Naming strategy</span>
                    <h2 class="bi-section-title mb-40">A strong name gives your brand the right first impression.</h2>
                </div>
                <div class="col-lg-7">
                    <p class="bi-copy mb-35">
                        Brand Naming helps your business launch with a name that is clear, memorable, and aligned with your brand purpose. At Mark Identitiez, we create names for companies, products, services, collections, and sub-brands that feel relevant, distinctive, and easy to remember.
                    </p>
                    <div class="bi-pill-list">
                        <span>Company naming</span>
                        <span>Product naming</span>
                        <span>Service naming</span>
                        <span>Sub-brand naming</span>
                        <span>Name shortlisting</span>
                        <span>Naming system</span>
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
                            <img src="assets/img/new-images/brand-naming2.png" alt="Brand naming ideas and word exploration">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bi-image-card tp--hover-item mb-30">
                        <div class="tp--hover-img" data-displacement="assets/img/webgl/1.jpg" data-intensity="0.6" data-speedin="1" data-speedout="1">
                            <img src="assets/img/new-images/brand-naming3.png" alt="Name shortlisting and naming strategy board">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bi-image-card tp--hover-item mb-30">
                        <div class="tp--hover-img" data-displacement="assets/img/webgl/1.jpg" data-intensity="0.6" data-speedin="1" data-speedout="1">
                            <img src="assets/img/new-images/brand-naming4.png" alt="Brand name application across touchpoints">
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
                    <h2 class="bi-section-title">A name that sounds right, feels right, and fits your brand.</h2>
                </div>
            </div>
            <div class="bi-system-item">
                <div class="row align-items-center">
                    <div class="col-lg-1"><span>01</span></div>
                    <div class="col-lg-4">
                        <h4>Name Strategy</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>We define the naming direction based on your brand purpose, audience, category, personality, and market positioning.</p>
                    </div>
                </div>
            </div>
            <div class="bi-system-item">
                <div class="row align-items-center">
                    <div class="col-lg-1"><span>02</span></div>
                    <div class="col-lg-4">
                        <h4>Name Exploration</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>We create multiple name ideas using meaning, sound, emotion, language, memorability, and brand relevance.</p>
                    </div>
                </div>
            </div>
            <div class="bi-system-item">
                <div class="row align-items-center">
                    <div class="col-lg-1"><span>03</span></div>
                    <div class="col-lg-4">
                        <h4>Name Shortlisting</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>We filter name options based on clarity, uniqueness, pronunciation, recall value, and long-term brand use.</p>
                    </div>
                </div>
            </div>
            <div class="bi-system-item">
                <div class="row align-items-center">
                    <div class="col-lg-1"><span>04</span></div>
                    <div class="col-lg-4">
                        <h4>Naming System</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>We create a structured naming approach for products, services, collections, sub-brands, and future extensions.</p>
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
                <img data-speed=".8" src="assets/img/new-images/naming.png" alt="Premium brand naming strategy banner">
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
                    <h2 class="bi-section-title">From rough name ideas to a clear brand-ready name.</h2>
                </div>
                <div class="col-lg-5">
                    <p class="bi-copy mb-0">We turn your business idea, brand personality, audience, and market direction into names that are simple, memorable, and ready for brand use.</p>
                </div>
            </div>
            <div class="row gx-30">
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="bi-process-card">
                        <span>01</span>
                        <h4>Understand Brand</h4>
                        <p>We study your business, audience, category, competitors, positioning, tone, and future growth direction.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="bi-process-card">
                        <span>02</span>
                        <h4>Explore Names</h4>
                        <p>We create name ideas using different naming styles, meanings, sounds, emotions, and word directions.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="bi-process-card">
                        <span>03</span>
                        <h4>Shortlist Options</h4>
                        <p>We refine the strongest names based on recall, clarity, uniqueness, pronunciation, and brand fit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="bi-process-card">
                        <span>04</span>
                        <h4>Finalize Direction</h4>
                        <p>We present selected name options with meaning, usage direction, and basic brand application guidance.</p>
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
                            <h2 class="bi-section-title mb-30">Naming projects that need more than random word options.</h2>
                            <p class="bi-copy">This service is built for businesses that want a name with logic behind it: one that sounds right, supports positioning, and can grow into a full identity system without feeling forced.</p>
                            <ul>
                                <li>New brand launches, product launches, and sub-brand creation</li>
                                <li>Businesses entering competitive categories where recall matters</li>
                                <li>Founders who need naming routes with meaning, tone, and extension potential</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="bi-fit-grid">
                            <div class="row gx-4 gy-4">
                                <div class="col-md-6">
                                    <div class="bi-fit-card">
                                        <span>01</span>
                                        <h4>What bad naming causes</h4>
                                        <p>Confusion, weak recall, hard pronunciation, generic category overlap, and a poor foundation for future brand communication.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bi-fit-card">
                                        <span>02</span>
                                        <h4>What stronger naming changes</h4>
                                        <p>The brand sounds more intentional, memorable, and commercially usable across packaging, logo design, website, and presentations.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bi-fit-card">
                                        <span>03</span>
                                        <h4>How we make it practical</h4>
                                        <p>We combine meaning, sound, personality, and long-term brand fit instead of producing disconnected option lists with no strategic logic.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bi-fit-card">
                                        <span>04</span>
                                        <h4>What comes next naturally</h4>
                                        <p>Once the name is right, identity, tonality, packaging, and communication design become faster, sharper, and more coherent.</p>
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
                <h2 class="bi-section-title mb-20">Questions clients ask before starting a naming project.</h2>
                <p class="bi-copy">This helps the user understand scope quickly, similar to how stronger competitor pages reduce uncertainty before enquiry.</p>
            </div>
            <div class="row gx-30 gy-30">
                <div class="col-lg-4">
                    <div class="bi-fit-faq-item">
                        <span>01</span>
                        <h4>Can you name products, sub-brands, and services too?</h4>
                        <p>Yes. We work on company names, product names, collections, service lines, and structured naming systems for future expansion.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bi-fit-faq-item">
                        <span>02</span>
                        <h4>Will we get multiple routes or only one final option?</h4>
                        <p>We explore multiple naming directions first, then shortlist the strongest options based on recall, fit, clarity, and brand relevance.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bi-fit-faq-item">
                        <span>03</span>
                        <h4>What service should follow once the name is finalized?</h4>
                        <p>Most clients move into identity design and tonality so the new name gets the right visual and verbal expression from the start.</p>
                    </div>
                </div>
            </div>
            <div class="bi-fit-links">
                <a href="brand-identity.php">
                    <span>Related service</span>
                    <span>Create the visual identity next</span>
                </a>
                <a href="brand-tonality-messaging.php">
                    <span>Related service</span>
                    <span>Shape tone and messaging</span>
                </a>
                <a href="contactus.php?service=Brand%20Naming">
                    <span>Start the project</span>
                    <span>Discuss your naming brief</span>
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
                                    <h2 class="ar-about-us-4-text-title">CREATE A NAME PEOPLE REMEMBER</h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="ar-about-us-4-text-title">NAME YOUR BRAND WITH PURPOSE</h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="ar-about-us-4-text-title">BUILD A STRONG NAMING SYSTEM</h2>
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
