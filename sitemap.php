<?php

header('Content-Type: application/xml; charset=UTF-8');

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

$baseUrl = mi_sitemap_site_base_url();
$today = date('Y-m-d');

$pages = [
    '/',
    '/about-us.php',
    '/service.php',
    '/portfolio.php',
    '/contactus.php',
    '/career.php',
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
    '/globalocean.php',
    '/jpcindia.php',
    '/ish.php',
    '/sapphire.php',
    '/sukanyaindia.php',
    '/aakriti-space-designs.php',
    '/wrappackncarry-desgin.php',
    '/visitmadhisland.php',
    '/fragomatrix.php',
];

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($pages as $path) : ?>
    <url>
        <loc><?php echo htmlspecialchars($baseUrl . $path, ENT_XML1 | ENT_COMPAT, 'UTF-8'); ?></loc>
        <lastmod><?php echo $today; ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority><?php echo $path === '/' ? '1.0' : '0.7'; ?></priority>
    </url>
<?php endforeach; ?>
</urlset>
