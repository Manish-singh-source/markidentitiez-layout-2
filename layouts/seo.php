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
            return mb_strlen($text) > $limit ? rtrim(mb_substr($text, 0, $limit - 1)) . '…' : $text;
        }

        return strlen($text) > $limit ? rtrim(substr($text, 0, $limit - 1)) . '…' : $text;
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
                'title' => 'Brand Strategy, Identity & Packaging Design',
                'description' => 'Mark Identitiez builds clear, premium brands through strategy, identity, packaging, naming, messaging, and communication design.',
                'keywords' => 'branding agency, brand identity, packaging design, brand strategy, Mark Identitiez',
            ],
            'about-us' => [
                'title' => 'About Us',
                'description' => 'Learn how Mark Identitiez helps businesses build clearer, more premium, and more consistent brands.',
                'keywords' => 'about Mark Identitiez, branding agency, brand strategy',
            ],
            'service' => [
                'title' => 'Branding Services',
                'description' => 'Explore branding services including identity, packaging, naming, positioning, messaging, and visual brand language.',
                'keywords' => 'branding services, brand identity, packaging design, brand naming',
            ],
            'portfolio' => [
                'title' => 'Portfolio',
                'description' => 'Browse selected branding and design case studies created by Mark Identitiez.',
                'keywords' => 'branding portfolio, case studies, design portfolio',
            ],
            'contactus' => [
                'title' => 'Contact Us',
                'description' => 'Get in touch with Mark Identitiez to discuss branding, identity, packaging, or communication design projects.',
                'keywords' => 'contact Mark Identitiez, branding inquiry, design agency contact',
            ],
            'career' => [
                'title' => 'Careers',
                'description' => 'Explore career opportunities at Mark Identitiez and join a team focused on thoughtful branding and design.',
                'keywords' => 'careers, jobs, Mark Identitiez',
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
        if ($pageTitle !== '' && !in_array($genericTitle, ['', 'Home', 'Service', 'About Us', 'Our Portfolio', 'Contact Us', 'Careers', 'Message Sent', 'Message Failed'], true)) {
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
