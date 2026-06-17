<?php

if (!function_exists('mi_sitemap_site_base_url')) {
    function mi_sitemap_site_base_url()
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

function mi_sitemap_path_label(string $path): string
{
    $labels = [
        '/' => 'Home',
        '/about-us.php' => 'About Us',
        '/service.php' => 'Services',
        '/portfolio.php' => 'Portfolio',
        '/contactus.php' => 'Contact Us',
        '/career.php' => 'Career',
        '/brand-identity.php' => 'Brand Identity',
        '/brand-architecture.php' => 'Brand Architecture',
        '/brand-naming.php' => 'Brand Naming',
        '/brand-positioning.php' => 'Brand Positioning',
        '/brand-proposition.php' => 'Brand Proposition',
        '/brand-tonality-messaging.php' => 'Brand Tonality & Messaging',
        '/communication-design.php' => 'Communication Design',
        '/logo-design-brand-management.php' => 'Logo Design & Brand Management',
        '/packaging-design.php' => 'Packaging Design',
        '/visual-brand-language.php' => 'Visual Brand Language',
        '/globalocean.php' => 'Global Ocean',
        '/jpcindia.php' => 'JPC India',
        '/ish.php' => 'ISH',
        '/sapphire.php' => 'Sapphire',
        '/sukanyaindia.php' => 'Sukanya India',
        '/aakriti-space-designs.php' => 'Aakriti Space Designs',
        '/wrappackncarry-desgin.php' => 'Wrappackncarry Design',
        '/visitmadhisland.php' => 'Visit Madhisland',
        '/fragomatrix.php' => 'Fragomatrix',
        '/aeritx.php' => 'Aeritx',
        '/wotm.php' => 'WOTM',
        '/success.php' => 'Success',
        '/failed.php' => 'Failed',
        '/send.php' => 'Send Form',
        '/contact-send.php' => 'Contact Send',
        '/career-send.php' => 'Career Send',
    ];

    if (isset($labels[$path])) {
        return $labels[$path];
    }

    return trim(str_replace(['-', '_', '.php'], [' ', ' ', ''], basename($path))) ?: $path;
}

$baseUrl = mi_sitemap_site_base_url();
$today = date('Y-m-d');

$sections = [
    'Main Pages' => [
        '/',
        '/about-us.php',
        '/service.php',
        '/portfolio.php',
        '/contactus.php',
        '/career.php',
    ],
    'Brand Services' => [
        '/brand-identity.php',
        '/brand-architecture.php',
        '/brand-naming.php',
        '/brand-positioning.php',
        '/brand-proposition.php',
        '/brand-tonality-messaging.php',
        '/communication-design.php',
        '/logo-design-brand-management.php',
        '/packaging-design.php',
        '/visual-brand-language.php',
    ],
    'Case Studies' => [
        '/globalocean.php',
        '/ish.php',
        '/sapphire.php',
        '/sukanyaindia.php',
        '/aakriti-space-designs.php',
        '/wrappackncarry-desgin.php',
        '/visitmadhisland.php',
        '/fragomatrix.php',
        '/aeritx.php',
        '/wotm.php',
    ],
    'System Pages' => [
        '/success.php',
        '/failed.php',
        '/send.php',
        '/contact-send.php',
        '/career-send.php',
    ],
];

$allPages = [];
foreach ($sections as $sectionPages) {
    foreach ($sectionPages as $page) {
        $allPages[] = $page;
    }
}

$accept = $_SERVER['HTTP_ACCEPT'] ?? '';
$wantsHtml = stripos($accept, 'text/html') !== false;

if (!$wantsHtml) {
    header('Content-Type: application/xml; charset=UTF-8');
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
    ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($allPages as $path) : ?>
    <url>
        <loc><?php echo htmlspecialchars($baseUrl . $path, ENT_XML1 | ENT_COMPAT, 'UTF-8'); ?></loc>
        <lastmod><?php echo $today; ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority><?php echo $path === '/' ? '1.0' : '0.7'; ?></priority>
    </url>
<?php endforeach; ?>
</urlset>
<?php
    exit;
}

header('Content-Type: text/html; charset=UTF-8');
$title = 'Sitemap';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitemap | Mark Identitiez</title>
    <style>
        :root {
            color-scheme: dark;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #0f0f11;
            color: #fff;
        }

        .sitemap-shell {
            max-width: 1180px;
            margin: 0 auto;
            padding: 56px 20px 80px;
        }

        .sitemap-hero {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 24px;
            padding: 28px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 24px;
            background: linear-gradient(135deg, rgba(215, 238, 112, 0.08), rgba(255, 255, 255, 0.03));
            margin-bottom: 28px;
        }

        .sitemap-hero h1 {
            margin: 0 0 10px;
            font-size: clamp(30px, 5vw, 52px);
            line-height: 1;
            letter-spacing: -0.05em;
        }

        .sitemap-hero p {
            margin: 0;
            max-width: 720px;
            color: rgba(255, 255, 255, 0.72);
            line-height: 1.6;
        }

        .sitemap-badge {
            align-self: flex-start;
            padding: 10px 14px;
            border-radius: 999px;
            background: rgba(215, 238, 112, 0.12);
            color: #d7ee70;
            font-size: 12px;
            letter-spacing: 0.14em;
            text-transform: uppercase;
        }

        .sitemap-section {
            margin-top: 24px;
            padding: 24px;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            background: rgba(255, 255, 255, 0.02);
        }

        .sitemap-section h2 {
            margin: 0 0 14px;
            font-size: 18px;
            letter-spacing: -0.02em;
        }

        .sitemap-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px 16px;
        }

        .sitemap-link {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 14px 16px;
            border-radius: 14px;
            text-decoration: none;
            color: #fff;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.06);
            transition: transform .2s ease, border-color .2s ease, background .2s ease;
        }

        .sitemap-link:hover {
            transform: translateY(-1px);
            border-color: rgba(215, 238, 112, 0.28);
            background: rgba(215, 238, 112, 0.08);
        }

        .sitemap-link span {
            font-size: 15px;
            line-height: 1.3;
        }

        .sitemap-link small {
            color: rgba(255, 255, 255, 0.55);
            white-space: nowrap;
        }

        @media (max-width: 767px) {
            .sitemap-shell {
                padding: 28px 14px 64px;
            }

            .sitemap-hero,
            .sitemap-section {
                padding: 18px;
            }

            .sitemap-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <main class="sitemap-shell">
        <section class="sitemap-hero">
            <div>
                <h1>Sitemap</h1>
                <p>All important PHP pages are listed here for quick navigation and search engine indexing.</p>
            </div>
            <div class="sitemap-badge"><?php echo count($allPages); ?> pages</div>
        </section>

        <?php foreach ($sections as $sectionTitle => $paths) : ?>
            <section class="sitemap-section">
                <h2><?php echo htmlspecialchars($sectionTitle, ENT_QUOTES, 'UTF-8'); ?></h2>
                <div class="sitemap-grid">
                    <?php foreach ($paths as $path) : ?>
                        <a class="sitemap-link" href="<?php echo htmlspecialchars($baseUrl . $path, ENT_QUOTES, 'UTF-8'); ?>">
                            <span><?php echo htmlspecialchars(mi_sitemap_path_label($path), ENT_QUOTES, 'UTF-8'); ?></span>
                            <small><?php echo htmlspecialchars($path, ENT_QUOTES, 'UTF-8'); ?></small>
                        </a>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endforeach; ?>
    </main>
</body>
</html>
