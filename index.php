<?php
$title = "Home";
include('layouts/header.php'); ?>

<style>
    .tp-service-area .tp-service-item>.row {
        align-items: center;
    }

    .tp-service-area .tp-service-item {
        padding: 18px 0;
    }

    .tp-service-area .tp-service-number {
        padding-top: 10px;
    }

    .tp-service-area .tp-service-number span {
        display: inline-block;
        min-width: 52px;
        font-size: 26px;
        line-height: 1;
    }

    .tp-service-area .tp-service-content {
        max-width: 780px;
        padding-right: 24px;
    }

    .tp-service-area .tp-service-content .tp-section-title {
        margin-bottom: 16px;
        font-size: clamp(34px, 4.4vw, 64px);
        line-height: 0.96;
        letter-spacing: -0.05em;
    }

    .tp-service-area .tp-service-content p {
        max-width: 660px;
        margin-bottom: 28px;
        font-size: 17px;
        line-height: 1.58;
        color: rgba(255, 255, 255, 0.76);
    }

    .tp-service-area .tp-service-thumb {
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .tp-service-area .tp-service-thumb img {
        width: min(100%, 360px);
        max-height: 360px;
        object-fit: contain;
    }

    @media (max-width: 1199px) {
        .tp-service-area .tp-service-content .tp-section-title {
            font-size: clamp(30px, 4vw, 52px);
        }

        .tp-service-area .tp-service-content p {
            font-size: 16px;
            max-width: 600px;
        }

        .tp-service-area .tp-service-thumb img {
            width: min(100%, 330px);
            max-height: 330px;
        }
    }

    @media (max-width: 991px) {
        .tp-service-area .tp-service-number {
            padding-top: 0;
            margin-bottom: 10px;
        }

        .tp-service-area .tp-service-content {
            max-width: none;
            padding-right: 0;
            margin-bottom: 20px;
        }

        .tp-service-area .tp-service-content .tp-section-title {
            font-size: clamp(28px, 6vw, 42px);
            margin-bottom: 12px;
        }

        .tp-service-area .tp-service-content p {
            max-width: none;
            margin-bottom: 22px;
            font-size: 15px;
        }

        .tp-service-area .tp-service-thumb {
            justify-content: center;
        }

        .tp-service-area .tp-service-thumb img {
            width: min(100%, 280px);
            max-height: 280px;
        }
    }

    @media (max-width: 767px) {
        .tp-service-area .tp-service-item {
            padding: 10px 0;
        }

        .tp-service-area .tp-service-number span {
            min-width: 0;
            font-size: 20px;
        }

        .tp-service-area .tp-service-content .tp-section-title {
            font-size: 28px;
            line-height: 1;
        }

        .tp-service-area .tp-service-content p {
            font-size: 14px;
            line-height: 1.55;
        }

        .tp-service-area .tp-service-thumb img {
            width: min(100%, 240px);
            max-height: 240px;
        }
    }

    .mi-home-faq-area {
        padding: 90px 0 28px;
        background: #0b0b0d;
    }

    .mi-home-faq-title h4 {
        margin: 0 0 12px;
        color: #fff;
        font-size: clamp(28px, 4vw, 42px);
        line-height: 1;
        letter-spacing: -0.04em;
    }

    .mi-home-faq-title p {
        margin: 0;
        max-width: 560px;
        color: rgba(255, 255, 255, 0.68);
        font-size: 15px;
        line-height: 1.65;
    }

    .mi-home-faq-list {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 16px 20px;
        margin-top: 34px;
    }

    .mi-home-faq-item {
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 18px;
        background: rgba(255, 255, 255, 0.02);
        padding: 18px 20px;
    }

    .mi-home-faq-item strong {
        display: block;
        margin-bottom: 8px;
        color: #fff;
        font-size: 17px;
        line-height: 1.35;
    }

    .mi-home-faq-item p {
        margin: 0;
        color: rgba(255, 255, 255, 0.68);
        font-size: 14px;
        line-height: 1.6;
    }

    .mi-home-cta-strip {
        padding: 28px 0 100px;
        background: #0b0b0d;
    }

    .mi-home-cta-box {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
        padding: 26px 28px;
        border-radius: 24px;
        background: linear-gradient(135deg, rgba(215, 238, 112, 0.09), rgba(255, 255, 255, 0.03));
        border: 1px solid rgba(215, 238, 112, 0.14);
    }

    .mi-home-cta-copy h4 {
        margin: 0 0 8px;
        color: #fff;
        font-size: clamp(24px, 3vw, 34px);
        line-height: 1.04;
        letter-spacing: -0.04em;
    }

    .mi-home-cta-copy p {
        margin: 0;
        color: rgba(255, 255, 255, 0.7);
        font-size: 15px;
        line-height: 1.6;
    }

    .mi-home-cta-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
        align-items: center;
        justify-content: flex-end;
    }

    .mi-home-cta-link {
        color: #d7ee70;
        font-size: 14px;
        letter-spacing: 0.08em;
        text-transform: uppercase;
    }

    @media (max-width: 991px) {
        .mi-home-faq-list {
            grid-template-columns: 1fr;
        }

        .mi-home-cta-box {
            flex-direction: column;
            align-items: flex-start;
        }

        .mi-home-cta-actions {
            justify-content: flex-start;
        }
    }

    @media (max-width: 767px) {
        .mi-home-faq-area {
            padding: 70px 0 24px;
        }

        .mi-home-faq-item {
            padding: 16px;
        }

        .mi-home-faq-item strong {
            font-size: 16px;
        }

        .mi-home-faq-item p,
        .mi-home-cta-copy p {
            font-size: 14px;
        }

        .mi-home-cta-strip {
            padding: 24px 0 80px;
        }

        .mi-home-cta-box {
            padding: 22px 20px;
            border-radius: 20px;
        }
    }
</style>

<main>

    <!-- project slider area start -->
    <div class="tp-portfolio-slider__main tp-portfolio-slider__style-2 fix">
        <!-- <div class="tp-portfolio-slider__copyright">
            <p>We Love to Create Brands</p>
        </div> -->
        <div class="tp-portfolio-slider__mail">
            <a href="mailto:info@markidentitiez.com">info@markidentitiez.com</a>
        </div>
        <div class="tp-portfolio-slider__social">
            <a href="#">Fb</a>
            <a href="#">In</a>
            <a href="#">Be</a>
        </div>
        <div class="tp-portfolio-slider__wrap slider slider--bg">
            <div class="tp-portfolio-slider__item">
                <video src="https://digipanda.co.in/assets/video-banner.mp4" autoplay muted loop
                    playsinline preload="auto"></video>
            </div>
            <div class="tp-portfolio-slider__item">
                <video src="assets/video/banner02.mp4" autoplay muted loop
                    playsinline preload="auto"></video>
            </div>
            <div class="tp-portfolio-slider__item">
                <video src="assets/video/banner03.mp4" autoplay muted loop
                    playsinline preload="auto"></video>
            </div>
            <!-- <div class="tp-portfolio-slider__item">
                    <div class="tp-portfolio-slider__item-inner"
                        data-background="assets/img/project-slider-img/cr-slider-8.jpg"></div>
                </div>
                <div class="tp-portfolio-slider__item">
                    <div class="tp-portfolio-slider__item-inner"
                        data-background="assets/img/project-slider-img/cr-slider-9.jpg"></div>
                </div> -->
        </div>
        <div class="tp-portfolio-slider__wrap tp-portfolio-slider-small__wrap slider slider--fg d-none">
            <div class="tp-portfolio-slider__item">
                <div class="tp-portfolio-slider__item-inner"
                    data-background="assets/img/project-slider-img/6-small.html"></div>
            </div>
            <div class="tp-portfolio-slider__item">
                <div class="tp-portfolio-slider__item-inner"
                    data-background="assets/img/project-slider-img/7-small.html"></div>
            </div>
            <div class="tp-portfolio-slider__item">
                <div class="tp-portfolio-slider__item-inner"
                    data-background="assets/img/project-slider-img/8-small.html"></div>
            </div>
            <!-- <div class="tp-portfolio-slider__item">
                    <div class="tp-portfolio-slider__item-inner"
                        data-background="assets/img/project-slider-img/9-small.html"></div>
                </div>
                <div class="tp-portfolio-slider__item">
                    <div class="tp-portfolio-slider__item-inner"
                        data-background="assets/img/project-slider-img/10-small.html"></div>
                </div> -->
        </div>
        <!-- <div class="tp-portfolio-slider-type">
            <div class="type__item">
                <h4 class="tp-portfolio-slider-type-title"><a
                        href="portfolio-details-classic-stack.html">.</a></h4>
            </div>
            <div class="type__item">
                <h4 class="tp-portfolio-slider-type-title"><a
                        href="portfolio-details-classic-stack.html">.</a></h4>
            </div>
            <div class="type__item">
                <h4 class="tp-portfolio-slider-type-title"><a
                        href="portfolio-details-classic-stack.html">.</a></h4>
            </div>
            <div class="type__item">
                    <h4 class="tp-portfolio-slider-type-title"><a href="portfolio-details-classic-stack.html"></a></h4>
                </div>
                <div class="type__item">
                    <h4 class="tp-portfolio-slider-type-title"><a href="portfolio-details-classic-stack.html"></a></h4>
                </div>
        </div> -->
        <nav class="slider-nav mb-80">
            <button class="slider-nav__item slider-nav__item--prev d-flex align-items-center ml-100">
                <span class="icon-1">
                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 1L1 7L7 13" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </span>
                <span class="slider-nav-text ml-5">Prev</span>
            </button>
            <button class="slider-nav__item slider-nav__item--next d-flex align-items-center mr-100">
                <span class="slider-nav-text mr-5">Next</span>
                <span class="icon-2">
                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 13L7 7L1 1" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </span>
            </button>
        </nav>
    </div>
    <!-- project slider area end -->

    <!-- about area start -->
    <div class="tp-about-area pt-100 pb-120 tp-bounce-trigger">
        <div class="container">
            <div class="tp-about-box p-relative">
                <div class="tp-about-shape-1 tp-bounce d-md-block">
                    <div class="mi-logo-animation" aria-label="Mark Identitiez">
                        <span class="mi-logo-swoosh mi-logo-swoosh-top" aria-hidden="true"></span>
                        <span class="mi-logo-swoosh mi-logo-swoosh-bottom" aria-hidden="true"></span>
                        <span class="mi-logo-leaf mi-logo-leaf-lg" aria-hidden="true"></span>
                        <span class="mi-logo-leaf mi-logo-leaf-md" aria-hidden="true"></span>
                        <span class="mi-logo-leaf mi-logo-leaf-sm" aria-hidden="true"></span>

                        <div class="mi-logo-text">
                            <div class="mi-logo-word mi-logo-mark" aria-hidden="true">
                                <span>M</span><span>A</span><span>R</span><span>K</span>
                            </div>
                            <div class="mi-logo-word mi-logo-identitiez" aria-hidden="true">
                                <span>I</span><span>D</span><span>E</span><span>N</span><span>T</span><span>I</span><span>T</span><span>I</span><span>E</span><span>Z</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3">
                        <div class="tp-about-title-box">
                            <span class="tp-section-subtitle pre tp_fade_anim">WHO WE ARE</span>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="tp-about-wrap">
                            <div class="tp-about-text tp_fade_anim">
                                <p>
                                    <span class="green-text">We do not just make brands look better.</span>
                                    We make them easier to trust, remember, and choose.
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-xl-5 col-lg-4 col-md-5">
                                    <div class="tp-about-thumb">
                                        <img data-speed=".8"
                                            src="assets/img/new-images/about.png"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-8 col-md-7">
                                    <div class="tp-about-funcact-wrap">
                                        <div class="tp-about-avater-info">
                                            <!-- <img class="tp_fade_anim" data-delay=".3" data-fade-from="right"
                                                            src="assets/img/home-01/about/about-avater-dark.png" alt=""> -->
                                            <div class="tp_text_anim">
                                                <p>At Mark Identitiez, we build brands with business intent. From positioning and identity to packaging and communication, every decision is made to help your brand feel clearer, more premium, and easier to trust. We do not create isolated visuals. We create brand systems that stay consistent across every touchpoint.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-6">
                                                <div class="tp-about-funcact-item tp_fade_anim mb-30"
                                                    data-delay=".3">
                                                    <span><i data-purecounter-duration="1"
                                                            data-purecounter-end="98"
                                                            class="purecounter">0</i>%</span>
                                                    <p>Client Satisfaction <br> Rate</p>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-6">
                                                <div class="tp-about-funcact-item tp_fade_anim mb-30"
                                                    data-delay=".5">
                                                    <span><i data-purecounter-duration="1"
                                                            data-purecounter-end="125"
                                                            class="purecounter">0</i>+</span>
                                                    <p>Projects Successfully <br> Delivered</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-6">
                                                <div class="tp-about-funcact-item tp_fade_anim mb-30"
                                                    data-delay=".3">
                                                    <span><i data-purecounter-duration="1"
                                                            data-purecounter-end="24"
                                                            class="purecounter">0</i>+</span>
                                                    <p>Industries <br> Served</p>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-6">
                                                <div class="tp-about-funcact-item tp_fade_anim mb-30"
                                                    data-delay=".5">
                                                    <span><i data-purecounter-duration="1"
                                                            data-purecounter-end="10"
                                                            class="purecounter">0</i>+</span>
                                                    <p>Years of Creative <br>Experience</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->

    <!-- showcase area start -->
    <div class="studio-showcase-area">
        <div class="container-fluid">
            <div class="studio-showcase-wrap">
                <div class="studio-showcase-main d-flex">
                    <div class="studio-showcase-item d-none d-md-block" data-speed=".7">
                        <div class="studio-showcase-thumb mb-30">
                            <img src="assets/img/new-images/Portfolio-1.png" alt="">
                        </div>
                        <div class="studio-showcase-thumb mb-30">
                            <img src="assets/img/new-images/Portfolio-1.png" alt="">
                        </div>
                        <div class="studio-showcase-thumb mb-30">
                            <img src="assets/img/new-images/FP-7.png" alt="">
                        </div>
                        <div class="studio-showcase-thumb mb-30">
                            <img src="assets/img/new-images/FP-8.png" alt="">
                        </div>
                        <div class="studio-showcase-thumb mb-30">
                            <img src="assets/img/new-images/Portfolio-1.png" alt="">
                        </div>
                        <div class="studio-showcase-thumb mb-30">
                            <img src="assets/img/home-06/showcase/showcase-7.jpg" alt="">
                        </div>
                    </div>
                    <div class="studio-showcase-item" data-speed="1.1">
                        <div class="studio-showcase-thumb mb-30">
                            <img src="assets/img/new-images/FP-4.png" alt="">
                        </div>
                        <div class="studio-showcase-thumb mb-30">
                            <img src="assets/img/new-images/FP-2.png" alt="">
                        </div>
                        <div class="studio-showcase-thumb mb-30">
                            <img src="assets/img/new-images/FP-5.png" alt="">
                        </div>
                        <div class="studio-showcase-thumb mb-30">
                            <img src="assets/img/new-images/FP-3.png" alt="">
                        </div>
                        <div class="studio-showcase-thumb mb-30">
                            <img src="assets/img/new-images/FP-5.png" alt="">
                        </div>
                        <div class="studio-showcase-thumb mb-30">
                            <img src="assets/img/home-06/showcase/showcase-5.jpg" alt="">
                        </div>
                        <div class="studio-showcase-thumb mb-30">
                            <img src="assets/img/new-images/FP-5.png" alt="">
                        </div>
                        <div class="studio-showcase-thumb mb-30">
                            <img src="assets/img/new-images/FP-2.png" alt="">
                        </div>
                        <div class="studio-showcase-thumb mb-30">
                            <img src="assets/img/home-06/showcase/showcase-5.jpg" alt="">
                        </div>
                        <div class="studio-showcase-thumb mb-30">
                            <img src="assets/img/new-images/FP-5.png" alt="">
                        </div>
                        <div class="studio-showcase-thumb mb-30">
                            <img src="assets/img/new-images/FP-2.png" alt="">
                        </div>
                        <div class="studio-showcase-thumb mb-30">
                            <img src="assets/img/home-06/showcase/showcase-5.jpg" alt="">
                        </div>
                    </div>
                    <div class="studio-showcase-item d-none d-md-block" data-speed=".7">
                        <div class="studio-showcase-thumb mb-30">
                            <img src="assets/img/new-images/Portfolio-3.png" alt="">
                        </div>
                        <div class="studio-showcase-thumb mb-30">
                            <img src="assets/img/new-images/Portfolio-3.png" alt="">
                        </div>
                        <div class="studio-showcase-thumb mb-30">
                            <img src="assets/img/new-images/Portfolio-2.png" alt="">
                        </div>
                        <div class="studio-showcase-thumb mb-30">
                            <img src="assets/img/new-images/FP-1.png" alt="">
                        </div>
                        <div class="studio-showcase-thumb mb-30">
                            <img src="assets/img/new-images/FP-2.png" alt="">
                        </div>
                        <div class="studio-showcase-thumb mb-30">
                            <img src="assets/img/home-06/showcase/showcase-9.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- showcase area end -->

    <!-- service area start -->
    <div class="tp-service-area pt-100">
        <div class="container-fluid p-0">
            <div class="row gx-0">
                <div class="col-12">
                    <div class="tp-service-title-box">
                        <span class="tp-section-subtitle pre">Services</span>
                    </div>
                </div>
            </div>
            <div class="tp-service-pin">
                <div class="tp-service-item tp-service-panel">
                    <div class="row">
                        <div class="col-xxl-2 col-xl-2 col-lg-1 col-md-1">
                            <div class="tp-service-number">
                                <span>01.</span>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-7 col-md-7">
                            <div class="tp-service-content">
                                <h4 class="tp-section-title"><a class="tp_text_invert"
                                        href="service.php">Brand Strategy</a>
                                </h4>
                                <p>
                                    Clear direction before creative execution <br>
                                    We define your proposition, positioning, audience focus, category opportunity,
                                    and brand architecture so every future touchpoint starts with stronger business clarity.
                                </p>
                                <div class="tp-service-btn">
                                    <a href="service.php" class="tp-btn-black btn-red-bg">
                                        <span class="tp-btn-black-filter-blur">
                                            <svg width="0" height="0">
                                                <defs>
                                                    <filter id="buttonFilter2">
                                                        <feGaussianBlur in="SourceGraphic" stdDeviation="5"
                                                            result="blur"></feGaussianBlur>
                                                        <feColorMatrix in="blur"
                                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9">
                                                        </feColorMatrix>
                                                        <feComposite in="SourceGraphic" in2="buttonFilter2"
                                                            operator="atop"></feComposite>
                                                        <feBlend in="SourceGraphic" in2="buttonFilter2">
                                                        </feBlend>
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </span>
                                        <span class="tp-btn-black-filter d-inline-flex align-items-center">
                                            <span class="tp-btn-black-text">See Our Services</span>
                                            <span class="tp-btn-black-circle">
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                                <!-- SERVICES -->

                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                            <div class="tp-service-thumb text-end">
                                <img class="tp_fade_anim" data-fade-from="right" data-delay=".2"
                                    src="assets/img/new-images/service-strategy.svg" alt="Animated brand strategy visual">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-service-item tp-service-panel">
                    <div class="row">
                        <div class="col-xxl-2 col-xl-2 col-lg-1 col-md-1">
                            <div class="tp-service-number">
                                <span>02.</span>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-7 col-md-7">
                            <div class="tp-service-content">
                                <h4 class="tp-section-title"><a class="tp_text_invert"
                                        href="service.php">Brand Identity</a></h4>
                                <p>
                                    Recognition built beyond the logo <br>
                                    We create identity systems with logos, typography, colors, visual language,
                                    and brand guidelines that keep your business recognizable across every touchpoint.
                                </p>
                                <div class="tp-service-btn">
                                    <a href="service.php" class="tp-btn-black btn-red-bg">
                                        <span class="tp-btn-black-filter-blur">
                                            <svg width="0" height="0">
                                                <defs>
                                                    <filter id="buttonFilter3">
                                                        <feGaussianBlur in="SourceGraphic" stdDeviation="5"
                                                            result="blur"></feGaussianBlur>
                                                        <feColorMatrix in="blur"
                                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9">
                                                        </feColorMatrix>
                                                        <feComposite in="SourceGraphic" in2="buttonFilter3"
                                                            operator="atop"></feComposite>
                                                        <feBlend in="SourceGraphic" in2="buttonFilter3">
                                                        </feBlend>
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </span>
                                        <span class="tp-btn-black-filter d-inline-flex align-items-center">
                                            <span class="tp-btn-black-text">See Our Services</span>
                                            <span class="tp-btn-black-circle">
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                                <!-- SERVICES -->

                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                            <div class="tp-service-thumb text-end">
                                <img class="tp_fade_anim" data-fade-from="right" data-delay=".2"
                                    src="assets/img/new-images/service-identity.svg" alt="Animated brand identity visual">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-service-item tp-service-panel">
                    <div class="row">
                        <div class="col-xxl-2 col-xl-2 col-lg-1 col-md-1">
                            <div class="tp-service-number">
                                <span>03.</span>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-7 col-md-7">
                            <div class="tp-service-content">
                                <h4 class="tp-section-title"><a class="tp_text_invert"
                                        href="service.php">Packaging Design</a></h4>
                                <p>
                                    Shelf impact that supports selection <br>
                                    We design packaging systems that improve product perception, clarify value,
                                    and help brands stand out faster in retail, ecommerce, and launch environments.
                                </p>
                                <div class="tp-service-btn">
                                    <a href="service.php" class="tp-btn-black btn-red-bg">
                                        <span class="tp-btn-black-filter-blur">
                                            <svg width="0" height="0">
                                                <defs>
                                                    <filter id="buttonFilter4">
                                                        <feGaussianBlur in="SourceGraphic" stdDeviation="5"
                                                            result="blur"></feGaussianBlur>
                                                        <feColorMatrix in="blur"
                                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9">
                                                        </feColorMatrix>
                                                        <feComposite in="SourceGraphic" in2="buttonFilter4"
                                                            operator="atop"></feComposite>
                                                        <feBlend in="SourceGraphic" in2="buttonFilter4">
                                                        </feBlend>
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </span>
                                        <span class="tp-btn-black-filter d-inline-flex align-items-center">
                                            <span class="tp-btn-black-text">See Our Services</span>
                                            <span class="tp-btn-black-circle">
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                                <!-- SERVICES -->


                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                            <div class="tp-service-thumb text-end">
                                <img class="tp_fade_anim" data-fade-from="right" data-delay=".2"
                                    src="assets/img/new-images/service-packaging.svg" alt="Animated packaging design visual">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-service-item tp-service-panel">
                    <div class="row">
                        <div class="col-xxl-2 col-xl-2 col-lg-1 col-md-1">
                            <div class="tp-service-number">
                                <span>04.</span>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-7 col-md-7">
                            <div class="tp-service-content">
                                <h4 class="tp-section-title"><a class="tp_text_invert"
                                        href="service.php">Brand Communication</a></h4>
                                <p>
                                    Market-facing assets with a consistent voice <br>
                                    We turn the brand into presentations, launch creatives, messaging-led layouts,
                                    digital touchpoints, and communication assets that feel polished and purposeful.
                                </p>
                                <div class="tp-service-btn">
                                    <a href="service.php" class="tp-btn-black btn-red-bg">
                                        <span class="tp-btn-black-filter-blur">
                                            <svg width="0" height="0">
                                                <defs>
                                                    <filter id="buttonFilter5">
                                                        <feGaussianBlur in="SourceGraphic" stdDeviation="5"
                                                            result="blur"></feGaussianBlur>
                                                        <feColorMatrix in="blur"
                                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9">
                                                        </feColorMatrix>
                                                        <feComposite in="SourceGraphic" in2="buttonFilter5"
                                                            operator="atop"></feComposite>
                                                        <feBlend in="SourceGraphic" in2="buttonFilter5">
                                                        </feBlend>
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </span>
                                        <span class="tp-btn-black-filter d-inline-flex align-items-center">
                                            <span class="tp-btn-black-text">See Our Services</span>
                                            <span class="tp-btn-black-circle">
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                                <!-- SERVICES -->


                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                            <div class="tp-service-thumb text-end">
                                <img class="tp_fade_anim" data-fade-from="right" data-delay=".2"
                                    src="assets/img/new-images/service-communication.svg" alt="Animated brand communication visual">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->

    <!-- industries area start -->
    <div class="tp-industries-area pt-120 pb-120">
        <div class="container">
            <div class="row align-items-end mb-60">
                <div class="col-xl-7 col-lg-8">
                    <div class="tp-industries-title-box">
                        <span class="tp-section-subtitle pre">Industries</span>
                        <h4 class="tp-section-title tp-industries-title text-black mt-20">Brands Built For Real Markets</h4>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4">
                    <div class="tp-industries-intro">
                        <p>We shape sharper positioning, identity systems, packaging, and communication for businesses that need to feel more premium, more relevant, and easier to trust in their category.</p>
                    </div>
                </div>
            </div>
            <div class="tp-industries-slider-active">
                <div class="row gx-4 gy-4 tp-industries-slider-wrapper">
                    <div class="col-xl-3 col-lg-4 col-sm-6 tp-industries-slide">
                        <div class="tp-industries-card">
                            <span>01</span>
                            <h5>Fashion & Lifestyle</h5>
                            <p>Identity, packaging, and campaign systems that turn style-led ideas into distinctive, aspirational brands.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 tp-industries-slide">
                        <div class="tp-industries-card">
                            <span>02</span>
                            <h5>Healthcare & Wellness</h5>
                            <p>Trust-first brand systems for care-led businesses that need clarity, credibility, and a more reassuring market presence.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 tp-industries-slide">
                        <div class="tp-industries-card">
                            <span>03</span>
                            <h5>Startups & Technology</h5>
                            <p>Launch-ready positioning, naming, identity, and pitch-facing assets for ambitious teams moving fast.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 tp-industries-slide">
                        <div class="tp-industries-card">
                            <span>04</span>
                            <h5>Real Estate & Spaces</h5>
                            <p>Premium project branding and communication that elevate perception for developers, architects, and design-led spaces.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 tp-industries-slide">
                        <div class="tp-industries-card">
                            <span>05</span>
                            <h5>Hospitality & F&amp;B</h5>
                            <p>Brand language, packaging, menus, and digital touchpoints that make guest experiences feel more memorable and premium.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 tp-industries-slide">
                        <div class="tp-industries-card">
                            <span>06</span>
                            <h5>Education & Institutes</h5>
                            <p>Clear, structured identity and communication systems for institutions, academies, and modern learning brands.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 tp-industries-slide">
                        <div class="tp-industries-card">
                            <span>07</span>
                            <h5>Retail & Consumer</h5>
                            <p>Shelf-ready packaging and brand assets designed to improve visibility, recall, and purchase confidence.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 tp-industries-slide">
                        <div class="tp-industries-card">
                            <span>08</span>
                            <h5>Professional Services</h5>
                            <p>Sharper positioning and premium presentation for firms, consultants, and service-led businesses that sell trust.</p>
                        </div>
                    </div>
                </div>
                <div class="tp-industries-pagination"></div>
            </div>
        </div>
    </div>
    <!-- industries area end -->

    <!-- testimonial area start -->
    <div class="ais-testimonial-ptb p-relative pt-100 pb-80" data-bg-color="#000">
        <div class="container container-1230">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="app-testimonial-warp mb-55">
                        <div class="app-testimonial-heading text-center p-relative mb-20">
                            <span class="ais-section-subtitle">Client Reviews</span>
                            <h4 class="ais-section-title">What Our Clients Say <br> About Our Branding Work</h4>
                            <div class="app-testimonial-big-text">
                                <h3>4.86</h3>
                            </div>
                        </div>
                        <div class="app-testimonial-review-width tp_fade_anim" data-delay=".6" data-fade-from="top" data-ease="bounce">
                            <div class="app-testimonial-review">
                                <div class="app-testimonial-review-icon">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none">
                                            <path d="M18.9995 15.5454V22.9036H29.2249C28.7759 25.27 27.4285 27.2737 25.4076 28.6209L31.5739 33.4055C35.1667 30.0893 37.2394 25.2183 37.2394 19.432C37.2394 18.0847 37.1185 16.7891 36.8939 15.5456L18.9995 15.5454Z" fill="#4285F4" />
                                            <path d="M8.35164 22.6162L6.96089 23.6808L2.03809 27.5153C5.16444 33.7161 11.5721 37.9998 18.9994 37.9998C24.1292 37.9998 28.4301 36.3071 31.5738 33.4054L25.4075 28.6208C23.7147 29.7608 21.5556 30.4517 18.9994 30.4517C14.0594 30.4517 9.86224 27.1181 8.3594 22.6272L8.35164 22.6162Z" fill="#34A853" />
                                            <path d="M2.03803 10.4846C0.74265 13.0409 0 15.9255 0 19C0 22.0744 0.74265 24.959 2.03803 27.5153C2.03803 27.5325 8.35996 22.6098 8.35996 22.6098C7.97996 21.4699 7.75535 20.2608 7.75535 18.9998C7.75535 17.7387 7.97996 16.5297 8.35996 15.3897L2.03803 10.4846Z" fill="#FBBC05" />
                                            <path d="M18.9998 7.56545C21.798 7.56545 24.2852 8.5327 26.2716 10.3982L31.7124 4.95734C28.4133 1.88284 24.1298 0 18.9998 0C11.5725 0 5.16444 4.26636 2.03809 10.4846L8.35982 15.39C9.86246 10.8991 14.0598 7.56545 18.9998 7.56545Z" fill="#EA4335" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="app-testimonial-review-content">
                                    <span><i>4.9/5</i> <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                            <path d="M6.12215 1.09728C6.24667 0.739057 6.75328 0.739057 6.8778 1.09728L8.17194 4.82036C8.22687 4.97839 8.37435 5.08554 8.54162 5.08895L12.4824 5.16925C12.8616 5.17698 13.0181 5.6588 12.7159 5.88792L9.57495 8.26922C9.44163 8.37029 9.3853 8.54366 9.43375 8.70379L10.5751 12.4765C10.685 12.8395 10.2751 13.1373 9.9638 12.9207L6.72845 10.6693C6.59112 10.5738 6.40883 10.5738 6.2715 10.6693L3.03615 12.9207C2.72485 13.1373 2.31499 12.8395 2.42481 12.4765L3.5662 8.70379C3.61465 8.54366 3.55832 8.37029 3.425 8.26922L0.284053 5.88792C-0.0181605 5.6588 0.138392 5.17698 0.517561 5.16925L4.45833 5.08895C4.6256 5.08554 4.77308 4.97839 4.82801 4.82036L6.12215 1.09728Z" fill="#FFAF1B" />
                                        </svg> <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                            <path d="M6.12215 1.09728C6.24667 0.739057 6.75328 0.739057 6.8778 1.09728L8.17194 4.82036C8.22687 4.97839 8.37435 5.08554 8.54162 5.08895L12.4824 5.16925C12.8616 5.17698 13.0181 5.6588 12.7159 5.88792L9.57495 8.26922C9.44163 8.37029 9.3853 8.54366 9.43375 8.70379L10.5751 12.4765C10.685 12.8395 10.2751 13.1373 9.9638 12.9207L6.72845 10.6693C6.59112 10.5738 6.40883 10.5738 6.2715 10.6693L3.03615 12.9207C2.72485 13.1373 2.31499 12.8395 2.42481 12.4765L3.5662 8.70379C3.61465 8.54366 3.55832 8.37029 3.425 8.26922L0.284053 5.88792C-0.0181605 5.6588 0.138392 5.17698 0.517561 5.16925L4.45833 5.08895C4.6256 5.08554 4.77308 4.97839 4.82801 4.82036L6.12215 1.09728Z" fill="#FFAF1B" />
                                        </svg><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                            <path d="M6.12215 1.09728C6.24667 0.739057 6.75328 0.739057 6.8778 1.09728L8.17194 4.82036C8.22687 4.97839 8.37435 5.08554 8.54162 5.08895L12.4824 5.16925C12.8616 5.17698 13.0181 5.6588 12.7159 5.88792L9.57495 8.26922C9.44163 8.37029 9.3853 8.54366 9.43375 8.70379L10.5751 12.4765C10.685 12.8395 10.2751 13.1373 9.9638 12.9207L6.72845 10.6693C6.59112 10.5738 6.40883 10.5738 6.2715 10.6693L3.03615 12.9207C2.72485 13.1373 2.31499 12.8395 2.42481 12.4765L3.5662 8.70379C3.61465 8.54366 3.55832 8.37029 3.425 8.26922L0.284053 5.88792C-0.0181605 5.6588 0.138392 5.17698 0.517561 5.16925L4.45833 5.08895C4.6256 5.08554 4.77308 4.97839 4.82801 4.82036L6.12215 1.09728Z" fill="#FFAF1B" />
                                        </svg><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                            <path d="M6.12215 1.09728C6.24667 0.739057 6.75328 0.739057 6.8778 1.09728L8.17194 4.82036C8.22687 4.97839 8.37435 5.08554 8.54162 5.08895L12.4824 5.16925C12.8616 5.17698 13.0181 5.6588 12.7159 5.88792L9.57495 8.26922C9.44163 8.37029 9.3853 8.54366 9.43375 8.70379L10.5751 12.4765C10.685 12.8395 10.2751 13.1373 9.9638 12.9207L6.72845 10.6693C6.59112 10.5738 6.40883 10.5738 6.2715 10.6693L3.03615 12.9207C2.72485 13.1373 2.31499 12.8395 2.42481 12.4765L3.5662 8.70379C3.61465 8.54366 3.55832 8.37029 3.425 8.26922L0.284053 5.88792C-0.0181605 5.6588 0.138392 5.17698 0.517561 5.16925L4.45833 5.08895C4.6256 5.08554 4.77308 4.97839 4.82801 4.82036L6.12215 1.09728Z" fill="#FFAF1B" />
                                        </svg><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                            <path d="M6.12215 1.09728C6.24667 0.739057 6.75328 0.739057 6.8778 1.09728L8.17194 4.82036C8.22687 4.97839 8.37435 5.08554 8.54162 5.08895L12.4824 5.16925C12.8616 5.17698 13.0181 5.6588 12.7159 5.88792L9.57495 8.26922C9.44163 8.37029 9.3853 8.54366 9.43375 8.70379L10.5751 12.4765C10.685 12.8395 10.2751 13.1373 9.9638 12.9207L6.72845 10.6693C6.59112 10.5738 6.40883 10.5738 6.2715 10.6693L3.03615 12.9207C2.72485 13.1373 2.31499 12.8395 2.42481 12.4765L3.5662 8.70379C3.61465 8.54366 3.55832 8.37029 3.425 8.26922L0.284053 5.88792C-0.0181605 5.6588 0.138392 5.17698 0.517561 5.16925L4.45833 5.08895C4.6256 5.08554 4.77308 4.97839 4.82801 4.82036L6.12215 1.09728Z" fill="#FFAF1B" />
                                        </svg></span>
                                    <p>Based on 128+ client reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ais-testimonial-wrap z-index-1">
            <div class="app-testimonial-wrapper">
                <div class="app-testimonial-slider d-flex">
                    <div class="app-testimonial-item">
                        <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                            <div class="app-testimonial-item-icon">
                                <span>
                                    <img src="assets/img/home-10/testimonial/testimonial-item-1.png" alt="">
                                </span>
                            </div>
                            <div class="app-testimonial-item-icon-content">
                                <h4 class="app-testimonial-item-icon-title">Rohan Mehta</h4>
                                <p>Founder, FMCG Brand</p>
                            </div>
                        </div>
                        <div class="app-testimonial-item-content">
                            <p>"Mark Identitiez helped us define a sharper brand position and a premium identity that made our product easier to trust and remember."</p>
                            <div class="app-testimonial-item-star">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                            </div>
                        </div>
                    </div>
                    <div class="app-testimonial-item">
                        <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                            <div class="app-testimonial-item-icon">
                                <span>
                                    <img src="assets/img/home-10/testimonial/testimonial-item-2.png" alt="">
                                </span>
                            </div>
                            <div class="app-testimonial-item-icon-content">
                                <h4 class="app-testimonial-item-icon-title">Priya Shah</h4>
                                <p>Director, Lifestyle Brand</p>
                            </div>
                        </div>
                        <div class="app-testimonial-item-content">
                            <p>"Their branding approach was strategic, clear, and business-focused. Our packaging and visual language now feel much more premium."</p>
                            <div class="app-testimonial-item-star">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                            </div>
                        </div>
                    </div>
                    <div class="app-testimonial-item">
                        <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                            <div class="app-testimonial-item-icon">
                                <span>
                                    <img src="assets/img/home-10/testimonial/testimonial-item-3.png" alt="">
                                </span>
                            </div>
                            <div class="app-testimonial-item-icon-content">
                                <h4 class="app-testimonial-item-icon-title">Arjun Nair</h4>
                                <p>Co-Founder, D2C Startup</p>
                            </div>
                        </div>
                        <div class="app-testimonial-item-content">
                            <p>"The team understood our market quickly and created a brand system that works beautifully across website, packaging, and social media."</p>
                            <div class="app-testimonial-item-star">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                            </div>
                        </div>
                    </div>
                    <div class="app-testimonial-item">
                        <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                            <div class="app-testimonial-item-icon">
                                <span>
                                    <img src="assets/img/home-10/testimonial/testimonial-item-4.png" alt="">
                                </span>
                            </div>
                            <div class="app-testimonial-item-icon-content">
                                <h4 class="app-testimonial-item-icon-title">Neha Kapoor</h4>
                                <p>Marketing Head, Retail Brand</p>
                            </div>
                        </div>
                        <div class="app-testimonial-item-content">
                            <p>"From logo refinement to communication design, every detail was handled with clarity. The brand now looks more consistent and confident."</p>
                            <div class="app-testimonial-item-star">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                            </div>
                        </div>
                    </div>
                    <div class="app-testimonial-item">
                        <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                            <div class="app-testimonial-item-icon">
                                <span>
                                    <img src="assets/img/home-10/testimonial/testimonial-item-1.png" alt="">
                                </span>
                            </div>
                            <div class="app-testimonial-item-icon-content">
                                <h4 class="app-testimonial-item-icon-title">Karan Desai</h4>
                                <p>Managing Director, Manufacturing Brand</p>
                            </div>
                        </div>
                        <div class="app-testimonial-item-content">
                            <p>"They transformed our old identity into a professional brand presence without losing our original business values."</p>
                            <div class="app-testimonial-item-star">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                            </div>
                        </div>
                    </div>
                    <div class="app-testimonial-item">
                        <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                            <div class="app-testimonial-item-icon">
                                <span>
                                    <img src="assets/img/home-10/testimonial/testimonial-item-2.png" alt="">
                                </span>
                            </div>
                            <div class="app-testimonial-item-icon-content">
                                <h4 class="app-testimonial-item-icon-title">Aditi Joshi</h4>
                                <p>Brand Manager, Wellness Company</p>
                            </div>
                        </div>
                        <div class="app-testimonial-item-content">
                            <p>"The new brand direction gave us a clean, trustworthy, and modern look. It helped our team communicate with much better clarity."</p>
                            <div class="app-testimonial-item-star">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                            </div>
                        </div>
                    </div>
                    <div class="app-testimonial-item">
                        <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                            <div class="app-testimonial-item-icon">
                                <span>
                                    <img src="assets/img/home-10/testimonial/testimonial-item-3.png" alt="">
                                </span>
                            </div>
                            <div class="app-testimonial-item-icon-content">
                                <h4 class="app-testimonial-item-icon-title">Vikram Rao</h4>
                                <p>CEO, Tech Solutions Company</p>
                            </div>
                        </div>
                        <div class="app-testimonial-item-content">
                            <p>"Their strategy-first process made the branding exercise meaningful. The final identity feels premium, practical, and scalable."</p>
                            <div class="app-testimonial-item-star">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                            </div>
                        </div>
                    </div>
                    <div class="app-testimonial-item">
                        <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                            <div class="app-testimonial-item-icon">
                                <span>
                                    <img src="assets/img/home-10/testimonial/testimonial-item-4.png" alt="">
                                </span>
                            </div>
                            <div class="app-testimonial-item-icon-content">
                                <h4 class="app-testimonial-item-icon-title">Meera Iyer</h4>
                                <p>Founder, Skincare Brand</p>
                            </div>
                        </div>
                        <div class="app-testimonial-item-content">
                            <p>"Our packaging and brand tonality improved a lot. Customers now understand the product value much faster."</p>
                            <div class="app-testimonial-item-star">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                            </div>
                        </div>
                    </div>
                    <div class="app-testimonial-item">
                        <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                            <div class="app-testimonial-item-icon">
                                <span>
                                    <img src="assets/img/home-10/testimonial/testimonial-item-1.png" alt="">
                                </span>
                            </div>
                            <div class="app-testimonial-item-icon-content">
                                <h4 class="app-testimonial-item-icon-title">Siddharth Jain</h4>
                                <p>Partner, Finance Consultancy</p>
                            </div>
                        </div>
                        <div class="app-testimonial-item-content">
                            <p>"They brought structure to our brand messaging and made our communication look more polished and credible."</p>
                            <div class="app-testimonial-item-star">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                            </div>
                        </div>
                    </div>
                    <div class="app-testimonial-item">
                        <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                            <div class="app-testimonial-item-icon">
                                <span>
                                    <img src="assets/img/home-10/testimonial/testimonial-item-2.png" alt="">
                                </span>
                            </div>
                            <div class="app-testimonial-item-icon-content">
                                <h4 class="app-testimonial-item-icon-title">Ananya Gupta</h4>
                                <p>Creative Head, Fashion Label</p>
                            </div>
                        </div>
                        <div class="app-testimonial-item-content">
                            <p>"The visual identity they created feels elegant, consistent, and very aligned with our target audience."</p>
                            <div class="app-testimonial-item-star">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="app-testimonial-item">
                        <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                            <div class="app-testimonial-item-icon">
                                <span>
                                    <img src="assets/img/home-10/testimonial/testimonial-item-3.png" alt="">
                                </span>
                            </div>
                            <div class="app-testimonial-item-icon-content">
                                <h4 class="app-testimonial-item-icon-title">Nikhil Sharma</h4>
                                <p>Founder, Food Brand</p>
                            </div>
                        </div>
                        <div class="app-testimonial-item-content">
                            <p>"Our brand now stands out better on shelves. The packaging design and brand story feel much more premium."</p>
                            <div class="app-testimonial-item-star">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="app-testimonial-item">
                        <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                            <div class="app-testimonial-item-icon">
                                <span>
                                    <img src="assets/img/home-10/testimonial/testimonial-item-4.png" alt="">
                                </span>
                            </div>
                            <div class="app-testimonial-item-icon-content">
                                <h4 class="app-testimonial-item-icon-title">Pooja Menon</h4>
                                <p>Director, Healthcare Brand</p>
                            </div>
                        </div>
                        <div class="app-testimonial-item-content">
                            <p>"They made our communication simple, trustworthy, and professional. The overall brand presentation improved across all touchpoints."</p>
                            <div class="app-testimonial-item-star">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-testimonial-wrapper ais-rtl">
                <div class="app-testimonial-slider d-flex">
                    <div class="app-testimonial-item">
                        <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                            <div class="app-testimonial-item-icon">
                                <span>
                                    <img src="assets/img/home-10/testimonial/testimonial-item-1.png" alt="">
                                </span>
                            </div>
                            <div class="app-testimonial-item-icon-content">
                                <h4 class="app-testimonial-item-icon-title">Rahul Verma</h4>
                                <p>Co-Founder, E-commerce Brand</p>
                            </div>
                        </div>
                        <div class="app-testimonial-item-content">
                            <p>"The team created a complete brand system, not just visuals. It helped us maintain consistency across ads, website, and product creatives."</p>
                            <div class="app-testimonial-item-star">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                            </div>
                        </div>
                    </div>
                    <div class="app-testimonial-item">
                        <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                            <div class="app-testimonial-item-icon">
                                <span>
                                    <img src="assets/img/home-10/testimonial/testimonial-item-2.png" alt="">
                                </span>
                            </div>
                            <div class="app-testimonial-item-icon-content">
                                <h4 class="app-testimonial-item-icon-title">Sneha Kulkarni</h4>
                                <p>Marketing Lead, Education Brand</p>
                            </div>
                        </div>
                        <div class="app-testimonial-item-content">
                            <p>"They understood our audience and created a brand identity that feels approachable, credible, and easy to remember."</p>
                            <div class="app-testimonial-item-star">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                            </div>
                        </div>
                    </div>
                    <div class="app-testimonial-item">
                        <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                            <div class="app-testimonial-item-icon">
                                <span>
                                    <img src="assets/img/home-10/testimonial/testimonial-item-3.png" alt="">
                                </span>
                            </div>
                            <div class="app-testimonial-item-icon-content">
                                <h4 class="app-testimonial-item-icon-title">Aman Malhotra</h4>
                                <p>Founder, Hospitality Brand</p>
                            </div>
                        </div>
                        <div class="app-testimonial-item-content">
                            <p>"Our brand experience became more premium and refined. The new design language has made a strong impact on clients."</p>
                            <div class="app-testimonial-item-star">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                            </div>
                        </div>
                    </div>
                    <div class="app-testimonial-item">
                        <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                            <div class="app-testimonial-item-icon">
                                <span>
                                    <img src="assets/img/home-10/testimonial/testimonial-item-4.png" alt="">
                                </span>
                            </div>
                            <div class="app-testimonial-item-icon-content">
                                <h4 class="app-testimonial-item-icon-title">Divya Patel</h4>
                                <p>Owner, Home Care Brand</p>
                            </div>
                        </div>
                        <div class="app-testimonial-item-content">
                            <p>"The packaging and communication design helped our products look more organized, attractive, and retail-ready."</p>
                            <div class="app-testimonial-item-star">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                            </div>
                        </div>
                    </div>
                    <div class="app-testimonial-item">
                        <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                            <div class="app-testimonial-item-icon">
                                <span>
                                    <img src="assets/img/home-10/testimonial/testimonial-item-1.png" alt="">
                                </span>
                            </div>
                            <div class="app-testimonial-item-icon-content">
                                <h4 class="app-testimonial-item-icon-title">Yash Agarwal</h4>
                                <p>Director, Logistics Company</p>
                            </div>
                        </div>
                        <div class="app-testimonial-item-content">
                            <p>"They gave our corporate brand a cleaner and more professional identity that works well for presentations and digital platforms."</p>
                            <div class="app-testimonial-item-star">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                            </div>
                        </div>
                    </div>
                    <div class="app-testimonial-item">
                        <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                            <div class="app-testimonial-item-icon">
                                <span>
                                    <img src="assets/img/home-10/testimonial/testimonial-item-2.png" alt="">
                                </span>
                            </div>
                            <div class="app-testimonial-item-icon-content">
                                <h4 class="app-testimonial-item-icon-title">Isha Bansal</h4>
                                <p>Founder, Personal Care Brand</p>
                            </div>
                        </div>
                        <div class="app-testimonial-item-content">
                            <p>"The brand positioning and visual system gave us a strong foundation to launch with confidence."</p>
                            <div class="app-testimonial-item-star">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                            </div>
                        </div>
                    </div>
                    <div class="app-testimonial-item">
                        <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                            <div class="app-testimonial-item-icon">
                                <span>
                                    <img src="assets/img/home-10/testimonial/testimonial-item-3.png" alt="">
                                </span>
                            </div>
                            <div class="app-testimonial-item-icon-content">
                                <h4 class="app-testimonial-item-icon-title">Rajat Khanna</h4>
                                <p>Business Head, Electronics Brand</p>
                            </div>
                        </div>
                        <div class="app-testimonial-item-content">
                            <p>"Their branding work improved product appeal and made our marketing creatives look much more premium."</p>
                            <div class="app-testimonial-item-star">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                            </div>
                        </div>
                    </div>
                    <div class="app-testimonial-item">
                        <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                            <div class="app-testimonial-item-icon">
                                <span>
                                    <img src="assets/img/home-10/testimonial/testimonial-item-4.png" alt="">
                                </span>
                            </div>
                            <div class="app-testimonial-item-icon-content">
                                <h4 class="app-testimonial-item-icon-title">Kavya Reddy</h4>
                                <p>Co-Founder, Organic Brand</p>
                            </div>
                        </div>
                        <div class="app-testimonial-item-content">
                            <p>"The team balanced strategy and design very well. Our brand now feels authentic, modern, and trustworthy."</p>
                            <div class="app-testimonial-item-star">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                            </div>
                        </div>
                    </div>
                    <div class="app-testimonial-item">
                        <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                            <div class="app-testimonial-item-icon">
                                <span>
                                    <img src="assets/img/home-10/testimonial/testimonial-item-1.png" alt="">
                                </span>
                            </div>
                            <div class="app-testimonial-item-icon-content">
                                <h4 class="app-testimonial-item-icon-title">Harsh Vora</h4>
                                <p>Director, Packaging Company</p>
                            </div>
                        </div>
                        <div class="app-testimonial-item-content">
                            <p>"They created a strong industrial brand identity while keeping the design clean, premium, and easy to communicate."</p>
                            <div class="app-testimonial-item-star">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg></span>
                            </div>
                        </div>
                    </div>
                    <div class="app-testimonial-item">
                        <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                            <div class="app-testimonial-item-icon">
                                <span>
                                    <img src="assets/img/home-10/testimonial/testimonial-item-2.png" alt="">
                                </span>
                            </div>
                            <div class="app-testimonial-item-icon-content">
                                <h4 class="app-testimonial-item-icon-title">Tanya Suri</h4>
                                <p>Marketing Manager, Real Estate Brand</p>
                            </div>
                        </div>
                        <div class="app-testimonial-item-content">
                            <p>"The new brand communication helped us present our projects with better clarity and a more premium look."</p>
                            <div class="app-testimonial-item-star">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="app-testimonial-item">
                        <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                            <div class="app-testimonial-item-icon">
                                <span>
                                    <img src="assets/img/home-10/testimonial/testimonial-item-3.png" alt="">
                                </span>
                            </div>
                            <div class="app-testimonial-item-icon-content">
                                <h4 class="app-testimonial-item-icon-title">Manish Choudhary</h4>
                                <p>Founder, B2B Services Company</p>
                            </div>
                        </div>
                        <div class="app-testimonial-item-content">
                            <p>"Their team simplified our messaging and built a visual identity that feels reliable and growth-focused."</p>
                            <div class="app-testimonial-item-star">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="app-testimonial-item">
                        <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                            <div class="app-testimonial-item-icon">
                                <span>
                                    <img src="assets/img/home-10/testimonial/testimonial-item-4.png" alt="">
                                </span>
                            </div>
                            <div class="app-testimonial-item-icon-content">
                                <h4 class="app-testimonial-item-icon-title">Ritika Sen</h4>
                                <p>Brand Lead, Beauty Brand</p>
                            </div>
                        </div>
                        <div class="app-testimonial-item-content">
                            <p>"The complete branding output looked refined, consistent, and ready for both offline and online marketing."</p>
                            <div class="app-testimonial-item-star">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial area end -->


    <!-- faq area start -->
    <section class="mi-home-faq-area">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-7 col-lg-8">
                    <div class="mi-home-faq-title">
                        <span class="tp-section-subtitle pre">FAQ</span>
                        <h4>What clients usually ask before a branding project begins</h4>
                        <p>Quick answers to the most common questions around scope, timelines, packaging, and rebranding.</p>
                    </div>
                </div>
            </div>
            <div class="mi-home-faq-list">
                <div class="mi-home-faq-item">
                    <strong>What is included in a branding project?</strong>
                    <p>Depending on scope, it may include positioning, identity, packaging direction, messaging, and rollout assets.</p>
                </div>
                <div class="mi-home-faq-item">
                    <strong>What is the difference between a logo and brand identity?</strong>
                    <p>A logo is one symbol. Brand identity is the complete visual system around it, including colors, type, layouts, and usage.</p>
                </div>
                <div class="mi-home-faq-item">
                    <strong>How long does a branding project usually take?</strong>
                    <p>Most focused branding projects take a few weeks, depending on the number of deliverables and feedback stages involved.</p>
                </div>
                <div class="mi-home-faq-item">
                    <strong>How does the packaging design process work?</strong>
                    <p>We define the structure, hierarchy, and visual direction first, then design the packaging system for clearer shelf impact.</p>
                </div>
                <div class="mi-home-faq-item">
                    <strong>When should a business consider rebranding?</strong>
                    <p>Rebranding makes sense when the current brand feels outdated, inconsistent, too generic, or no longer matches your growth level.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- faq area end -->

    <!-- cta area start -->
    <section class="mi-home-cta-strip">
        <div class="container">
            <div class="mi-home-cta-box">
                <div class="mi-home-cta-copy">
                    <h4>Ready to give your brand a clearer, stronger presence?</h4>
                    <p>If your business is ready to look more premium, feel more consistent, and communicate with more clarity, let us talk.</p>
                </div>
                <div class="mi-home-cta-actions">
                    <a href="contactus.php" class="tp-btn-black btn-red-bg">
                        <span class="tp-btn-black-filter d-inline-flex align-items-center">
                            <span class="tp-btn-black-text">Book A Discovery Call</span>
                            <span class="tp-btn-black-circle">
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </span>
                    </a>
                    <!-- <a href="contactus.php" class="mi-home-cta-link">Go To Contact Page</a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- cta area end -->

</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var logoAnimation = document.querySelector('.mi-logo-animation');
        var restartDelay = 8500;

        if (!logoAnimation) {
            return;
        }

        var startAnimation = function() {
            logoAnimation.classList.remove('is-animated');

            requestAnimationFrame(function() {
                requestAnimationFrame(function() {
                    logoAnimation.classList.add('is-animated');
                });
            });
        };

        var keepAnimating = function() {
            logoAnimation.classList.add('is-animated');
            setInterval(startAnimation, restartDelay);
        };

        keepAnimating();
    });
</script>

<?php include('layouts/footer.php'); ?>