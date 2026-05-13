<?php
$title = "Brand Identity";
include("layouts/header.php"); ?>

<style>
    .bi-hero-title {
        font-size: clamp(70px, 12vw, 120px);
        line-height: .84;
        letter-spacing: 0;
    }

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
        font-size: clamp(42px, 8vw, 72px);
        line-height: .92;
        letter-spacing: 0;
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

    @media (max-width: 767px) {
        .bi-hero-img,
        .bi-image-card {
            min-height: 320px;
        }

        .bi-system-item {
            padding: 26px 0;
        }
    }
</style>

<main>

    <!-- hero area start -->
    <section class="bi-hero-area pt-180 pb-120 p-relative fix">
        <div class="container container-1750">
            <div class="row align-items-end mb-70">
                <div class="col-xl-8 col-lg-8">
                    <span class="bi-kicker d-inline-block mb-25">Brand Identity</span>
                    <h1 class="bi-hero-title text-white tp-char-animation">A visual identity built to be remembered.</h1>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <p class="bi-hero-copy mb-35">
                        We design brand identity systems that make your business instantly recognizable, consistent, and ready for every real-world touchpoint.
                    </p>
                    <a class="tp-btn-white-border tp-btn-transparent" href="mailto:info@markidentitiez.com">
                        <span>Create your identity</span>
                    </a>
                </div>
            </div>
            <div class="row gx-30 align-items-stretch">
                <div class="col-lg-8">
                    <div class="bi-hero-img tp_img_reveal mb-30">
                        <img src="assets/img/portfolio/mark/aakriti.jpg" alt="Brand identity showcase">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row h-100">
                        <div class="col-md-6 col-lg-12">
                            <div class="bi-stat mb-45">
                                <h4><span class="purecounter" data-purecounter-duration="1" data-purecounter-end="12">0</span>+</h4>
                                <span>Identity applications planned before the system is handed over.</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="bi-stat mb-45">
                                <h4><span class="purecounter" data-purecounter-duration="1" data-purecounter-end="100">0</span>%</h4>
                                <span>Designed for consistent use across print, digital, social, and space.</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="bi-stat">
                                <h4><span class="purecounter" data-purecounter-duration="1" data-purecounter-end="1">0</span></h4>
                                <span>Clear visual language your customers and team can recognize fast.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero area end -->

    <!-- identity overview area start -->
    <section class="bi-overview-area pt-110 pb-100" data-bg-color="#111113">
        <div class="container container-1430">
            <div class="row align-items-start">
                <div class="col-lg-5">
                    <span class="bi-eyebrow d-inline-block mb-25">Identity system</span>
                    <h2 class="bi-section-title mb-40">More than a logo. A complete brand language.</h2>
                </div>
                <div class="col-lg-7">
                    <p class="bi-copy mb-35">
                        Brand identity turns strategy into something people can see, feel, and trust. We build the full visual system: logo, typography, colors, graphic assets, layouts, usage rules, and application examples that keep the brand sharp everywhere it appears.
                    </p>
                    <div class="bi-pill-list">
                        <span>Logo design</span>
                        <span>Color palette</span>
                        <span>Typography</span>
                        <span>Iconography</span>
                        <span>Brand patterns</span>
                        <span>Guidelines</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- identity overview area end -->

    <!-- gallery area start -->
    <section class="bi-gallery-area pt-120 pb-90">
        <div class="container container-1750">
            <div class="row gx-30">
                <div class="col-lg-4">
                    <div class="bi-image-card tp--hover-item mb-30">
                        <div class="tp--hover-img" data-displacement="assets/img/webgl/1.jpg" data-intensity="0.6" data-speedin="1" data-speedout="1">
                            <img src="assets/img/brand/brand-1.jpg" alt="Logo identity system">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bi-image-card tp--hover-item mb-30">
                        <div class="tp--hover-img" data-displacement="assets/img/webgl/1.jpg" data-intensity="0.6" data-speedin="1" data-speedout="1">
                            <img src="assets/img/brand/brand-5.jpg" alt="Brand collateral design">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bi-image-card tp--hover-item mb-30">
                        <div class="tp--hover-img" data-displacement="assets/img/webgl/1.jpg" data-intensity="0.6" data-speedin="1" data-speedout="1">
                            <img src="assets/img/brand/brand-8.jpg" alt="Visual identity application">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery area end -->

    <!-- system area start -->
    <section class="bi-system-area pt-70 pb-120">
        <div class="container container-1430">
            <div class="row mb-60">
                <div class="col-lg-7">
                    <span class="bi-eyebrow d-inline-block mb-25">What you get</span>
                    <h2 class="bi-section-title">Identity assets that work beyond the presentation.</h2>
                </div>
            </div>
            <div class="bi-system-item">
                <div class="row align-items-center">
                    <div class="col-lg-3"><span>01</span></div>
                    <div class="col-lg-4"><h4>Logo Suite</h4></div>
                    <div class="col-lg-5"><p>Primary logo, secondary marks, icon versions, lockups, spacing rules, and usage guidance for clean application.</p></div>
                </div>
            </div>
            <div class="bi-system-item">
                <div class="row align-items-center">
                    <div class="col-lg-3"><span>02</span></div>
                    <div class="col-lg-4"><h4>Visual Toolkit</h4></div>
                    <div class="col-lg-5"><p>Color system, typography pairings, image direction, graphic elements, patterns, and design principles.</p></div>
                </div>
            </div>
            <div class="bi-system-item">
                <div class="row align-items-center">
                    <div class="col-lg-3"><span>03</span></div>
                    <div class="col-lg-4"><h4>Brand Collateral</h4></div>
                    <div class="col-lg-5"><p>Business cards, stationery, social templates, pitch deck styling, packaging cues, and launch-ready mockups.</p></div>
                </div>
            </div>
            <div class="bi-system-item">
                <div class="row align-items-center">
                    <div class="col-lg-3"><span>04</span></div>
                    <div class="col-lg-4"><h4>Guideline Document</h4></div>
                    <div class="col-lg-5"><p>A practical brand guide your team, vendors, and marketing partners can follow without confusion.</p></div>
                </div>
            </div>
        </div>
    </section>
    <!-- system area end -->

    <!-- banner area start -->
    <section class="bi-banner-area pb-120">
        <div class="container container-1750">
            <div class="bi-wide-img">
                <img data-speed=".8" src="assets/img/portfolio/mark/Linkpro-banner.png" alt="Brand identity banner">
            </div>
        </div>
    </section>
    <!-- banner area end -->

    <!-- process area start -->
    <section class="bi-process-area pt-120 pb-120" data-bg-color="#1b1b1d">
        <div class="container container-1430">
            <div class="row align-items-end mb-70">
                <div class="col-lg-7">
                    <span class="bi-eyebrow d-inline-block mb-25">Working process</span>
                    <h2 class="bi-section-title">A careful path from concept to consistency.</h2>
                </div>
                <div class="col-lg-5">
                    <p class="bi-copy mb-0">We keep the identity expressive, useful, and flexible enough to grow with the brand.</p>
                </div>
            </div>
            <div class="row gx-30">
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="bi-process-card">
                        <span>01</span>
                        <h4>Audit</h4>
                        <p>Review the current brand, competitors, audience signals, and category design language.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="bi-process-card">
                        <span>02</span>
                        <h4>Explore</h4>
                        <p>Create visual routes with logo concepts, moodboards, type, color, and application samples.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="bi-process-card">
                        <span>03</span>
                        <h4>Refine</h4>
                        <p>Shape the chosen direction into a balanced, usable, and recognizable identity system.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="bi-process-card">
                        <span>04</span>
                        <h4>Deliver</h4>
                        <p>Package final files, guidelines, templates, and rollout examples for easy execution.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- process area end -->

    <!-- text slider area start -->
    <section class="ar-about-us-4-text-area bi-cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ar-about-us-4-text-warp">
                        <div class="swiper-container tp-brand-active">
                            <div class="swiper-wrapper slide-transtion">
                                <div class="swiper-slide"><h2 class="ar-about-us-4-text-title">MAKE YOUR BRAND VISIBLE</h2></div>
                                <div class="swiper-slide"><h2 class="ar-about-us-4-text-title">DESIGN A LASTING IDENTITY</h2></div>
                                <div class="swiper-slide"><h2 class="ar-about-us-4-text-title">BUILD CONSISTENCY EVERYWHERE</h2></div>
                                <div class="swiper-slide"><h2 class="ar-about-us-4-text-title">MAKE YOUR BRAND VISIBLE</h2></div>
                                <div class="swiper-slide"><h2 class="ar-about-us-4-text-title">DESIGN A LASTING IDENTITY</h2></div>
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
