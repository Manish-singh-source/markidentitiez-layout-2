<?php
$title = "Brand Proposition";
include("layouts/header.php"); ?>

<style>
    .bp-hero-title {
        font-size: clamp(22px, 13vw, 120px);
        line-height: .82;
        letter-spacing: 0;
    }

    .bp-hero-kicker,
    .bp-eyebrow {
        color: #fff669;
        text-transform: uppercase;
        letter-spacing: 1.8px;
        font-size: 14px;
        font-weight: 600;
    }

    .bp-hero-copy {
        color: rgba(255, 255, 255, .78);
        font-size: 20px;
        line-height: 1.45;
        max-width: 620px;
    }

    .bp-hero-img {
        border-radius: 8px;
        overflow: hidden;
        min-height: 520px;
    }

    .bp-hero-img img,
    .bp-image-card img,
    .bp-wide-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .bp-stat {
        border-top: 1px solid rgba(255, 255, 255, .16);
        padding-top: 24px;
    }

    .bp-stat h4 {
        color: #fff;
        font-size: clamp(42px, 5vw, 88px);
        line-height: .9;
        margin-bottom: 8px;
    }

    .bp-stat span {
        color: rgba(255, 255, 255, .68);
    }

    .bp-section-title {
        color: #fff;
        font-size: clamp(42px, 8vw, 65px);
        line-height: .9;
        letter-spacing: 0;
    }

    .bp-copy {
        color: rgba(255, 255, 255, .72);
        font-size: 18px;
        line-height: 1.65;
    }

    .bp-pill-list {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .bp-pill-list span {
        border: 1px solid rgba(255, 255, 255, .18);
        border-radius: 999px;
        color: #fff;
        padding: 10px 18px;
        line-height: 1;
    }

    .bp-image-card {
        border-radius: 8px;
        overflow: hidden;
        min-height: 420px;
    }

    .bp-deliverable {
        border-top: 1px solid rgba(255, 255, 255, .14);
        padding: 34px 0;
    }

    .bp-deliverable span {
        color: #fff669;
        display: inline-block;
        margin-bottom: 14px;
    }

    .bp-deliverable h4 {
        color: #fff;
        font-size: clamp(28px, 3vw, 44px);
        margin-bottom: 0;
    }

    .bp-deliverable p {
        color: rgba(255, 255, 255, .7);
        margin-bottom: 0;
    }

    .bp-process-card {
        border: 1px solid rgba(255, 255, 255, .12);
        border-radius: 8px;
        padding: 34px 28px;
        height: 100%;
        background: rgba(255, 255, 255, .03);
    }

    .bp-process-card span {
        color: #fff669;
        font-size: 18px;
        display: inline-block;
        margin-bottom: 44px;
    }

    .bp-process-card h4 {
        color: #fff;
        font-size: 30px;
        margin-bottom: 16px;
    }

    .bp-process-card p {
        color: rgba(255, 255, 255, .68);
        margin-bottom: 0;
    }

    .bp-wide-img {
        border-radius: 8px;
        overflow: hidden;
        height: min(62vw, 720px);
        min-height: 360px;
    }

    .bp-cta {
        border-top: 1px solid rgba(255, 255, 255, .14);
        border-bottom: 1px solid rgba(255, 255, 255, .14);
    }

    @media (max-width: 767px) {
        .bp-hero-img,
        .bp-image-card {
            min-height: 320px;
        }

        .bp-deliverable {
            padding: 26px 0;
        }
    }
</style>

<main>

    <!-- hero area start -->
    <section class="bp-hero-area pt-180 pb-120 p-relative fix">
        <div class="container container-1750">
            <div class="row align-items-end mb-70">
                <div class="col-xl-8 col-lg-8">
                    <span class="bp-hero-kicker d-inline-block mb-25">Brand Proposition</span>
                    <h1 class="bp-hero-title text-white tp-char-animation">Own the reason customers choose you.</h1>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <p class="bp-hero-copy mb-35">
                        We shape the promise, personality, and proof behind your brand so every touchpoint says one clear thing: this is the brand worth remembering.
                    </p>
                    <a class="tp-btn-white-border tp-btn-transparent" href="mailto:info@markidentitiez.com">
                        <span>Build your proposition</span>
                    </a>
                </div>
            </div>
            <div class="row gx-30 align-items-stretch">
                <div class="col-lg-8">
                    <div class="bp-hero-img tp_img_reveal mb-30">
                        <img src="assets/img/new-images/brand-posionging.png" alt="Brand proposition showcase">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row h-100">
                        <div class="col-md-6 col-lg-12">
                            <div class="bp-stat mb-45">
                                <h4><span class="purecounter" data-purecounter-duration="1" data-purecounter-end="360">0</span>°</h4>
                                <span>Brand clarity across strategy, visuals, messaging, and experience.</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="bp-stat mb-45">
                                <h4><span class="purecounter" data-purecounter-duration="1" data-purecounter-end="4">0</span>x</h4>
                                <span>Sharper recall when the brand promise is specific and consistent.</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="bp-stat">
                                <h4><span class="purecounter" data-purecounter-duration="1" data-purecounter-end="1">0</span></h4>
                                <span>Memorable position your audience can repeat, trust, and buy into.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero area end -->

    <!-- proposition area start -->
    <section class="bp-proposition-area pt-110 pb-100" data-bg-color="#111113">
        <div class="container container-1430">
            <div class="row align-items-start">
                <div class="col-lg-5">
                    <span class="bp-eyebrow d-inline-block mb-25">What we define</span>
                    <h2 class="bp-section-title mb-40">A brand promise with commercial teeth.</h2>
                </div>
                <div class="col-lg-7">
                    <p class="bp-copy mb-35">
                        A strong brand proposition is not just a line on a deck. It is the strategic foundation that tells customers what you stand for, why you matter, and why choosing you feels obvious. We translate research, category gaps, business strengths, and customer triggers into a compelling market position.
                    </p>
                    <div class="bp-pill-list">
                        <span>Audience insight</span>
                        <span>Competitive mapping</span>
                        <span>Positioning statement</span>
                        <span>Brand voice</span>
                        <span>Core messaging</span>
                        <span>Visual direction</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- proposition area end -->

    <!-- gallery area start -->
    <section class="bp-gallery-area pt-120">
        <div class="container container-1750">
            <div class="row gx-30">
                <div class="col-lg-4">
                    <div class="bp-image-card tp--hover-item mb-30">
                        <div class="tp--hover-img" data-displacement="assets/img/webgl/1.jpg" data-intensity="0.6" data-speedin="1" data-speedout="1">
                            <img src="assets/img/new-images/brand-proposition1.png" alt="Brand identity visual">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bp-image-card tp--hover-item mb-30">
                        <div class="tp--hover-img" data-displacement="assets/img/webgl/1.jpg" data-intensity="0.6" data-speedin="1" data-speedout="1">
                            <img src="assets/img/new-images/brand-proposition2.png" alt="Brand system visual">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bp-image-card tp--hover-item mb-30">
                        <div class="tp--hover-img" data-displacement="assets/img/webgl/1.jpg" data-intensity="0.6" data-speedin="1" data-speedout="1">
                            <img src="assets/img/new-images/brand-proposition3.png" alt="Brand campaign visual">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery area end -->

    <!-- deliverables area start -->
    <section class="bp-deliverables-area pt-70 pb-120">
        <div class="container container-1430">
            <div class="row mb-60">
                <div class="col-lg-7">
                    <span class="bp-eyebrow d-inline-block mb-25">Proposition toolkit</span>
                    <h2 class="bp-section-title">Everything your brand needs to speak with one voice.</h2>
                </div>
            </div>
            <div class="bp-deliverable">
                <div class="row align-items-center">
                    <div class="col-lg-3"><span>01</span></div>
                    <div class="col-lg-4"><h4>Strategic Positioning</h4></div>
                    <div class="col-lg-5"><p>We define the territory your brand can own, the audience it must influence, and the reason it deserves attention.</p></div>
                </div>
            </div>
            <div class="bp-deliverable">
                <div class="row align-items-center">
                    <div class="col-lg-3"><span>02</span></div>
                    <div class="col-lg-4"><h4>Messaging Architecture</h4></div>
                    <div class="col-lg-5"><p>We create the tagline, value pillars, proof points, elevator pitch, and copy cues that keep communication consistent.</p></div>
                </div>
            </div>
            <div class="bp-deliverable">
                <div class="row align-items-center">
                    <div class="col-lg-3"><span>03</span></div>
                    <div class="col-lg-4"><h4>Visual Direction</h4></div>
                    <div class="col-lg-5"><p>We align logo usage, colors, typography, imagery, and design language to support the proposition visually.</p></div>
                </div>
            </div>
            <div class="bp-deliverable">
                <div class="row align-items-center">
                    <div class="col-lg-3"><span>04</span></div>
                    <div class="col-lg-4"><h4>Launch Readiness</h4></div>
                    <div class="col-lg-5"><p>We package your proposition into practical brand guidelines and rollout-ready assets for teams, campaigns, and sales.</p></div>
                </div>
            </div>
        </div>
    </section>
    <!-- deliverables area end -->

    <!-- banner area start -->
    <section class="bp-banner-area pb-120">
        <div class="container container-1750">
            <div class="bp-wide-img">
                <img data-speed=".8" src="assets/img/new-images/brand-proposition4.png" alt="Brand proposition banner">
            </div>
        </div>
    </section>
    <!-- banner area end -->

    <!-- process area start -->
    <section class="bp-process-area pt-120 pb-120" data-bg-color="#1b1b1d">
        <div class="container container-1430">
            <div class="row align-items-end mb-70">
                <div class="col-lg-7">
                    <span class="bp-eyebrow d-inline-block mb-25">Working process</span>
                    <h2 class="bp-section-title">From insight to identity system.</h2>
                </div>
                <div class="col-lg-5">
                    <p class="bp-copy mb-0">Every stage is built to reduce guesswork and turn brand thinking into assets your team can actually use.</p>
                </div>
            </div>
            <div class="row gx-30">
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="bp-process-card">
                        <span>01</span>
                        <h4>Discover</h4>
                        <p>Business goals, audience motivations, category codes, and current brand gaps.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="bp-process-card">
                        <span>02</span>
                        <h4>Define</h4>
                        <p>Positioning, value proposition, brand personality, and messaging hierarchy.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="bp-process-card">
                        <span>03</span>
                        <h4>Design</h4>
                        <p>Visual cues, identity direction, content themes, and branded experience samples.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="bp-process-card">
                        <span>04</span>
                        <h4>Deploy</h4>
                        <p>Guidelines, launch assets, campaign cues, and handover for consistent execution.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- process area end -->

    <!-- text slider area start -->
    <section class="ar-about-us-4-text-area bp-cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ar-about-us-4-text-warp">
                        <div class="swiper-container tp-brand-active">
                            <div class="swiper-wrapper slide-transtion">
                                <div class="swiper-slide"><h2 class="ar-about-us-4-text-title">BUILD A BRAND PEOPLE CHOOSE</h2></div>
                                <div class="swiper-slide"><h2 class="ar-about-us-4-text-title">DEFINE YOUR DIFFERENCE</h2></div>
                                <div class="swiper-slide"><h2 class="ar-about-us-4-text-title">MAKE THE MESSAGE MEMORABLE</h2></div>
                                <div class="swiper-slide"><h2 class="ar-about-us-4-text-title">BUILD A BRAND PEOPLE CHOOSE</h2></div>
                                <div class="swiper-slide"><h2 class="ar-about-us-4-text-title">DEFINE YOUR DIFFERENCE</h2></div>
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
