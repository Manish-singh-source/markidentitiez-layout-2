<?php
require_once __DIR__ . '/seo.php';

$seoMeta = mi_resolve_seo_meta(
    $title ?? '',
    $pageMetaDescription ?? '',
    $pageMetaKeywords ?? '',
    $pageMetaRobots ?? '',
    $pageMetaImage ?? ''
);
?>
<!doctype html>
<html class="no-js agntix-dark" lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo htmlspecialchars($seoMeta['title'], ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($seoMeta['description'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($seoMeta['keywords'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="robots" content="<?php echo htmlspecialchars($seoMeta['robots'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="<?php echo htmlspecialchars($seoMeta['canonical'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="author" content="Mark Identitiez">
    <meta name="theme-color" content="#0b0b0d">
    <meta property="og:locale" content="en_IN">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($seoMeta['site_name'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($seoMeta['title'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($seoMeta['description'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($seoMeta['url'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($seoMeta['image'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image:alt" content="<?php echo htmlspecialchars($seoMeta['site_name'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($seoMeta['title'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($seoMeta['description'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($seoMeta['image'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:image:alt" content="<?php echo htmlspecialchars($seoMeta['site_name'], ENT_QUOTES, 'UTF-8'); ?>">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/new-images/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/atropos.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <?php if (!empty($pageStyles)) echo $pageStyles; ?>
    <!-- CSS here -->

</head>

<?php
$resolvedBodyClass = trim($bodyClass ?? 'tp-magic-cursor');
$resolvedBodyDataBgColor = $bodyDataBgColor ?? '#000';
?>

<body class="<?php echo htmlspecialchars($resolvedBodyClass, ENT_QUOTES, 'UTF-8'); ?>" data-bg-color="<?php echo htmlspecialchars($resolvedBodyDataBgColor, ENT_QUOTES, 'UTF-8'); ?>">

    <!-- Begin magic cursor -->
    <div id="magic-cursor" class="cursor-white-bg">
        <div id="ball"></div>
    </div>
    <!-- End magic cursor -->

    <!-- preloader -->

    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->
    <!-- preloader end  -->


    <!-- back to top start -->
    <!-- back to top start -->
    <div class="back-to-top-wrapper">
        <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>
    <!-- back to top end -->
    <!-- back to top end -->

    <!-- offcanvas start -->

    <div class="tp-offcanvas-2-area p-relative offcanvas-2-black-bg">
        <div class="tp-offcanvas-2-bg is-left left-box"></div>
        <div class="tp-offcanvas-2-bg is-right right-box d-none d-md-block"></div>
        <div class="tp-offcanvas-2-wrapper">
            <div class="tp-offcanvas-2-left left-box">
                <div class="tp-offcanvas-2-left-wrap d-flex justify-content-between align-items-center">
                    <div class="tp-offcanvas-2-logo">
                        <a href="index.php">
                            <img class="logo-1" data-width="140" src="assets/img/new-images/mark.png" alt="">
                            <img class="logo-2" data-width="140" src="assets/img/logo/logo-black.png" alt="">
                        </a>
                    </div>
                    <div class="tp-offcanvas-2-close d-md-none text-end">
                        <button class="tp-offcanvas-2-close-btn">
                            <span class="text">
                                <span>close</span>
                            </span>
                            <span class="d-inline-block">
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="32.621" height="1.00918"
                                            transform="matrix(0.704882 0.709325 -0.704882 0.709325 1.0061 0)"
                                            fill="currentcolor"></rect>
                                        <rect width="32.621" height="1.00918"
                                            transform="matrix(0.704882 -0.709325 0.704882 0.709325 0 23.2842)"
                                            fill="currentcolor"></rect>
                                    </svg>
                                </span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="tp-offcanvas-menu counter-row">
                    <nav></nav>
                </div>
            </div>
            <div class="tp-offcanvas-2-right right-box d-none d-md-block p-relative">
                <div class="tp-offcanvas-2-close text-end">
                    <button class="tp-offcanvas-2-close-btn">
                        <span class="text"><span>close</span></span>
                        <span class="d-inline-block">
                            <span>
                                <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.80859 9.80762L28.1934 28.1924" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M9.80859 28.1924L28.1934 9.80761" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </span>
                    </button>
                </div>
                <div class="tp-offcanvas-2-right-info-box mt-160">
                    <h4 class="tp-offcanvas-2-right-info-title">Get In Touch</h4>
                    <div class="tp-offcanvas-2-right-info-item">
                        <label class="mb-10">Phone</label>
                        <a class="tp-line-white" href="tel:(+91) 808-080-3374">(+91) 808-080-3374</a>
                    </div>
                    <div class="tp-offcanvas-2-right-info-item">
                        <label class="mb-10">Email</label>
                        <a class="tp-line-white" href="mailto:info@markidentitiez.com">info@markidentitiez.com</a>
                    </div>
                    <div class="tp-offcanvas-2-right-info-item">
                        <label class="mb-10">Address</label>
                        <a class="tp-line-white"
                            href="https://www.google.com.bd/maps/@23.7806365,90.4193257,12z?entry=ttu&amp;g_ep=EgoyMDI1MDQwOS4wIKXMDSoASAFQAw%3D%3D"
                            target="_blank">
                            Office No. 501, 5th Floor, Ghanshyam
                            Laljipada, Enclave, Link Road, Kandivali (W),
                            Mumbai - 400067. Maharashtra - India
                        </a>
                    </div>
                    <div class="tp-offcanvas-2-right-info-item">
                        <label class="mb-15">Follow us</label>
                        <div class="tp-offcanvas-2-right-social">
                            <a href="https://www.facebook.com/Markidentitiez/" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/markidentitiez/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="https://twitter.com/markidentitiez" target="_blank" rel="noopener noreferrer" aria-label="Twitter">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/markidentitiez" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offcanvas end -->

    <header>

        <!-- header area start -->

        <!-- header area start -->
        <div class="tp-header-14-area header-transparent">
            <div class="container container-1800">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-header-14-wrapper d-flex align-items-center justify-content-between">
                            <div class="tp-header-14-left">
                                <div class="tp-header-logo">
                                    <a href="index.php"><img data-width="120" src="assets/img/new-images/mark.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="tp-header-14-right d-flex align-items-center">
                                <div class="tp-header-14-info d-none d-md-block">
                                    <a class="tp-line-white"
                                        href="mailto:info@markidentitiez.com">info@markidentitiez.com</a>
                                </div>
                                <div class="tp-header-14-bar-wrap ml-20">
                                    <button class="tp-header-8-bar tp-offcanvas-open-btn">
                                        <span>Menu</span>
                                        <span>
                                            <svg width="24" height="8" viewBox="0 0 24 8" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0H14V1.5H0V0Z" fill="currentcolor" />
                                                <path d="M0 6H24V7.5H0V6Z" fill="currentcolor" />
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="tp-mobile-menu-active d-none">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about-us.php">About Us</a></li>
                <li class="p-static is-active">
                    <a href="service.php">Services</a>
                    <ul class="tp-submenu submenu">
                        <li><a href="logo-design-brand-management.php">Logo Design & Brand Management</a></li>
                        <li><a href="brand-identity.php">Brand Identity</a></li>
                        <li><a href="packaging-design.php">Packaging Design</a></li>
                        <li><a href="brand-naming.php">Brand Naming</a></li>
                        <li><a href="brand-proposition.php">Brand Proposition</a></li>
                        <li><a href="brand-architecture.php">Brand Architecture</a></li>
                        <li><a href="brand-positioning.php">Brand Positioning</a></li>
                        <li><a href="visual-brand-language.php">Visual Brand Language</a></li>
                        <!-- <li><a href="#">Communication Design</a></li> -->
                        <li><a href="brand-tonality-messaging.php">Brand Tonality & Messaging</a></li>
                    </ul>
                </li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="career.php">Career</a></li>
                <li><a href="contactus.php">Contact</a></li>
                <!-- <li class="has-dropdown p-static is-active">
                    <a href="#">Home</a>
                    <ul class="tp-submenu submenu">
                        <li><a href="index-digital-marketing-dark.html">Digital Marketing</a></li>
                        <li><a href="index-design-agency-dark.html">Design Agency</a></li>
                        <li><a href="index-unique-ai-image-dark.html">Unique AI Images</a></li>
                        <li><a href="index-corporate-agency-dark.html">Corporate Agency</a></li>
                        <li><a href="index-mobile-application-dark.html">Mobile Application</a></li>
                        <li><a href="index-it-solution-dark.html">IT Solutions</a></li>
                        <li><a href="index-cryptocurrency-dark.html">Cryptocurrency</a></li>
                    </ul>
                </li>
                <li class="has-dropdown p-static is-active">
                    <a href="#">Pages</a>
                    <ul class="tp-submenu submenu">
                        <li><a href="about-me-dark.html">About Me</a></li>
                        <li><a href="about-us-dark.html">About Us</a></li>
                        <li><a href="service-1-dark.html">Services</a></li>
                        <li><a href="service-details-2-dark.html">Service Details</a></li>
                        <li><a href="career-dark.html">Carrer</a></li>
                        <li><a href="career-details-dark.html">Carrer Details</a></li>
                        <li><a href="team-dark.html">Team</a></li>
                        <li><a href="team-details-dark.html">Team Details</a></li>
                        <li><a href="pricing-dark.html">Pricing</a></li>
                        <li><a href="faq-dark.html">Faq's</a></li>
                    </ul>
                </li>
                <li class="has-dropdown p-static is-active">
                    <a href="#">Projects</a>
                    <ul class="tp-submenu submenu">
                        <li><a href="portfolio-webgl-showcase.html">Webgl Showcase</a></li>
                        <li><a href="portfolio-coverflow-slider.html">Coverflow Slider</a></li>
                        <li><a href="portfolio-creative-thumb-slider.html">Creative Thumb Slider</a></li>
                        <li><a href="portfolio-creative-skew-slider.html">Creative Skew Slider</a></li>
                        <li><a href="portfolio-creative-text-slider.html">Creative Text Slider</a></li>
                        <li><a href="portfolio-parallax-slider.html">Parallax Slider</a></li>
                        <li><a href="portfolio-perspective-slider.html">Paspective Showcase</a></li>
                    </ul>
                </li>
                <li class="has-dropdown is-active">
                    <a href="#">Blog</a>
                    <ul class="tp-submenu submenu">
                        <li><a href="blog-grid.html">Blog Grid</a></li>
                        <li><a href="blog-standard.html">Blog Classic</a></li>
                        <li><a href="blog-list.html">Blog Listing</a></li>
                        <li><a href="blog-masonry.html">Masonry</a></li>
                        <li><a href="blog-details.html">Blog Single Post</a></li>
                    </ul>
                </li>
                <li class="has-dropdown is-active">
                    <a href="#">Shop</a>
                    <ul class="tp-submenu submenu">
                        <li><a href="index-shop-modern-dark.html">Shop Modern</a></li>
                        <li><a href="shop-details-dark.html">Shop Details</a></li>
                        <li><a href="my-account.html">My Account</a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <li><a href="login.html">LogIn</a></li>
                    </ul>
                </li>
                <li class="has-dropdown is-active">
                    <a href="#">Contact</a>
                    <ul class="tp-submenu submenu">
                        <li><a href="contact-me-dark.html">Contact Me</a></li>
                        <li><a href="contact-us-dark.html">Contact Us</a></li>
                        <li><a href="contact-dark.html">Get In Touch</a></li>
                    </ul>
                </li> -->
            </ul>
        </nav>
        <!-- header area end -->

        <!-- header area end -->

    </header>

    <div id="smooth-wrapper">
        <div id="smooth-content">
