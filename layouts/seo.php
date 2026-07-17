<?php

if (!function_exists('mi_seo_site_base_url')) {
    function mi_seo_site_base_url()
    {
        $scheme = 'http';

        if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
            $scheme = 'https';
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO'])) {
            $scheme = strtok($_SERVER['HTTP_X_FORWARDED_PROTO'], ',') ?: $scheme;
        }

        $host = $_SERVER['HTTP_HOST'] ?? 'localhost';

        return $scheme . '://' . $host;
    }
}

if (!function_exists('mi_seo_slug_to_title')) {
    function mi_seo_slug_to_title($slug)
    {
        $slug = preg_replace('/[-_]+/', ' ', (string) $slug);
        $slug = trim($slug);

        return $slug === '' ? '' : ucwords($slug);
    }
}

if (!function_exists('mi_seo_clean_text')) {
    function mi_seo_clean_text($text)
    {
        $text = trim(preg_replace('/\s+/', ' ', strip_tags((string) $text)));
        return $text;
    }
}

if (!function_exists('mi_seo_truncate')) {
    function mi_seo_truncate($text, $limit = 155)
    {
        $text = mi_seo_clean_text($text);

        if (function_exists('mb_strlen') && function_exists('mb_substr')) {
            return mb_strlen($text) > $limit ? rtrim(mb_substr($text, 0, $limit - 3)) . '...' : $text;
        }

        return strlen($text) > $limit ? rtrim(substr($text, 0, $limit - 3)) . '...' : $text;
    }
}

if (!function_exists('mi_resolve_seo_meta')) {
    function mi_resolve_seo_meta($pageTitle = '', $pageMetaDescription = '', $pageMetaKeywords = '', $pageMetaRobots = '', $pageMetaImage = '')
    {
        $scriptName = basename($_SERVER['SCRIPT_NAME'] ?? '');
        $fileKey = strtolower(pathinfo($scriptName, PATHINFO_FILENAME));

        $brandName = 'Mark Identitiez';
        $siteBaseUrl = mi_seo_site_base_url();
        $canonicalPath = strtok($_SERVER['REQUEST_URI'] ?? '/', '?') ?: '/';
        $canonicalUrl = $siteBaseUrl . $canonicalPath;

        $pageMap = [
            'index' => [
                'title' => 'Best Branding Agency in Kandivali Mumbai | Branding Company',
                'description' => 'Build your brand with Mark Identitiez, a branding agency in Kandivali Mumbai offering strategy, identity, packaging, naming, and communication design.',
                'keywords' => 'branding agency in mumbai, branding company, brand strategy, brand identity design, packaging design, Mark Identitiez',
            ],
            'about-us' => [
                'title' => 'Leading Branding Agency in Kandivali Mumbai',
                'description' => 'Learn how Mark Identitiez builds strong brand identities, sharper communication, and memorable customer experiences for ambitious businesses.',
                'keywords' => 'about Mark Identitiez, branding agency in mumbai, brand identity agency, creative agency kandivali',
            ],
            'service' => [
                'title' => 'Branding Services in Mumbai',
                'description' => 'Explore branding services in Mumbai including brand proposition, identity, positioning, visual language, architecture, packaging, naming, and communication design.',
                'keywords' => 'branding services in mumbai, brand identity services, packaging design services, brand naming agency, communication design',
            ],
            'portfolio' => [
                'title' => 'Mumbai Branding Agency Portfolio | Creative Brand Solutions',
                'description' => 'Explore the Mark Identitiez portfolio featuring branding, packaging, digital, and identity projects created for growing businesses across categories.',
                'keywords' => 'branding portfolio, mumbai branding agency portfolio, brand case studies, creative brand solutions',
            ],
            'contactus' => [
                'title' => 'Contact Mark Identitiez | Branding Agency in Mumbai',
                'description' => 'Contact Mark Identitiez in Mumbai for brand strategy, naming, logo design, identity design, packaging, and communication design projects.',
                'keywords' => 'contact branding agency mumbai, contact Mark Identitiez, brand strategy inquiry, design agency contact',
            ],
            'career' => [
                'title' => 'Careers at Mark Identitiez',
                'description' => 'Explore career opportunities at Mark Identitiez and grow with a collaborative team focused on branding, design, innovation, and creativity.',
                'keywords' => 'careers at Mark Identitiez, branding jobs mumbai, creative agency careers, design jobs',
            ],
            'brand-architecture' => [
                'title' => 'Brand Architecture & Design Services',
                'description' => 'Get expert brand architecture and design services to define brand structure, improve clarity, and support long-term brand growth.',
                'keywords' => 'brand architecture, brand structure, brand development agency, brand design services',
            ],
            'brand-identity' => [
                'title' => 'Brand Identity Design Services',
                'description' => 'Create a distinctive brand identity with systems, visuals, and guidelines that communicate your brand essence clearly and consistently.',
                'keywords' => 'brand identity design, identity design services, branding agency, visual identity',
            ],
            'brand-naming' => [
                'title' => 'Expert Brand Naming Agency',
                'description' => 'Work with a brand naming agency that helps shape memorable, strategic, and market-ready brand and product names.',
                'keywords' => 'brand naming agency, product naming company, naming strategy, brand naming services',
            ],
            'brand-positioning' => [
                'title' => 'Strategic Brand Positioning Services',
                'description' => 'Use strategic brand positioning services to sharpen differentiation, define market perception, and strengthen customer recall.',
                'keywords' => 'brand positioning services, positioning strategy, brand strategy agency, market differentiation',
            ],
            'brand-proposition' => [
                'title' => 'Brand Value Proposition Services',
                'description' => 'Clarify your brand value proposition with sharper messaging, stronger positioning, and a more compelling brand statement.',
                'keywords' => 'brand value proposition, brand statement, messaging strategy, brand proposition services',
            ],
            'packaging-design' => [
                'title' => 'Packaging & Label Design Services in Mumbai',
                'description' => 'Build stronger shelf presence with packaging and label design services that support product branding, clarity, and customer appeal.',
                'keywords' => 'packaging design mumbai, label design services, product packaging design, packaging branding',
            ],
            'logo-design-brand-management' => [
                'title' => 'Logo Design and Brand Management Services',
                'description' => 'Strengthen your market presence with logo design and brand management services that improve recognition, consistency, and trust.',
                'keywords' => 'logo design services, brand management, logo design mumbai, branding solutions',
            ],
            'visual-brand-language' => [
                'title' => 'Visual Brand Language Services',
                'description' => 'Define a distinctive visual brand language with cohesive design systems, brand imagery, and consistent visual identifiers.',
                'keywords' => 'visual brand language, brand image design, visual identity system, brand design services',
            ],
            'brand-tonality-messaging' => [
                'title' => 'Brand Tonality & Messaging Services',
                'description' => 'Shape a stronger brand voice with tonality and messaging services that improve clarity, recall, and audience connection.',
                'keywords' => 'brand tonality, brand messaging, verbal branding, brand voice services',
            ],
            'communication-design' => [
                'title' => 'Visual Communication Design Services',
                'description' => 'Create impactful communication design across digital and print touchpoints with strong visual identity and brand consistency.',
                'keywords' => 'communication design, visual communication design, graphic design agency, brand communication',
            ],
            'aakriti-space-designs' => [
                'title' => 'Aakriti Space Designs Case Study',
                'description' => 'See how Mark Identitiez shaped the creative presentation and publication design for Aakriti Space Designs.',
                'keywords' => 'Aakriti Space Designs case study, branding case study, interior design branding, Mark Identitiez portfolio',
            ],
            'fragomatrix' => [
                'title' => 'Fragomatrix Case Study',
                'description' => 'Explore the Fragomatrix case study featuring brand identity, packaging, and communication design by Mark Identitiez.',
                'keywords' => 'Fragomatrix case study, packaging design case study, branding portfolio, Mark Identitiez',
            ],
            'aeritx' => [
                'title' => 'Aeritx Case Study',
                'description' => 'Discover the Aeritx project by Mark Identitiez, showcasing a focused blend of brand thinking, design execution, and digital presence.',
                'keywords' => 'Aeritx case study, branding project, digital branding, Mark Identitiez portfolio',
            ],
            'globalocean' => [
                'title' => 'Global Ocean Logistics Case Study',
                'description' => 'Review the Global Ocean Logistics project by Mark Identitiez, created to present a sharper and more credible brand presence.',
                'keywords' => 'Global Ocean Logistics case study, logistics branding, corporate branding, Mark Identitiez',
            ],
            'ish' => [
                'title' => 'ISH International Case Study',
                'description' => 'See how Mark Identitiez approached the ISH International project with digital design, user experience thinking, and brand clarity.',
                'keywords' => 'ISH International case study, UI UX design case study, digital branding, Mark Identitiez',
            ],
            'sapphire' => [
                'title' => 'Sapphire Accessories Case Study',
                'description' => 'Explore the Sapphire Accessories case study featuring premium branding, presentation, and packaging-focused design decisions.',
                'keywords' => 'Sapphire Accessories case study, packaging design portfolio, branding case study, Mark Identitiez',
            ],
            'sukanyaindia' => [
                'title' => 'Sukanya India Case Study',
                'description' => 'Browse the Sukanya India project by Mark Identitiez, created to strengthen branding consistency and overall market presentation.',
                'keywords' => 'Sukanya India case study, branding portfolio, identity design project, Mark Identitiez',
            ],
            'visitmadhisland' => [
                'title' => 'Visit Madh Island Case Study',
                'description' => 'View the Visit Madh Island project by Mark Identitiez, designed to combine destination storytelling with a clearer visual experience.',
                'keywords' => 'Visit Madh Island case study, destination branding, campaign design, Mark Identitiez',
            ],
            'wotm' => [
                'title' => 'WOTM Case Study',
                'description' => 'Explore the WOTM project by Mark Identitiez, highlighting a creative mix of brand communication, design, and digital execution.',
                'keywords' => 'WOTM case study, branding project, communication design, Mark Identitiez portfolio',
            ],
            'wrappackncarry-desgin' => [
                'title' => 'Wrap Pack N Carry | Safewrap Case Study',
                'description' => 'See how Mark Identitiez presented the Wrap Pack N Carry Safewrap project through structured branding and design-led storytelling.',
                'keywords' => 'Wrap Pack N Carry case study, Safewrap branding, packaging project, Mark Identitiez',
            ],
            'sitemap' => [
                'title' => 'Sitemap',
                'description' => 'Browse the sitemap for Mark Identitiez to access service pages, portfolio case studies, and key website sections.',
                'keywords' => 'sitemap, Mark Identitiez sitemap',
            ],
            'success' => [
                'title' => 'Message Sent',
                'description' => 'Your message was sent successfully.',
                'robots' => 'noindex, nofollow',
            ],
            'failed' => [
                'title' => 'Message Failed',
                'description' => 'We could not process your message right now. Please try again.',
                'robots' => 'noindex, nofollow',
            ],
        ];

        $genericTitle = $pageTitle !== '' ? mi_seo_clean_text($pageTitle) : mi_seo_slug_to_title($fileKey);
        $mappedTitle = $pageMap[$fileKey]['title'] ?? '';
        $title = $mappedTitle !== '' ? $mappedTitle : $genericTitle;
        if ($pageTitle !== '' && !in_array($genericTitle, ['', 'Home', 'Service', 'About Us', 'Our Portfolio', 'Contact Us', 'Careers', 'Career', 'Message Sent', 'Message Failed'], true)) {
            $title = mi_seo_clean_text($pageTitle);
        }
        $title = $title !== '' ? mi_seo_clean_text($title) : $brandName;
        if (stripos($title, $brandName) === false) {
            $title = $title . ' | ' . $brandName;
        }

        $descriptionSource = $pageMetaDescription !== ''
            ? $pageMetaDescription
            : ($pageMap[$fileKey]['description'] ?? '');

        if ($descriptionSource === '') {
            $descriptionSource = $title . ' by ' . $brandName . '.';
        }

        $keywordsSource = $pageMetaKeywords !== ''
            ? $pageMetaKeywords
            : ($pageMap[$fileKey]['keywords'] ?? '');

        if ($keywordsSource === '') {
            $keywordsSource = strtolower(trim(str_replace('|', ',', $title))) . ', ' . strtolower($brandName);
        }

        $robots = $pageMetaRobots !== ''
            ? $pageMetaRobots
            : ($pageMap[$fileKey]['robots'] ?? 'index, follow');

        $imagePath = $pageMetaImage !== '' ? $pageMetaImage : '/assets/img/new-images/mark.png';
        if (preg_match('#^https?://#i', $imagePath)) {
            $imageUrl = $imagePath;
        } else {
            $imageUrl = $siteBaseUrl . '/' . ltrim($imagePath, '/');
        }

        return [
            'title' => $title,
            'description' => mi_seo_truncate($descriptionSource, 160),
            'keywords' => mi_seo_clean_text($keywordsSource),
            'robots' => $robots,
            'canonical' => $canonicalUrl,
            'image' => $imageUrl,
            'site_name' => $brandName,
            'url' => $canonicalUrl,
        ];
    }
}
