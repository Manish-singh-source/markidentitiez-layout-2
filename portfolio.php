<?php
$title = "Our Portfolio";
$portfolioItems = [
    [
        "title" => "Aakriti Space Designs",
        "image" => "assets/img/new-images/portfolio/aakriti/aakruti.png",
        "link" => "aakriti-space-designs.php",
        "categories" => "branding digital-marketing uiux",
        "labels" => ["Branding", "Digital"],
    ],
    [
        "title" => "Sapphire Mobile Accessories",
        "image" => "assets/img/new-images/portfolio/sapphire/sapphire.png",
        "link" => "sapphire.php",
        "categories" => "branding uiux packaging",
        "labels" => ["Branding", "Packaging"],
    ],
    [
        "title" => "Wrap Pack N Carry",
        "image" => "assets/img/new-images/portfolio/wrappackncarry/wrap.png",
        "link" => "wrappackncarry-desgin.php",
        "categories" => "digital-marketing uiux",
        "labels" => ["Digital", "UI/UX Design"],
    ],
    [
        "title" => "Fragomatrix",
        "image" => "assets/img/new-images/portfolio/frego/frego.png",
        "link" => "fragomatrix.php",
        "categories" => "branding uiux digital-marketing",
        "labels" => ["Branding", "UI/UX Design"],
    ],
   
];
include("layouts/header.php"); ?>

<style>
    .portfolio-char-drop {
        display: inline-block;
        width: 100%;
        line-height: 0.95;
        text-align: center;
    }

    .portfolio-char-drop .portfolio-title-line {
        display: flex;
        justify-content: center;
        overflow: hidden;
        perspective: 900px;
    }

    .portfolio-char-drop .portfolio-title-line + .portfolio-title-line {
        display: flex;
    }

    @media (max-width: 767px) {
        .portfolio-char-drop {
            font-size: clamp(0px, 17vw, 88px);
        }
    }

    .portfolio-char-drop .portfolio-char {
        display: inline-block;
        opacity: 0;
        transform: translateY(-130%) rotateX(42deg);
        transform-origin: top center;
        color: #ffffff;
        background: linear-gradient(180deg, #ffffff 0%, #ffffff 50%, #d7ee70 50%, #99cb2f 72%, #3f9b2f 100%);
        -webkit-background-clip: text;
        background-clip: text;
        will-change: transform, opacity;
    }

    @supports ((-webkit-background-clip: text) or (background-clip: text)) {
        .portfolio-char-drop .portfolio-char {
            color: transparent;
            -webkit-text-fill-color: transparent;
        }
    }

    .portfolio-char-drop.is-animated .portfolio-char {
        animation: portfolioCharDrop 0.76s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        animation-delay: calc(var(--char-index) * 0.055s);
    }

    @keyframes portfolioCharDrop {
        0% {
            opacity: 0;
            transform: translateY(-130%) rotateX(42deg);
        }
        70% {
            opacity: 1;
            transform: translateY(8%) rotateX(0deg);
        }
        100% {
            opacity: 1;
            transform: translateY(0) rotateX(0deg);
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .portfolio-char-drop .portfolio-char {
            opacity: 1;
            transform: none;
            animation: none;
        }
    }
</style>

<main>

    <!-- portfolio masonry area start -->
    <div class="tp-portfolio-masonry-ptb pt-130">
        <div class="container container-1830">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-portfolio-masonry-heading pb-80">
                        <h2 class="tp-portfolio-masonry-big-text portfolio-char-drop" aria-label="Our Portfolio" data-portfolio-title>
                            <span class="portfolio-title-line" aria-hidden="true">
                                <span class="portfolio-char" style="--char-index: 0;">O</span>
                                <span class="portfolio-char" style="--char-index: 1;">u</span>
                                <span class="portfolio-char" style="--char-index: 2;">r</span>
                            </span>
                            <span class="portfolio-title-line" aria-hidden="true">
                                <span class="portfolio-char" style="--char-index: 3;">P</span>
                                <span class="portfolio-char" style="--char-index: 4;">o</span>
                                <span class="portfolio-char" style="--char-index: 5;">r</span>
                                <span class="portfolio-char" style="--char-index: 6;">t</span>
                                <span class="portfolio-char" style="--char-index: 7;">f</span>
                                <span class="portfolio-char" style="--char-index: 8;">o</span>
                                <span class="portfolio-char" style="--char-index: 9;">l</span>
                                <span class="portfolio-char" style="--char-index: 10;">i</span>
                                <span class="portfolio-char" style="--char-index: 11;">o</span>
                            </span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="tp-portfolio-masonry-wrap">
                <div class="row">
                    <div class="col-xl-6 col-lg-4"></div>
                    <div class="col-xl-6 col-lg-8">
                        <div class="tp-portfolio-masonry-top-right">
                            <p>
                                Explore a curated portfolio of brand identities, packaging, <br>
                                UI/UX experiences and digital campaigns crafted for growing <br>
                                businesses. Each work reflects a clear strategy, thoughtful <br>
                                design direction and a strong visual identity.
                            </p>
                            <div class="tp-portfolio-masonry-social">
                                <a href="#">Branding</a>
                                <a href="#">Packaging</a>
                                <a href="#">UI/UX Design</a>
                                <a href="#">Digital Marketing</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- portfolio masonry area end -->

    <!-- video area start -->
    <div class="tp-video-area video-inner-style black-bg fix">
        <div class="container-fluid p-0">
            <div class="tp-video-thumb-wrap">
                <div class="tp-video-thumb d-none d-xl-block">
                    <img src="assets/img/new-images/FP-2.png" alt="">
                </div>
                <div class="tp-video-thumb mb-25">
                    <video loop muted autoplay playsinline>
                        <source src="assets/video/banner02.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="tp-video-thumb d-none d-xl-block mb-25">
                    <img src="assets/img/new-images/FP-4.png" alt="">
                </div>
                <div class="tp-video-thumb d-none d-xl-block mb-25">
                    <img src="assets/img/new-images/FP-1.png" alt="">
                </div>
                <div class="tp-video-thumb d-none d-xl-block">
                    <img src="assets/img/new-images/FP-3.png" alt="">
                </div>
                <div class="tp-video-thumb d-none d-xl-block">
                    <img src="assets/img/new-images/FP-5.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- video area end -->

    <!-- portfolio masonry grid start -->
    <div class="tp-portfolio-masonry-grid-ptb pt-55 pb-140">
        <div class="container container-1830">
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-filter-nav mb-55" data-portfolio-filter>
                        <button class="active" type="button" data-filter="all">All</button>
                        <button type="button" data-filter="branding">Branding</button>
                        <button type="button" data-filter="packaging">Packaging</button>
                        <button type="button" data-filter="uiux">UI/UX Design</button>
                        <button type="button" data-filter="digital-marketing">Digital Marketing</button>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tp-portfolio-masonry-grid-heading pb-40">
                        <span>Portfolio Showcase:</span>
                    </div>
                </div>
                <?php foreach ($portfolioItems as $index => $item) : ?>
                    <div class="col-lg-6 portfolio-filter-item" data-category="<?php echo htmlspecialchars($item['categories']); ?>">
                        <div class="tp-portfolio-masonry-grid-item mb-70">
                            <div class="tp-portfolio-masonry-grid-thumb tp--hover-item">
                                <a href="<?php echo htmlspecialchars($item['link']); ?>" target="_blank">
                                    <div class="tp--hover-img" data-displacement="assets/img/webgl/1.jpg" data-intensity="0.6" data-speedin="1" data-speedout="1">
                                        <img class="w-100 d-block" src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>">
                                    </div>
                                </a>
                            </div>
                            <div class="tp-portfolio-masonry-grid-content d-flex align-items-center justify-content-between">
                                <div class="tp-portfolio-masonry-grid-left">
                                    <h4 class="tp-portfolio-masonry-grid-title">
                                        <a class="tp-line-white" href="<?php echo htmlspecialchars($item['link']); ?>" target="_blank">
                                            <?php echo htmlspecialchars($item['title']); ?>
                                        </a>
                                    </h4>
                                </div>
                                <div class="tp-portfolio-masonry-grid-categories">
                                    <?php foreach ($item['labels'] as $label) : ?>
                                        <span><?php echo htmlspecialchars($label); ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="tp-portfolio-masonry-grid-bottom">
                        <a class="tp-btn-animation" href="#">
                            <span>Explore More Portfolio <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 1V12M6.5 12L12 6.5M6.5 12L1 6.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg></span>
                            <span>Explore More Portfolio <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 1V12M6.5 12L12 6.5M6.5 12L1 6.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg></span>
                            <span>Explore More Portfolio <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 1V12M6.5 12L12 6.5M6.5 12L1 6.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg></span>
                            <span>Explore More Portfolio <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 1V12M6.5 12L12 6.5M6.5 12L1 6.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg></span>
                            <span>Explore More Portfolio <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 1V12M6.5 12L12 6.5M6.5 12L1 6.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- portfolio masonry grid end -->

</main>

<script>
    function animatePortfolioTitle() {
        const portfolioTitle = document.querySelector('[data-portfolio-title]');

        if (!portfolioTitle || portfolioTitle.classList.contains('is-animated')) {
            return;
        }

        portfolioTitle.classList.add('is-animated');
    }

    window.addEventListener('load', function () {
        setTimeout(function () {
            animatePortfolioTitle();
        }, 650);
    });

    document.addEventListener('DOMContentLoaded', function () {
        setTimeout(function () {
            animatePortfolioTitle();
        }, 1800);

        const filterWrap = document.querySelector('[data-portfolio-filter]');
        const filterItems = document.querySelectorAll('.portfolio-filter-item');

        if (!filterWrap || !filterItems.length) {
            return;
        }

        filterWrap.addEventListener('click', function (event) {
            const button = event.target.closest('button[data-filter]');

            if (!button) {
                return;
            }

            const activeFilter = button.dataset.filter;

            filterWrap.querySelectorAll('button').forEach(function (item) {
                item.classList.toggle('active', item === button);
            });

            filterItems.forEach(function (item) {
                const categories = item.dataset.category.split(' ');
                const isVisible = activeFilter === 'all' || categories.includes(activeFilter);

                item.classList.toggle('portfolio-filter-hidden', !isVisible);
            });
        });
    });
</script>

<?php include("layouts/footer.php"); ?>
