<?php
$title = "Packaging Design";
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

    @media (max-width: 767px) {

        .bi-hero-img,
        .bi-image-card {
            min-height: 320px;
        }

        .bi-system-item {
            padding: 26px 0;
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
                    <span class="bi-kicker d-inline-block mb-25">Packaging Design</span>
                    <h1 class="bi-hero-title text-white tp-char-animation">Design packaging that sells before it speaks.</h1>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <p class="bi-hero-copy mb-35">
                        We create premium product packaging that attracts attention, explains clearly, and builds customer trust.
                    </p>
                    <a class="tp-btn-white-border tp-btn-transparent" href="mailto:info@markidentitiez.com">
                        <span>Design your packaging</span>
                    </a>
                </div>
            </div>
            <div class="row gx-30 align-items-stretch">
                <div class="col-lg-8">
                    <div class="bi-hero-img tp_img_reveal mb-30">
                        <img src="assets/img/new-images/packaging-design1.png" alt="Premium packaging design showcase">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row h-100">
                        <div class="bi-stat mb-35">
                            <h4><span class="purecounter" data-purecounter-duration="1" data-purecounter-end="5">0</span></h4>
                            <span>Core packaging elements: label, structure, color, typography, and product information.</span>
                        </div>

                        <div class="bi-stat mb-35">
                            <h4><span class="purecounter" data-purecounter-duration="1" data-purecounter-end="360">0</span>°</h4>
                            <span>Consistent packaging system across every product variant and category.</span>
                        </div>

                        <div class="bi-stat mb-35">
                            <h4><span class="purecounter" data-purecounter-duration="1" data-purecounter-end="1">0</span></h4>
                            <span>Clear shelf impact that helps your product stand out from competitors.</span>
                        </div>
                        <div class="bi-stat">
                            <h4><span class="purecounter" data-purecounter-duration="1" data-purecounter-end="100">0</span>%</h4>
                            <span>Brand-focused packaging designed for trust, recall, and purchase decisions.</span>
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
                    <span class="bi-eyebrow d-inline-block mb-25">Packaging system</span>
                    <h2 class="bi-section-title mb-40">Your packaging is often the first sales conversation.</h2>
                </div>
                <div class="col-lg-7">
                    <p class="bi-copy mb-35">
                        Packaging Design gives your product a clear, attractive, and brand-focused presentation. At Mark Identitiez, we design labels, boxes, pouches, bottles, sleeves, and product packaging systems that help customers notice, understand, and trust your product faster.
                    </p>
                    <div class="bi-pill-list">
                        <span>Label design</span>
                        <span>Box design</span>
                        <span>Pouch design</span>
                        <span>Product range</span>
                        <span>Shelf appeal</span>
                        <span>Information layout</span>
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
                            <img src="assets/img/new-images/packaging-design2.png" alt="Premium product label and box packaging design">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bi-image-card tp--hover-item mb-30">
                        <div class="tp--hover-img" data-displacement="assets/img/webgl/1.jpg" data-intensity="0.6" data-speedin="1" data-speedout="1">
                            <img src="assets/img/new-images/packaging-design3.png" alt="Packaging design system for product range">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bi-image-card tp--hover-item mb-30">
                        <div class="tp--hover-img" data-displacement="assets/img/webgl/1.jpg" data-intensity="0.6" data-speedin="1" data-speedout="1">
                            <img src="assets/img/new-images/packaging-design4.png" alt="Brand packaging application across products">
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
                    <h2 class="bi-section-title">Packaging that makes your product look clear, premium, and ready to sell.</h2>
                </div>
            </div>
            <div class="bi-system-item">
                <div class="row align-items-center">
                    <div class="col-lg-1"><span>01</span></div>
                    <div class="col-lg-4">
                        <h4>Packaging Concept</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>We create a strong packaging direction based on your product, audience, category, price point, and brand personality.</p>
                    </div>
                </div>
            </div>
            <div class="bi-system-item">
                <div class="row align-items-center">
                    <div class="col-lg-1"><span>02</span></div>
                    <div class="col-lg-4">
                        <h4>Label & Layout Design</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>We design clear product labels with the right balance of logo, product name, features, benefits, ingredients, and legal details.</p>
                    </div>
                </div>
            </div>
            <div class="bi-system-item">
                <div class="row align-items-center">
                    <div class="col-lg-1"><span>03</span></div>
                    <div class="col-lg-4">
                        <h4>Product Range System</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>We build a consistent packaging system for different variants, sizes, flavors, collections, or product categories.</p>
                    </div>
                </div>
            </div>
            <div class="bi-system-item">
                <div class="row align-items-center">
                    <div class="col-lg-1"><span>04</span></div>
                    <div class="col-lg-4">
                        <h4>Shelf Appeal</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>We design packaging that looks attractive in stores, marketplaces, product photos, and digital promotions.</p>
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
                <img data-speed=".8" src="assets/img/new-images/packaging-design5.png" alt="Premium packaging design system banner">
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
                    <h2 class="bi-section-title">From product idea to shelf-ready packaging.</h2>
                </div>
                <div class="col-lg-5">
                    <p class="bi-copy mb-0">We turn your product details, brand identity, and market positioning into packaging that looks premium, communicates clearly, and supports sales.</p>
                </div>
            </div>
            <div class="row gx-30">
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="bi-process-card">
                        <span>01</span>
                        <h4>Product Study</h4>
                        <p>We understand your product, category, audience, competitors, packaging format, and customer buying behavior.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="bi-process-card">
                        <span>02</span>
                        <h4>Design Direction</h4>
                        <p>We define the packaging style, color mood, typography, graphics, structure, and overall visual approach.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="bi-process-card">
                        <span>03</span>
                        <h4>Packaging System</h4>
                        <p>We design labels, boxes, pouches, sleeves, or product range layouts with clear hierarchy and brand consistency.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="bi-process-card">
                        <span>04</span>
                        <h4>Final Artwork</h4>
                        <p>We prepare clean packaging artwork with proper layout, product details, print-ready structure, and usage guidance.</p>
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
                                <div class="swiper-slide">
                                    <h2 class="ar-about-us-4-text-title">CREATE PACKAGING THAT STANDS OUT</h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="ar-about-us-4-text-title">MAKE YOUR PRODUCT LOOK PREMIUM</h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="ar-about-us-4-text-title">BUILD A CONSISTENT PACKAGING SYSTEM</h2>
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