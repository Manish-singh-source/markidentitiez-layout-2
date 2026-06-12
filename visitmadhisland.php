<?php
$pageMetaTitle = 'Visit Madh Island | Real Estate, Tourism and Business Opportunities';
$pageMetaDescription = 'A case-study style page for Visit Madh Island, showcasing property listings, categories, key stats, and the brand story inside the Mark Identitiez theme.';
$bodyClass = 'tp-magic-cursor black-bg-4';
$bodyDataBgColor = '#000';
include('layouts/header.php');
?>

<main class="visit-madhisland-page">
    <style>
        .visit-madhisland-page {
            --vm-bg: #05070b;
            --vm-panel: rgba(11, 18, 31, 0.94);
            --vm-panel-2: rgba(16, 27, 45, 0.96);
            --vm-line: rgba(255, 255, 255, 0.16);
            --vm-text: rgba(255, 255, 255, 0.88);
            --vm-accent: #53b7ff;
            --vm-accent-2: #9df5ff;
            color: #fff;
            background:
                radial-gradient(circle at top left, rgba(83, 183, 255, 0.24), transparent 24%),
                radial-gradient(circle at top right, rgba(124, 240, 255, 0.18), transparent 22%),
                linear-gradient(180deg, #04060a 0%, #09111d 38%, #04060a 100%);
        }

        .visit-madhisland-page h1,
        .visit-madhisland-page h2,
        .visit-madhisland-page h3,
        .visit-madhisland-page h4,
        .visit-madhisland-page h5,
        .visit-madhisland-page h6 {
            color: #ffffff !important;
            text-shadow: 0 8px 24px rgba(0, 0, 0, 0.35);
        }

        .visit-madhisland-page p,
        .visit-madhisland-page li {
            color: var(--vm-text);
        }

        .vm-section {
            position: relative;
            z-index: 1;
        }

        .vm-hero {
            padding: 150px 0 110px;
        }

        .vm-kicker {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-transform: uppercase;
            letter-spacing: 0.14em;
            font-size: 12px;
            color: rgba(255, 255, 255, 0.84) !important;
        }

        .vm-kicker i {
            width: 42px;
            height: 1px;
            background: linear-gradient(90deg, var(--vm-accent-2), transparent);
            display: inline-block;
        }

        .vm-hero-title {
            font-size: clamp(3rem, 7vw, 7.4rem);
            line-height: 0.92;
            letter-spacing: -0.05em;
            margin: 18px 0 20px;
            max-width: 11ch;
            color: #ffffff;
            position: relative;
            z-index: 2;
            text-shadow: 0 10px 28px rgba(0, 0, 0, 0.45);
        }

        .vm-hero-title .accent {
            color: var(--vm-accent-2);
            display: inline-block;
            text-shadow: 0 8px 24px rgba(0, 0, 0, 0.35);
        }

        .vm-hero-copy {
            max-width: 620px;
            color: var(--vm-text);
            font-size: 18px;
            line-height: 1.8;
        }

        .vm-cta-row {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin-top: 34px;
        }

        .vm-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 15px 24px;
            border-radius: 999px;
            border: 1px solid rgba(255, 255, 255, 0.16);
            color: #fff;
            background: rgba(255, 255, 255, 0.04);
            transition: transform 0.2s ease, border-color 0.2s ease, background 0.2s ease;
        }

        .vm-btn:hover {
            transform: translateY(-2px);
            border-color: rgba(83, 183, 255, 0.7);
            background: rgba(83, 183, 255, 0.12);
            color: #fff;
        }

        .vm-btn-primary {
            background: linear-gradient(135deg, var(--vm-accent), var(--vm-accent-2));
            color: #04101f;
            border-color: transparent;
            font-weight: 700;
        }

        .vm-btn-primary:hover {
            background: linear-gradient(135deg, #6ac4ff, #b5fbff);
            color: #04101f;
        }

        .vm-hero-visual {
            position: relative;
            min-height: 640px;
            z-index: 1;
        }

        .vm-visual-card {
            position: absolute;
            overflow: hidden;
            border-radius: 30px;
            border: 1px solid rgba(255, 255, 255, 0.12);
            background: rgba(255, 255, 255, 0.03);
            box-shadow: 0 26px 80px rgba(0, 0, 0, 0.34);
        }

        .vm-visual-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .vm-visual-card.primary {
            top: 0;
            right: 0;
            width: min(100%, 520px);
            height: 360px;
            transform: perspective(1200px) rotateY(-10deg) rotateX(4deg);
        }

        .vm-visual-card.secondary {
            left: 0;
            bottom: 12px;
            width: 320px;
            height: 250px;
            transform: perspective(1000px) rotateY(10deg) rotateX(-4deg);
        }

        .vm-hero-stat {
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            width: min(100%, 340px);
            padding: 24px 26px;
            border-radius: 24px;
            background: rgba(5, 10, 18, 0.8);
            backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.12);
        }

        .vm-hero-stat strong {
            display: block;
            font-size: 46px;
            line-height: 1;
            margin-bottom: 8px;
            color: var(--vm-accent-2);
        }

        .vm-hero-stat span {
            color: rgba(255, 255, 255, 0.72);
            font-size: 14px;
            line-height: 1.6;
        }

        .vm-section-heading {
            margin-bottom: 34px;
        }

        .vm-section-heading .vm-kicker {
            margin-bottom: 18px;
        }

        .vm-section-title {
            font-size: clamp(2rem, 4vw, 4rem);
            line-height: 1;
            letter-spacing: -0.04em;
            margin: 0;
            max-width: 12ch;
            color: #ffffff !important;
        }

        .vm-section-lead {
            max-width: 760px;
            color: var(--vm-text);
            font-size: 17px;
            line-height: 1.8;
            margin-top: 16px;
        }

        .vm-grid {
            display: grid;
            gap: 22px;
        }

        .vm-feature-grid {
            grid-template-columns: repeat(12, 1fr);
        }

        .vm-property {
            grid-column: span 6;
            position: relative;
            overflow: hidden;
            min-height: 360px;
            border-radius: 28px;
            background: var(--vm-panel);
            border: 1px solid var(--vm-line);
        }

        .vm-property-media {
            position: absolute;
            inset: 0;
        }

        .vm-property-media::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(4, 10, 20, 0.1) 0%, rgba(4, 10, 20, 0.82) 100%);
        }

        .vm-property-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .vm-property-content {
            position: relative;
            z-index: 1;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            height: 100%;
            padding: 28px;
        }

        .vm-property-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            width: fit-content;
            padding: 8px 14px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.16);
            color: #fff;
            font-size: 12px;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            margin-bottom: 18px;
        }

        .vm-property-title {
            margin: 0;
            font-size: 28px;
            line-height: 1.1;
            letter-spacing: -0.03em;
            max-width: 12ch;
            color: #ffffff !important;
        }

        .vm-property-meta {
            margin-top: 12px;
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.75;
            max-width: 42ch;
        }

        .vm-property-foot {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 14px;
            margin-top: 22px;
            flex-wrap: wrap;
        }

        .vm-price {
            font-weight: 700;
            color: var(--vm-accent-2);
        }

        .vm-mini-link {
            color: #fff;
            border-bottom: 1px solid rgba(255, 255, 255, 0.25);
            padding-bottom: 2px;
        }

        .vm-chip-row {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .vm-chip {
            padding: 11px 18px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.18);
            color: rgba(255, 255, 255, 0.94);
        }

        .vm-stats {
            margin: 26px 0 0;
            padding: 24px 0 0;
            border-top: 1px solid rgba(255, 255, 255, 0.12);
        }

        .vm-stat {
            padding: 20px 22px;
            border-radius: 22px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .vm-stat strong {
            display: block;
            font-size: clamp(2.2rem, 4vw, 3.8rem);
            line-height: 1;
            color: var(--vm-accent-2);
            margin-bottom: 10px;
        }

        .vm-stat span {
            color: rgba(255, 255, 255, 0.74);
        }

        .vm-benefit {
            padding: 28px;
            border-radius: 26px;
            background: var(--vm-panel-2);
            border: 1px solid var(--vm-line);
            height: 100%;
        }

        .vm-benefit h4 {
            margin-bottom: 14px;
            font-size: 24px;
            letter-spacing: -0.03em;
            color: #ffffff !important;
        }

        .vm-benefit p {
            color: var(--vm-text);
            line-height: 1.8;
            margin: 0;
        }

        .vm-service-grid {
            display: grid;
            gap: 20px;
            grid-template-columns: repeat(12, 1fr);
            margin-top: 28px;
        }

        .vm-service-card {
            grid-column: span 4;
            padding: 24px;
            border-radius: 24px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.12);
            min-height: 170px;
        }

        .vm-service-card strong {
            display: block;
            font-size: 18px;
            margin-bottom: 10px;
            color: var(--vm-accent-2);
            letter-spacing: -0.02em;
        }

        .vm-service-card p {
            margin: 0;
            color: rgba(255, 255, 255, 0.86);
            line-height: 1.75;
        }

        .vm-contact-band {
            padding: 30px;
            border-radius: 30px;
            background: linear-gradient(135deg, rgba(83, 183, 255, 0.22), rgba(124, 240, 255, 0.1));
            border: 1px solid rgba(124, 240, 255, 0.22);
        }

        .vm-contact-band a {
            color: #fff;
        }

        .vm-contact-band h3,
        .vm-contact-band p {
            color: #ffffff !important;
        }

        @media (max-width: 991px) {
            .vm-hero {
                padding-top: 120px;
            }

            .vm-hero-visual {
                min-height: 540px;
                margin-top: 38px;
            }

            .vm-property {
                grid-column: span 12;
            }
        }

        @media (max-width: 767px) {
            .vm-hero {
                padding-bottom: 70px;
            }

            .vm-hero-title {
                max-width: 100%;
            }

            .vm-hero-copy,
            .vm-section-lead {
                font-size: 16px;
            }

            .vm-visual-card.primary {
                width: 100%;
                height: 290px;
                transform: none;
            }

            .vm-visual-card.secondary {
                width: 68%;
                height: 190px;
                bottom: 18px;
                transform: none;
            }

            .vm-hero-stat {
                width: calc(100% - 30px);
                padding: 20px;
            }

            .vm-property-content {
                padding: 22px;
            }

            .vm-property-title {
                font-size: 24px;
            }

            .vm-service-card {
                grid-column: span 12;
            }
        }
    </style>

    <!-- hero area start -->
    <section class="vm-section vm-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <span class="vm-kicker"><i></i> Visit Madh Island</span>
                    <h1 class="vm-hero-title">
                        We designed and developed their 
                        <span class="accent">website</span>.
                    </h1>
                    <p class="vm-hero-copy">
                        Visit Madh Island ke liye humne website design, development, on-page SEO, content structure, aur
                        brand presentation work kiya. Is page mein usi project ko our theme ke andar case-study style mein
                        present kiya gaya hai, with stronger contrast and clearer messaging.
                    </p>
                    <div class="vm-cta-row">
                        <a class="vm-btn vm-btn-primary" href="https://visitmadhisland.com/" target="_blank" rel="noopener noreferrer">
                            Visit Live Site
                        </a>
                        <a class="vm-btn" href="#project-services">What We Did</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="vm-hero-visual">
                        <div class="vm-visual-card primary">
                            <img src="assets/img/new-images/portfolio/madh-island/1.png" alt="Visit Madh Island inspired hero visual">
                        </div>
                        <div class="vm-visual-card secondary">
                            <img src="assets/img/new-images/portfolio/madh-island/2.png" alt="Visit Madh Island brand visual">
                        </div>
                        <div class="vm-hero-stat">
                            <strong>SEO</strong>
                            <span>On-page SEO, clean content hierarchy, call-to-action flow, and optimized service presentation for better user understanding.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero area end -->

    <!-- featured properties area start -->
    <section class="vm-section pt-20 pb-120" id="featured-properties">
        <div class="container">
            <div class="vm-section-heading">
                <span class="vm-kicker"><i></i> Featured Properties</span>
                <h2 class="vm-section-title">Checkout our latest properties.</h2>
                <p class="vm-section-lead">
                    A condensed showcase of the listings and price points featured on the source page, presented here in
                    a visual, brand-aligned format with improved contrast.
                </p>
            </div>

            <div class="vm-grid vm-feature-grid">
                <article class="vm-property">
                    <div class="vm-property-media"><img src="assets/img/new-images/portfolio/madh-island/3.png" alt="Prime 7-acre property with main road access"></div>
                    <div class="vm-property-content">
                        <span class="vm-property-badge">For Rent - Plot</span>
                        <h3 class="vm-property-title">Prime 7-acre property with main road access</h3>
                        <p class="vm-property-meta">Madhisland, Mumbai<br>7 Acres</p>
                        <div class="vm-property-foot">
                            <span class="vm-price">Rent Price: Rs. 18.5 Lakhs per month negotiable</span>
                            <a class="vm-mini-link" href="https://visitmadhisland.com/" target="_blank" rel="noopener noreferrer">View Details</a>
                        </div>
                    </div>
                </article>

                <article class="vm-property">
                    <div class="vm-property-media"><img src="assets/img/new-images/portfolio/madh-island/4.png" alt="3BHK flat in Phase 3 Raheja Exotica"></div>
                    <div class="vm-property-content">
                        <span class="vm-property-badge">For Sale - Flat</span>
                        <h3 class="vm-property-title">3BHK flat</h3>
                        <p class="vm-property-meta">Phase 3, Raheja Exotica<br>3 Bed | 3 Bath | 923 SqFT</p>
                        <div class="vm-property-foot">
                            <span class="vm-price">Price: Rs. 2.80 Cr</span>
                            <a class="vm-mini-link" href="https://visitmadhisland.com/" target="_blank" rel="noopener noreferrer">View Details</a>
                        </div>
                    </div>
                </article>

                <article class="vm-property">
                    <div class="vm-property-media"><img src="assets/img/new-images/portfolio/madh-island/5.png" alt="2.5 BHK bungalow surrounded by nature"></div>
                    <div class="vm-property-content">
                        <span class="vm-property-badge">For Rent - Bungalow</span>
                        <h3 class="vm-property-title">2.5 BHK bungalow surrounded by nature</h3>
                        <p class="vm-property-meta">Madhisland, Mumbai<br>2.5 Bed | 3 Bath | 3000 SqFT</p>
                        <div class="vm-property-foot">
                            <span class="vm-price">Price: Rs. 2,00,000 per month</span>
                            <a class="vm-mini-link" href="https://visitmadhisland.com/" target="_blank" rel="noopener noreferrer">View Details</a>
                        </div>
                    </div>
                </article>

                <article class="vm-property">
                    <div class="vm-property-media"><img src="assets/img/new-images/portfolio/madh-island/6.png" alt="Bungalow near beach with prime connectivity"></div>
                    <div class="vm-property-content">
                        <span class="vm-property-badge">For Sale - Bungalow</span>
                        <h3 class="vm-property-title">Bungalow near beach with prime connectivity</h3>
                        <p class="vm-property-meta">Madhisland, Mumbai<br>1 Bed | 1 Bath | 2000 SqFT</p>
                        <div class="vm-property-foot">
                            <span class="vm-price">Price: Rs. 1.90 Cr slightly negotiable</span>
                            <a class="vm-mini-link" href="https://visitmadhisland.com/" target="_blank" rel="noopener noreferrer">View Details</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- featured properties area end -->

    <!-- categories and stats area start -->
    <section class="vm-section pb-120">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <div class="vm-section-heading mb-0">
                        <span class="vm-kicker"><i></i> Explore Categories</span>
                        <h2 class="vm-section-title">Our categories for you.</h2>
                        <p class="vm-section-lead">
                            The source site organizes listings around a mix of bungalow, flat, plot, and rental opportunities.
                            This section keeps that structure visible in a cleaner format.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="vm-chip-row justify-content-lg-end">
                        <span class="vm-chip">1BHK Exclusive Terrace Bungalow</span>
                        <span class="vm-chip">1BHK Duplex</span>
                        <span class="vm-chip">2.5 BHK Bungalow</span>
                        <span class="vm-chip">Spacious 2BHK</span>
                        <span class="vm-chip">3BHK Duplex Sea View</span>
                        <span class="vm-chip">1BHK Flat</span>
                    </div>
                </div>
            </div>

            <div class="row g-4 vm-stats">
                <div class="col-md-3 col-6">
                    <div class="vm-stat">
                        <strong>50</strong>
                        <span>Satisfied Clients</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="vm-stat">
                        <strong>20</strong>
                        <span>Happy Landlords</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="vm-stat">
                        <strong>20</strong>
                        <span>Successful Transactions</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="vm-stat">
                        <strong>40</strong>
                        <span>Total Rentals</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- categories and stats area end -->

    <!-- project services area start -->
    <section class="vm-section pb-120" id="project-services">
        <div class="container">
            <div class="vm-section-heading">
                <span class="vm-kicker"><i></i> Project Scope</span>
                <h2 class="vm-section-title">What we delivered.</h2>
                <p class="vm-section-lead">
                    Agar aap client ko batana chahte ho ki project mein kya-kya kaam hua, yeh section direct, simple, aur
                    professional language mein wohi explain karta hai.
                </p>
            </div>

            <div class="vm-service-grid">
                <div class="vm-service-card">
                    <strong>Website Design & Development</strong>
                    <p>Modern layout, clear sections, responsive structure, aur theme ke saath matched visual presentation.</p>
                </div>
                <div class="vm-service-card">
                    <strong>SEO Work</strong>
                    <p>On-page SEO structure, keyword-friendly headings, meta-ready content, aur cleaner content flow.</p>
                </div>
                <div class="vm-service-card">
                    <strong>Content & Branding</strong>
                    <p>Project story, service messaging, aur trust-building content ko concise aur readable banaya gaya.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- project services area end -->

    <!-- benefits area start -->
    <section class="vm-section pb-120">
        <div class="container">
            <div class="vm-section-heading">
                <span class="vm-kicker"><i></i> Why Choose Madh Island</span>
                <h2 class="vm-section-title">Our benefit.</h2>
                <p class="vm-section-lead">
                    The original page communicates three core reasons to work with the brand. We kept that message and
                    gave it a more premium, readable presentation.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="vm-benefit">
                        <h4>Proven Expertise</h4>
                        <p>
                            A seasoned team with years of real-estate experience, offering informed decisions and practical
                            guidance for both buyers and renters.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="vm-benefit">
                        <h4>Customized Solutions</h4>
                        <p>
                            Personalised strategies tailored to your property goals so the journey feels clearer, smoother,
                            and more useful from first enquiry to final deal.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="vm-benefit">
                        <h4>Transparent Partnerships</h4>
                        <p>
                            Clear communication, ethical practices, and consistent follow-through designed to build trust at
                            every step.
                        </p>
                    </div>
                </div>
            </div>

            <div class="vm-contact-band mt-5">
                <div class="row align-items-center g-4">
                    <div class="col-lg-8">
                        <h3 class="mb-3">Visitmadhisland is the official website of Madhisland related to tourism and its business opportunity on the internet.</h3>
                        <p class="mb-0" style="color: rgba(255,255,255,.78); line-height: 1.8;">
                            Sicily Raheja Exotica, Madhisland, Malad West, Mumbai 64<br>
                            Phone: <a href="tel:+917977381533">+91 7977 3815 33</a> / <a href="tel:+917304917567">+91 73049 17567</a><br>
                            Email: <a href="mailto:contact@visitmadhisland.com">contact@visitmadhisland.com</a>
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <div class="mb-2" style="color: rgba(255,255,255,.72);">RERA ID - A51800040094</div>
                        <a class="vm-btn vm-btn-primary" href="https://visitmadhisland.com/" target="_blank" rel="noopener noreferrer">Open Live Listing Site</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- benefits area end -->
</main>

<?php include('layouts/footer.php'); ?>
