<?php
$title = "Wrap Pack N Carry | Safewrap";
include('layouts/header.php');
?>

<style>
@media (max-width: 767px) {
    .creative-hero-banner {
        height: 200px;
    }
}
    .wpn-scope-area {
        padding: 120px 0;
        background: linear-gradient(180deg, #f4ead5 0%, #eee0be 100%);
    }

    .wpn-scope-header {
        max-width: 820px;
        margin-bottom: 35px;
    }

    .wpn-scope-label {
        display: inline-block;
        margin-bottom: 16px;
        font-weight: 600;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: #5f6327;
    }

    .wpn-scope-title {
        font-size: clamp(42px, 6vw, 78px);
        line-height: 0.95;
        letter-spacing: -0.05em;
        color: #2d2418;
        margin-bottom: 16px;
    }

    .wpn-scope-text {
        max-width: 760px;
        color: #4b4135;
        font-size: 18px;
        line-height: 1.7;
    }

    .wpn-scope-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 18px;
        margin-top: 36px;
    }

    .wpn-scope-card {
        background: rgba(255, 248, 232, 0.72);
        border: 1px solid rgba(76, 67, 49, 0.12);
        border-radius: 24px;
        padding: 26px;
        box-shadow: 0 18px 42px rgba(51, 40, 24, 0.06);
        min-height: 240px;
    }

    .wpn-scope-card-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        margin-bottom: 18px;
    }

    .wpn-scope-index {
        width: 48px;
        height: 48px;
        border-radius: 16px;
        background: #5f6327;
        color: #fff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        flex: 0 0 auto;
    }

    .wpn-scope-icon {
        width: 44px;
        height: 44px;
        border-radius: 14px;
        background: rgba(95, 99, 39, 0.12);
        color: #5f6327;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex: 0 0 auto;
    }

    .wpn-scope-card h3 {
        font-size: 26px;
        line-height: 1.05;
        color: #2d2418;
        margin-bottom: 12px;
        letter-spacing: -0.03em;
    }

    .wpn-scope-card p {
        color: #54493d;
        font-size: 15px;
        line-height: 1.7;
        margin-bottom: 18px;
    }

    .wpn-chip-list {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .wpn-chip {
        display: inline-flex;
        align-items: center;
        border-radius: 999px;
        padding: 7px 12px;
        background: rgba(95, 99, 39, 0.12);
        color: #4b4e22;
        font-size: 13px;
        font-weight: 600;
        line-height: 1;
    }

    .wpn-highlight-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 18px;
        margin-top: 26px;
    }

    .wpn-highlight-card {
        border-radius: 28px;
        overflow: hidden;
        background: #fffaf0;
        box-shadow: 0 18px 42px rgba(51, 40, 24, 0.06);
        border: 1px solid rgba(76, 67, 49, 0.10);
    }

    .wpn-highlight-card img {
        width: 100%;
        display: block;
    }

    .wpn-highlight-body {
        padding: 20px 22px 22px;
    }

    .wpn-highlight-body h4 {
        font-size: 24px;
        line-height: 1.05;
        margin-bottom: 8px;
        color: #2d2418;
        letter-spacing: -0.03em;
    }

    .wpn-highlight-body p {
        color: #5a5045;
        margin-bottom: 0;
        line-height: 1.65;
    }

    .wpn-scope-copy-card {
        background: rgba(255, 250, 240, 0.82);
        border: 1px solid rgba(76, 67, 49, 0.10);
        border-radius: 28px;
        padding: 28px;
        box-shadow: 0 18px 42px rgba(51, 40, 24, 0.06);
    }

    .wpn-scope-copy-card .wpn-scope-label,
    .wpn-scope-copy-card .wpn-scope-title,
    .wpn-scope-copy-card .wpn-scope-text {
        color: #2d2418;
    }

    .wpn-scope-copy-card .wpn-scope-text {
        color: #54493d;
        margin-bottom: 18px;
    }

    @media (max-width: 1199px) {
        .wpn-scope-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 767px) {
        .wpn-scope-area {
            padding: 80px 0;
        }

        .wpn-scope-grid,
        .wpn-highlight-grid {
            grid-template-columns: 1fr;
        }

        .wpn-scope-card {
            min-height: auto;
        }
    }
</style>

<main>
    <!-- hero area start -->
    <div class="creative-2-hero-wrap pt-180">
        <div class="container container-1610">
            <div class="creative-2-hero-top-wrap mb-60">
                <div class="row align-items-end">
                    <div class="col-xl-6">
                        <div class="creative-2-hero-title-box">
                            <h2 class="creative-2-hero-title">
                                Wrap Pack N Carry
                                <img class="d-none d-md-inline-block" src="assets/img/home-04/hero/hero-shape-1.png" alt="">
                                Safewrap
                            </h2>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="creative-2-hero-btn-wrap">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="creative-2-hero-text p-relative">
                                        <p>
                                            Branding, Website Design, <br>
                                            Packaging Solutions & Admin Panel
                                        </p>
                                        <span class="creative-2-hero-icon">
                                            <svg width="351" height="8" viewBox="0 0 351 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M350.354 4.35355C350.549 4.15829 350.549 3.84171 350.354 3.64645L347.172 0.464466C346.976 0.269204 346.66 0.269204 346.464 0.464466C346.269 0.659728 346.269 0.976311 346.464 1.17157L349.293 4L346.464 6.82843C346.269 7.02369 346.269 7.34027 346.464 7.53553C346.66 7.7308 346.976 7.7308 347.172 7.53553L350.354 4.35355ZM0 4V4.5H350V4V3.5H0V4Z" fill="currentcolor" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="creative-2-hero-btn-wrap text-xl-end">
                                        <div class="creative-2-hero-btn">
                                            <a href="#showcase" class="tp-btn-black btn-green-light-bg pb-10 pr-15">
                                                <span class="tp-btn-black-filter-blur">
                                                    <svg width="0" height="0">
                                                        <defs>
                                                            <filter id="wrapBtn1">
                                                                <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur"></feGaussianBlur>
                                                                <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"></feColorMatrix>
                                                                <feComposite in="SourceGraphic" in2="wrapBtn1" operator="atop"></feComposite>
                                                                <feBlend in="SourceGraphic" in2="wrapBtn1"></feBlend>
                                                            </filter>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span class="tp-btn-black-filter d-inline-flex align-items-center" style="filter: url(#wrapBtn1)">
                                                <span class="tp-btn-black-text">View Overview</span>
                                                    <span class="tp-btn-black-circle">
                                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a>
                                            <a href="portfolio.php" class="tp-btn-black btn-transparent-bg pb-10">
                                                <span class="tp-btn-black-filter-blur">
                                                    <svg width="0" height="0">
                                                        <defs>
                                                            <filter id="wrapBtn2">
                                                                <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur"></feGaussianBlur>
                                                                <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"></feColorMatrix>
                                                                <feComposite in="SourceGraphic" in2="wrapBtn2" operator="atop"></feComposite>
                                                                <feBlend in="SourceGraphic" in2="wrapBtn2"></feBlend>
                                                            </filter>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span class="tp-btn-black-filter d-inline-flex align-items-center" style="filter: url(#wrapBtn2)">
                                                <span class="tp-btn-black-text">See Deliverables</span>
                                                    <span class="tp-btn-black-circle">
                                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="creative-2-hero-banner-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="creative-hero-banner-wrap">
                            <div class="creative-hero-banner">
                                <img class="w-100" src="assets/img/new-images/portfolio/wrappackncarry/1.png" alt="Wrap Pack N Carry hero showcase">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero area end -->

    <!-- overview area start -->
    <div class="tp-pd-3-overview-area pt-120 pb-95">
        <div class="container container-1230">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tp-pd-3-overview-left tp_fade_anim" data-delay=".3">
                        <span class="tp-pd-3-subtitle">Packaging brand system</span>
                        <h4 class="tp-pd-3-title">Project Overview</h4>
                        <a class="tp-btn-border" href="#deliverables">
                            Explore Deliverables
                            <span>
                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.99999H15.2222M8.11121 1.11108L17.0001 9.99997L8.11121 18.8889" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tp-pd-3-overview-right">
                        <div class="tp-pd-3-overview-text">
                            <p>
                                Wrap Pack N Carry / Safewrap needed a cohesive identity across logo, website, packaging visuals,
                                and enquiry handling. The result is a clear, premium case study that shows how the brand works
                                across every customer touchpoint.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="tp-pd-3-overview-info mb-40">
                                    <span>Client</span>
                                    <h4>Wrap Pack N Carry</h4>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="tp-pd-3-overview-info mb-40">
                                    <span>Brand Layer</span>
                                    <h4>Logo + Typography</h4>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="tp-pd-3-overview-info mb-40">
                                    <span>Digital Layer</span>
                                    <h4>Website + Mobile</h4>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="tp-pd-3-overview-info mb-40">
                                    <span>Support Layer</span>
                                    <h4>Admin Dashboard</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- overview area end -->

    <!-- identity area start -->
    <div class="creative-about-area creative-about-2-style pb-100" id="website">
        <div class="container container-1580">
            <div class="row">
                <div class="col-xxl-5 col-xl-4">
                    <div class="creative-about-title-box">
                        <span class="tp-section-subtitle fs-17 pre-circle">Brand Identity</span>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-8">
                    <div class="creative-about-right">
                        <div class="creative-about-text tp_fade_anim">
                            <p>
                                We created a complete brand and digital system for Wrap Pack N Carry / Safewrap.
                                The identity brings together logo design, packaging-led visuals, typography, and a clean website experience
                                built to support product discovery and enquiry management.
                            </p>
                        </div>
                        <div class="creative-about-btn-box d-flex align-items-center flex-wrap gap-3">
                            <div class="tp_fade_anim" data-fade-from="top" data-delay=".3" data-ease="bounce">
                                <a href="#website" class="tp-btn-black btn-green-light-bg mb-20 pr-15">
                                    <span class="tp-btn-black-filter-blur">
                                        <svg width="0" height="0">
                                            <defs>
                                                <filter id="wrapBtn3">
                                                    <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur"></feGaussianBlur>
                                                    <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"></feColorMatrix>
                                                    <feComposite in="SourceGraphic" in2="wrapBtn3" operator="atop"></feComposite>
                                                    <feBlend in="SourceGraphic" in2="wrapBtn3"></feBlend>
                                                </filter>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span class="tp-btn-black-filter d-inline-flex align-items-center" style="filter: url(#wrapBtn3)">
                                        <span class="tp-btn-black-text">Open Website Section</span>
                                        <span class="tp-btn-black-circle">
                                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="tp_fade_anim" data-fade-from="top" data-delay=".5" data-ease="bounce">
                                <a href="#deliverables" class="tp-btn-black btn-transparent-bg mb-20">
                                    <span class="tp-btn-black-filter-blur">
                                        <svg width="0" height="0">
                                            <defs>
                                                <filter id="wrapBtn4">
                                                    <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur"></feGaussianBlur>
                                                    <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"></feColorMatrix>
                                                    <feComposite in="SourceGraphic" in2="wrapBtn4" operator="atop"></feComposite>
                                                    <feBlend in="SourceGraphic" in2="wrapBtn4"></feBlend>
                                                </filter>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span class="tp-btn-black-filter d-inline-flex align-items-center" style="filter: url(#wrapBtn4)">
                                        <span class="tp-btn-black-text">Jump to Scope</span>
                                        <span class="tp-btn-black-circle">
                                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gx-30 mt-40">
                <div class="col-lg-6 col-xl-6">
                    <div class="creative-project-item mb-30">
                        <div class="creative-project-thumb anim-zoomin-wrap p-relative">
                            <div class="anim-zoomin not-hide-cursor" data-cursor="View<br>Identity">
                                <a class="cursor-hide" href="#deliverables">
                                    <img class="w-100" src="assets/img/new-images/portfolio/wrappackncarry/2.png" alt="Wrap Pack N Carry logo development">
                                </a>
                            </div>
                            <div class="creative-project-category">
                                <span>Logo Design</span>
                                <span>Brand Palette</span>
                                <span>Typography</span>
                            </div>
                        </div>
                        <div class="creative-project-content">
                            <div class="creative-project-meta">
                                <span>Brand system</span>
                                <span>Wrap Pack N Carry / Safewrap</span>
                            </div>
                                    <h4 class="creative-project-title-sm"><a class="tp-line-white" href="#deliverables">Identity System</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="creative-project-item mb-30 fix">
                        <div class="creative-project-thumb anim-zoomin-wrap p-relative">
                            <div class="anim-zoomin not-hide-cursor" data-cursor="View<br>Website">
                                <a class="cursor-hide" href="#website">
                                    <img class="w-100" src="assets/img/new-images/portfolio/wrappackncarry/3.png" alt="Wrap Pack N Carry responsive website">
                                </a>
                            </div>
                            <div class="creative-project-category">
                                <span>Website</span>
                                <span>Responsive UI</span>
                                <span>Product Discovery</span>
                            </div>
                        </div>
                        <div class="creative-project-content">
                            <div class="creative-project-meta">
                                <span>Digital presence</span>
                                <span>Responsive across devices</span>
                            </div>
                                    <h4 class="creative-project-title-sm"><a class="tp-line-white" href="#website">Website Experience</a></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gx-30 mt-20 align-items-center">
                <div class="col-lg-6">
                    <div class="wpn-highlight-card">
                        <img src="assets/img/new-images/portfolio/wrappackncarry/explain.png" alt="Wrap Pack N Carry logo explanation board">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="wpn-scope-copy-card">
                        <span class="wpn-scope-label">Logo Breakdown</span>
                        <h2 class="wpn-scope-title" style="font-size: clamp(34px, 4.5vw, 56px);">A visual guide that explains the logo story.</h2>
                        <p class="wpn-scope-text">
                            The explain board shows how the wordmark, icon, and color system work together, making the logo easier
                            to understand and easier to use consistently across brand applications.
                        </p>
                        <div class="wpn-chip-list">
                            <span class="wpn-chip">Wordmark</span>
                            <span class="wpn-chip">Icon Logic</span>
                            <span class="wpn-chip">Color Meaning</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- identity area end -->

    <!-- showcase area start -->
    <div class="creative-project-area creative-project-2-style" id="product-showcase">
        <div class="container container-1580">
            <div class="creative-project-2-top">
                <div class="row align-items-end">
                    <div class="col-lg-3">
                        <div class="creative-project-title-box">
                            <span class="tp-section-subtitle mb-20 fs-17 pre-circle tp_fade_anim" data-delay=".3">Work Showcase</span>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="creative-project-title-box">
                            <h4 class="tp-section-title fs-64 tp_fade_anim" data-delay=".5">Selected deliverables <br> across brand and digital</h4>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="creative-project-2-btn text-lg-end tp_fade_anim" data-fade-from="top" data-delay=".3" data-ease="bounce">
                            <a href="#admin" class="tp-btn-black btn-green-light-bg mb-20">
                                <span class="tp-btn-black-filter-blur">
                                    <svg width="0" height="0">
                                        <defs>
                                            <filter id="wrapBtn5">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur"></feGaussianBlur>
                                                <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"></feColorMatrix>
                                                <feComposite in="SourceGraphic" in2="wrapBtn5" operator="atop"></feComposite>
                                                <feBlend in="SourceGraphic" in2="wrapBtn5"></feBlend>
                                            </filter>
                                        </defs>
                                    </svg>
                                </span>
                                <span class="tp-btn-black-filter d-inline-flex align-items-center" style="filter: url(#wrapBtn5)">
                                    <span class="tp-btn-black-text">View Admin Panel</span>
                                    <span class="tp-btn-black-circle">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-40">
                <div class="col-lg-6">
                    <div class="creative-project-item mb-100">
                        <div class="creative-project-thumb anim-zoomin-wrap p-relative">
                            <div class="anim-zoomin not-hide-cursor" data-cursor="View<br>Demo">
                                <a class="cursor-hide" href="#product-showcase">
                                    <img class="w-100" src="assets/img/new-images/portfolio/wrappackncarry/4.png" alt="Wrap Pack N Carry mobile product experience">
                                </a>
                            </div>
                            <div class="creative-project-category">
                                <span>Mobile UI</span>
                                <span>Product Discovery</span>
                                <span>Responsive Layout</span>
                            </div>
                        </div>
                        <div class="creative-project-content">
                            <div class="creative-project-meta">
                                <span>Mobile experience</span>
                                <span>Quick browsing and enquiry flow</span>
                            </div>
                            <h4 class="creative-project-title-sm"><a class="tp-line-white" href="#product-showcase">Mobile Product View</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="creative-project-item mb-100 fix">
                        <div class="creative-project-thumb anim-zoomin-wrap p-relative">
                            <div class="anim-zoomin not-hide-cursor" data-cursor="View<br>Demo">
                                <a class="cursor-hide" href="#packaging">
                                    <img class="w-100" src="assets/img/new-images/portfolio/wrappackncarry/5.png" alt="Wrap Pack N Carry product showcase">
                                </a>
                            </div>
                            <div class="creative-project-category">
                                <span>Products</span>
                                <span>Category Pages</span>
                                <span>Packaging Range</span>
                            </div>
                        </div>
                        <div class="creative-project-content">
                            <div class="creative-project-meta">
                                <span>Product presentation</span>
                                <span>Clear categories and storytelling</span>
                            </div>
                            <h4 class="creative-project-title-sm"><a class="tp-line-white" href="#packaging">Packaging Range</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- showcase area end -->

    <!-- service area start -->
    <div class="creative-service-area creative-service-2-style pb-120 pt-120 black-bg-8" id="packaging">
        <div class="container container-1580">
            <div class="creative-service-2-top mb-70">
                <div class="row align-items-end">
                    <div class="col-xl-3">
                        <div class="creative-blog-subtitle-box">
                            <span class="tp-section-subtitle mb-20 fs-17 pre-circle">Packaging + Digital System</span>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="creative-blog-title-box">
                            <h4 class="tp-section-title fs-44">
                                Clear product presentation for <br> food-safe packaging products
                            </h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-5">
                        <div class="creative-blog-top-content">
                            <a href="#deliverables" class="tp-btn-black btn-green-light-bg pr-15">
                                <span class="tp-btn-black-filter-blur">
                                    <svg width="0" height="0">
                                        <defs>
                                            <filter id="wrapBtn6">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur"></feGaussianBlur>
                                                <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"></feColorMatrix>
                                                <feComposite in="SourceGraphic" in2="wrapBtn6" operator="atop"></feComposite>
                                                <feBlend in="SourceGraphic" in2="wrapBtn6"></feBlend>
                                            </filter>
                                        </defs>
                                    </svg>
                                </span>
                                <span class="tp-btn-black-filter d-inline-flex align-items-center" style="filter: url(#wrapBtn6)">
                                    <span class="tp-btn-black-text">Jump to Scope</span>
                                    <span class="tp-btn-black-circle">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="creative-service-wrap">
                <div class="row">
                    <div class="offset-xl-3 col-xl-9">
                        <div class="creative-service-item d-flex align-items-start justify-content-between tp_fade_anim">
                            <div class="creative-service-content d-flex align-items-start">
                                <span>(01)</span>
                                <div class="creative-service-title-info">
                                    <h4 class="creative-service-title"><a href="#deliverables">Packaging Solutions</a></h4>
                                    <div class="creative-service-category">
                                        <span>Product Range Presentation</span>
                                        <span>Clear Category Segmentation</span>
                                        <span>Packaging Communication</span>
                                        <span>Premium Visual Storytelling</span>
                                    </div>
                                </div>
                            </div>
                            <div class="creative-service-link">
                                <a href="#deliverables">
                                    <span>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 13L13 1M13 1H1M13 1V13" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="creative-service-item d-flex align-items-start justify-content-between tp_fade_anim">
                            <div class="creative-service-content d-flex align-items-start">
                                <span>(02)</span>
                                <div class="creative-service-title-info">
                                    <h4 class="creative-service-title"><a href="#admin">Admin Panel</a></h4>
                                    <div class="creative-service-category">
                                        <span>Enquiry Capture</span>
                                        <span>Search and Filter</span>
                                        <span>Export Data</span>
                                        <span>Secure Access</span>
                                    </div>
                                </div>
                            </div>
                            <div class="creative-service-link">
                                <a href="#admin">
                                    <span>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 13L13 1M13 1H1M13 1V13" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="creative-service-item d-flex align-items-start justify-content-between tp_fade_anim">
                            <div class="creative-service-content d-flex align-items-start">
                                <span>(03)</span>
                                <div class="creative-service-title-info">
                                    <h4 class="creative-service-title"><a href="#website">Website Design</a></h4>
                                    <div class="creative-service-category">
                                        <span>Responsive UI</span>
                                        <span>Product Discovery</span>
                                        <span>Brand Consistency</span>
                                        <span>Conversion Focused</span>
                                    </div>
                                </div>
                            </div>
                            <div class="creative-service-link">
                                <a href="#website">
                                    <span>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 13L13 1M13 1H1M13 1V13" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="creative-service-item d-flex align-items-start justify-content-between tp_fade_anim">
                            <div class="creative-service-content d-flex align-items-start">
                                <span>(04)</span>
                                <div class="creative-service-title-info">
                                    <h4 class="creative-service-title"><a href="#website">Brand Identity</a></h4>
                                    <div class="creative-service-category">
                                        <span>Logo Design</span>
                                        <span>Color Palette</span>
                                        <span>Typography</span>
                                        <span>Visual Direction</span>
                                    </div>
                                </div>
                            </div>
                            <div class="creative-service-link">
                                <a href="#identity">
                                    <span>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 13L13 1M13 1H1M13 1V13" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->

    <!-- admin area start -->
    <div class="tp-service-5-features-ptb creative-service-2-style p-relative" id="admin">
        <div class="tp-service-5-feature-wrap p-relative">
            <div class="row">
                <div class="offset-xl-1 col-xl-6">
                    <div class="tp-service-5-feature-content">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                                <path d="M99 74.5858L76 97.5858V25V24H75H2.41421L25.4142 1H99V25V74.5858ZM30.1193 51L1 80.1193V51H30.1193ZM49 99H20.3031L49 70.3032V99Z" stroke="white" stroke-width="2" />
                            </svg>
                        </span>
                        <h3 class="tp-service-5-feature-title">
                            Enquiry management <br> dashboard for <br>
                            better lead control
                        </h3>
                    </div>
                </div>
            </div>
            <img data-speed=".8" class="w-100" src="assets/img/new-images/portfolio/wrappackncarry/7.png" alt="Wrap Pack N Carry enquiry management dashboard">
        </div>
    </div>
    <!-- admin area end -->

</main>

<?php include('layouts/footer.php'); ?>
