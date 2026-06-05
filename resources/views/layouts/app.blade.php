<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Oceano Apex')</title>

    @yield('meta')

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">

    <link rel="stylesheet" id="nexgen-slider-css" href="{{ asset('css/slider.min.css') }}">
    <link rel="stylesheet" id="nexgen-custom-css" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" id="nexgen-icons-css" href="{{ asset('css/icons.min.css') }}">
    <link rel="stylesheet" id="nexgen-icons-fa-css" href="{{ asset('css/icons-fa.min.css') }}">
    <link rel="stylesheet" id="nexgen-animation-css" href="{{ asset('css/animation.min.css') }}">
    <link rel="stylesheet" id="nexgen-gallery-css" href="{{ asset('css/gallery.min.css') }}">
    <link rel="stylesheet" id="nexgen-cookie-notice-css" href="{{ asset('css/cookie-notice.min.css') }}">
    <link rel="stylesheet" id="nexgen-wordpress-css" href="{{ asset('css/wordpress.css') }}">
    <link rel="stylesheet" id="nexgen-elementor-css" href="{{ asset('css/elementor.css') }}">
    <link rel="stylesheet" id="nexgen-contact-form-7-css" href="{{ asset('css/contact-form-7.css') }}">
    <link rel="stylesheet" id="nexgen-woocommerce-css" href="{{ asset('css/woocommerce.css') }}">
    <link rel="stylesheet" id="elementor-icons-css" href="{{ asset('css/elementor-icons.min.css') }}">
    <link rel="stylesheet" id="elementor-frontend-css" href="{{ asset('css/frontend.min.css') }}">
    <link rel="stylesheet" id="elementor-post-10201-css" href="{{ asset('css/post-10201.css') }}">
    <link rel="stylesheet" id="elementor-post-6480-css" href="{{ asset('css/post-6480.css') }}">

    <link rel="stylesheet" href="{{ asset('css2/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css2/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css2/custom-animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css2/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('css2/rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('css2/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css2/about-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css2/blog-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css2/fact-counter-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css2/faq-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css2/contact-page.css') }}">
    <link rel="stylesheet" href="{{ asset('css2/breadcrumb-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css2/team-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css2/partner-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css2/testimonial-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css2/services-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css2/footer-section.css') }}">

    <link href="{{ asset('css2/theme-color.css') }}" id="jssDefault" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/wc-blocks.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/solid.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="contact-form-7-css" href="{{ asset('css/styles.css') }}" type="text/css" media="all">

    <style>
        /* ── Signature / misc ── */
        .signature-name {
            font-family: 'Great Vibes', cursive;
            font-size: 40px;
            color: #2c2c2c;
            margin: 0;
            display: inline-block;
        }
        .designation {
            font-size: 18px;
            color: #7a8a99;
            margin-left: 10px;
            font-weight: 500;
        }
        .woocommerce-product-gallery { opacity: 1 !important; }

        /* ── Progress circle ── */
        .progress-block {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 4px;
        }
        .circle {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: conic-gradient(#FAF3E0 calc(var(--percent) * 1%), #959171 0%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .circle::before {
            content: "";
            position: absolute;
            width: 95px;
            height: 95px;
            background: #000000;
            border-radius: 50%;
        }
        .circle span {
            position: relative;
            font-size: 22px;
            font-weight: 600;
            color: #FAF3E0;
        }
        .progress-block h3 {
            font-size: 20px;
            color: #ffffff;
            line-height: 1.4;
            text-align: left;
        }
        .signature-box h2 {
            font-family: 'Brush Script MT', cursive;
            font-size: 36px;
            color: #ffffff;
            font-weight: 400;
        }
        .signature-box span {
            font-family: Arial, sans-serif;
            font-size: 18px;
            color: #6c7a89;
            margin-left: 10px;
        }

        /* ── Testimonial carousel ── */
        body { font-family: Arial; }
        .testimonial-style1-area { padding: 60px 0; }
        .single-testimonial-style1 {
            background: #f5f5f5;
            padding: 20px;
            border-radius: 10px;
            margin: 10px;
        }
        .bottom-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
        }
        .client-img img { width: 60px; height: 60px; }

        /* ── Hero overlay ── */
        .hero { position: relative; }
        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }
        .hero .slide-content {
            position: relative;
            z-index: 2;
        }

        /* ── Section 3 background ── only applies on home page Values & Culture */
        .elementor-page-6480 #about-3.section-3 {
            background-color: #111117;
            background-image: url('images/bg-1.jpg');
        }

        /* ================================================================
           AOS MOBILE FIX
           The AOS library sets data-aos elements to opacity:0 / translated
           on init. On mobile it never triggers because of its default
           disable:mobile setting. We override this by:
           1. Re-initialising AOS with disable:false (in JS below)
           2. Providing CSS keyframe animations as a pure-CSS fallback
              using IntersectionObserver via the .aos-animate class
        ================================================================ */

        /* Base state — hidden before animate class is added */
        [data-aos] {
            transition-property: opacity, transform;
        }

        /* ── Fade up ── */
        [data-aos="fade-up"] {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        [data-aos="fade-up"].aos-animate {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }

        /* ── Fade down ── */
        [data-aos="fade-down"] {
            opacity: 0;
            transform: translateY(-40px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        [data-aos="fade-down"].aos-animate {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }

        /* ── Zoom in ── */
        [data-aos="zoom-in"] {
            opacity: 0;
            transform: scale(0.85);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        [data-aos="zoom-in"].aos-animate {
            opacity: 1 !important;
            transform: scale(1) !important;
        }

        /* ── Zoom out up ── */
        [data-aos="zoom-out-up"] {
            opacity: 0;
            transform: scale(1.1) translateY(-20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        [data-aos="zoom-out-up"].aos-animate {
            opacity: 1 !important;
            transform: scale(1) translateY(0) !important;
        }

        /* ── Slide up ── */
        [data-aos="slide-up"] {
            opacity: 0;
            transform: translateY(60px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }
        [data-aos="slide-up"].aos-animate {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }

        /* ── Respect aos-delay attributes via inline style (handled in JS) ── */

        /* ================================================================
           MOBILE AOS — animations enabled with safety net
           Mobile animations work via the IntersectionObserver in JS below.
           If an element somehow gets stuck at opacity 0 longer than 3s,
           the safety timeout in JS reveals it.
        ================================================================ */
        @@media (max-width: 991px) {
            /* Force all data-aos elements visible on mobile.
               Animation effects via transform still work, but opacity
               never goes to 0 so content is always visible. */
            [data-aos] {
                opacity: 1 !important;
                visibility: visible !important;
                transition-duration: 0.5s !important;
            }
            [data-aos="fade-up"],
            [data-aos="fade-down"],
            [data-aos="fade-in"],
            [data-aos="fade-left"],
            [data-aos="fade-right"],
            [data-aos="zoom-in"],
            [data-aos="zoom-out"],
            [data-aos="zoom-out-up"],
            [data-aos="slide-up"],
            [data-aos="slide-down"] {
                opacity: 1 !important;
                visibility: visible !important;
            }
            [data-aos].aos-animate {
                opacity: 1 !important;
            }

            /* ── About Style 1 Area — hide decorative shapes on mobile only ── */
            .about-style1-area .shape-1,
            .about-style1-area .shape-2 {
                display: none !important;
            }
            /* Ensure image displays at full container width */
            .about-style1-area .about-style1__image .inner img {
                width: 100% !important;
                height: auto !important;
                display: block !important;
            }
            /* Content column padding on mobile */
            .about-style1-area .about-style1__content {
                padding-top: 30px !important;
            }

            /* ── WOW.js animations — force visible on mobile ──
               WOW.js never initialises on this site, so elements with
               .wow stay invisible forever. Force them visible on mobile.
            ── */
            .wow,
            .wow.fadeInRight,
            .wow.fadeInLeft,
            .wow.fadeInUp,
            .wow.fadeInDown,
            .wow.fadeIn,
            .wow.zoomIn,
            .wow.slideInUp,
            .wow.slideInDown {
                opacity: 1 !important;
                visibility: visible !important;
                transform: none !important;
                animation: none !important;
                animation-name: none !important;
            }
            /* Working process cards specifically */
            .working-process__single,
            .working-process__single * {
                opacity: 1 !important;
                visibility: visible !important;
                transform: none !important;
            }
        }


        /* ================================================================
           MOBILE LAYOUT FIXES  (≤ 991px)
        ================================================================ */
        @@media (max-width: 991px) {
            /* Layout rules handled in end-of-body style block */
            /* DO NOT disable AOS here anymore — handled by JS below */
        }

        @@media (max-width: 767px) {
            .navbar.top .left { display: none !important; }
            .navbar.top .right .nav-item:nth-child(3),
            .navbar.top .right .nav-item:nth-child(4),
            .navbar.top .right .nav-item:nth-child(5) { display: none !important; }
            .navbar.top .navbar-nav .nav-item a:not(.btn) {
                padding-right: 0;
                padding-left: 0;
            }
        }

 
/* =========================================================
   PREMIUM FOOTER
========================================================= */

.footer.main.offers {
    padding: 70px 0 40px;
}

.footer .item {
    margin-bottom: 30px;
}

.footer .card h4 {
    font-size: 20px;
    margin-bottom: 20px;
    color: #fff;
}

.footer-link-list {
    padding: 0;
    margin: 0;
    list-style: none;
}

.footer-link-list li {
    margin-bottom: 12px;
}

.footer-link-list li a {
    color: #b8b8b8;
    transition: 0.3s ease;
    text-decoration: none;
}

.footer-link-list li a:hover {
    color: #ffffff;
    padding-left: 4px;
}

/* Bottom Bar */

.oa-bottom-bar {
    background: #000;
    padding: 18px 0;
    border-top: 1px solid rgba(255,255,255,0.08);
}

.oa-footer-copy {
    color: #cfcfcf;
    font-size: 14px;
}

.oa-footer-copy a {
    color: #ffffff;
    text-decoration: none;
}

.oa-footer-links {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 14px;
}

.oa-footer-links a {
    color: #d8d8d8;
    text-decoration: none;
    font-size: 14px;
    transition: 0.3s ease;
}

.oa-footer-links a:hover {
    color: #ffffff;
}

.oa-footer-links span {
    color: rgba(255,255,255,0.3);
}

.oa-footer-social {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 14px;
}

.oa-footer-social a {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: rgba(255,255,255,0.08);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    transition: all 0.3s ease;
    text-decoration: none;
}

.oa-footer-social a:hover {
    transform: translateY(-3px);
    background: #ffffff;
    color: #000000;
}

/* Mobile */

@media (max-width: 991px) {

    .footer.main.offers {
        padding: 50px 0 20px;
    }

    .oa-footer-copy,
    .oa-footer-links,
    .oa-footer-social {
        text-align: center;
        justify-content: center;
        margin-top: 14px;
    }

    .oa-footer-social {
        margin-bottom: 5px;
    }
}
```css id="c6ahdo"
/* =========================================================
   FOOTER CONTACT FORM
========================================================= */

.footer-form-card {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 16px;
    padding: 25px;
    height: 100%;
}

.footer-form-card h4 {
    color: #ffffff;
    margin-bottom: 20px;
    font-size: 22px;
    font-weight: 600;
}

.footer-form-card .form-control {
    height: 48px;
    border-radius: 10px;
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.08);
    color: #ffffff;
    padding: 12px 15px;
    font-size: 14px;
}

.footer-form-card .form-control::placeholder {
    color: #bfbfbf;
}

.footer-form-card select.form-control {
    color: #bfbfbf;
}

.footer-form-card .btn {
    width: 100%;
    height: 48px;
    border-radius: 10px;
    margin-top: 5px;
}

.footer-form-card .alert-success {
    border-radius: 10px;
    margin-bottom: 15px;
    font-size: 14px;
}

/* Mobile */

@media (max-width: 991px) {

    .footer-form-card {
        margin-top: 30px;
    }
} 

    </style>

</head>

<body>

    {{-- HEADER --}}
    <header id="header" class="has-navbar-top has-navbar-bottom">

        <!-- Top Bar -->
        <nav class="navbar navbar-expand top">
            <div class="container header">
                <ul class="navbar-nav left">
                   {{-- <li class="nav-item">
                        <a href="#" target="_self" class="nav-link m-0">
                            <i class="fas fa-clock text-after"></i>Open Hours: Sun – Thu, 9:00 – 18:00
                        </a>
                    </li> --}}
                </ul>
                <div class="ml-auto"></div>
                <ul class="navbar-nav right">
                    <li class="nav-item">
                        <a href="tel:+971585015666" target="_self" class="nav-link m-0">
                            <i class="fas fa-phone-alt text-after"></i>+971 585 015 666
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="mailto:dubai@oceanoapex.com" target="_self" class="nav-link m-0">
                            <i class="fas fa-envelope text-after"></i>dubai@oceanoapex.com
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.facebook.com/oceanoapex/" target="_self" class="nav-link m-0"><i class="fab fa-facebook-f m-0"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.instagram.com/oceanoapex" target="_self" class="nav-link m-0"><i class="fab fa-twitter m-0"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.linkedin.com/company/oceano-apex" target="_self" class="nav-link m-0"><i class="fab fa-linkedin-in m-0"></i></a>
                    </li>
                    <li class="nav-item dropdown language-dropdown">
                        <select onchange="changeLanguage(this.value)" class="form-control lang-select">
                            <option value="" translate="no">Language</option>
                            <option value="en">English</option>
                            <option value="ar">Arabic</option>
                        </select>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Google Translate -->
        <div id="google_translate_element" style="display:none;"></div>

        <!-- Navbar -->
        <nav class="navbar navbar-expand navbar-fixed sub" style="position: absolute;">
            <div class="container header">
                <a href="{{ route('home') }}" class="navbar-brand">
                    <img width="286" height="100" src="{{ asset('images/Oceano-Apex-Logo.png') }}" alt="Oceano Apex" class="d-none d-sm-block desktop-logo">
                    <img width="286" height="100" src="{{ asset('images/Oceano-Apex-Logo.png') }}" alt="Oceano Apex" class="d-block d-sm-none responsive-logo">
                </a>
                <div class="ml-auto"></div>
                <ul id="menu-nexgen-menu-1" class="navbar-nav items right">
                    <li class="menu-item nav-item"><a href="{{ route('home') }}" class="nav-link">HOME</a></li>
                    <li class="menu-item nav-item"><a href="{{ route('about') }}" class="nav-link">ABOUT</a></li>
                    <li class="menu-item nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="servicesDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SERVICES
                        </a>

                        <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <a class="dropdown-item" href="{{ asset('service-hedge-funds') }}" style="color: black;">
                                Hedge Funds
                            </a>

                            <a class="dropdown-item" href="{{ asset('service-treasury-funds') }}" style="color: black;">
                                Treasury Management
                            </a>
                        </div>
                    </li>
                    <li class="menu-item nav-item"><a href="{{ asset('blog') }}" class="nav-link">BLOG</a></li>
                </ul>
                <ul class="navbar-nav toggle">
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                            <i class="icon-menu m-0"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav action d-md-block d-sm-block d-none">
                    <li class="nav-item">
                        <a href="{{ route('contact') }}" target="_blank" class="btn primary-button">CONTACT</a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>

    {{-- PAGE CONTENT --}}
    @yield('content')

    {{-- FOOTER --}}
    <footer data-wpr-lazyrender="1" id="footer" class="footer">

        <section class="footer main offers">
            <div class="container">
                <div class="row items">

                    <div class="col-12 col-md-6 col-lg-3 item">
                        <div class="content-block brand">
                            <a href="{{ route('home') }}" class="navbar-brand">
                                <img width="286" height="100" src="{{ asset('images/Oceano-Apex-Logo.png') }}" alt="Oceano Apex" class="d-none d-sm-block desktop-logo">
                                <img width="286" height="100" src="{{ asset('images/Oceano-Apex-Logo.png') }}" alt="Oceano Apex" class="d-block d-sm-none responsive-logo">
                            </a>
                        </div>
                        <div class="content-block paragraph">
                            <p>Oceano Apex is a boutique wealth management firm offering personalised financial solutions tailored to each client's unique goals — guided by integrity, innovation, and a focus on long-term growth.</p>
                        </div>
                        <ul class="navbar-nav action content-block">
                            <li class="nav-item">
                                <a href="{{ route('contact') }}" class="btn secondary-button">GET IN TOUCH</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3 item">
                        <div class="card">
                            <h4>About</h4>
                            <ul class="footer-link-list">
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3 item">
                        <div class="card">
                            <h4>Services</h4>
                            <ul class="footer-link-list">
                                <li><a href="{{ asset('service-hedge-funds') }}">Hedge Funds</a></li>
                                <li><a href="{{ asset('service-treasury-funds') }}">Treasury Management</a></li>
                            </ul>
                        </div>
                    </div>
 
<div class="col-12 col-md-6 col-lg-3 item">

    <div class="footer-form-card">

        <h4>Quick Contact</h4>
 
        <form action="{{ route('contact.submit') }}"
              method="POST"
              id="nexgen-simple-form"
              class="nexgen-simple-form">

            @csrf

            <div class="row form-group-margin">

                <div class="col-12 m-0 p-2 input-group">
                    <input type="text"
                           name="name"
                           class="form-control field-name"
                           placeholder="Name"
                           required>
                </div>

                <div class="col-12 m-0 p-2 input-group">
                    <input type="email"
                           name="email"
                           class="form-control field-email"
                           placeholder="Email"
                           required>
                </div>

                <div class="col-12 m-0 p-2 input-group">
                    <input type="text"
                           name="phone"
                           class="form-control field-phone"
                           placeholder="Phone"
                           required>
                </div>

                <div class="col-12 m-0 p-2 input-group">
                    <select name="info"
                            class="form-control field-info"
                            required>

                        <option value="" selected disabled>
                            More Info
                        </option>

                        <option>Hedge Funds</option>
                        <option>Treasury Management</option>
                        <option>General Enquiry</option>

                    </select>
                </div>

                <div class="col-12 m-0 p-2">
                    <button type="submit"
                            class="btn primary-button btn-block">
                        GET IN TOUCH
                    </button>
                </div>

            </div>

        </form>

    </div>

</div> 


                </div>
            </div>
        </section>
 
<section class="bottom-bar oa-bottom-bar">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left -->
            <div class="col-lg-4 col-md-12">
                <div class="oa-footer-copy">
                    © 2026 - All rights reserved.
                    <strong>Oceano Apex</strong>
                    is maintained by
                    <a href="https://eoan.co.in/" target="_blank">Eoan</a>.
                </div>
            </div>

            <!-- Center -->
            <div class="col-lg-4 col-md-12">
                <div class="oa-footer-links">
                    <a href="#">Terms of Use</a>
                    <span>|</span>
                    <a href="#">Privacy Policy</a>
                </div>
            </div>

            <!-- Right -->
            <div class="col-lg-4 col-md-12">
                <div class="oa-footer-social">
                    <a href="https://www.facebook.com/oceanoapex/" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="https://www.instagram.com/oceanoapex" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="https://www.linkedin.com/company/oceano-apex" target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section> 


    </footer>

    <!-- ── JS ── -->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-migrate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.blockUI.min.js') }}" defer></script>
    <script src="{{ asset('js/add-to-cart.min.js') }}" defer></script>
    <script src="{{ asset('js/js.cookie.min.js') }}" defer></script>
    <script src="{{ asset('js/woocommerce.min.js') }}" defer></script>
    <script src="{{ asset('js/wp-emoji-release.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/ponyfill.min.js') }}"></script>
    <script src="{{ asset('js/slider.min.js') }}"></script>
    <script src="{{ asset('js/animation.min.js') }}"></script>
    <script src="{{ asset('js/progress-radial.min.js') }}"></script>
    <script src="{{ asset('js/bricklayer.min.js') }}"></script>
    <script src="{{ asset('js/gallery.min.js') }}"></script>
    <script src="{{ asset('js/shuffle.min.js') }}"></script>
    <script src="{{ asset('js/particles.min.js') }}"></script>
    <script src="{{ asset('js/cookie-notice.min.js') }}"></script>
    <script async src="{{ asset('js/lazyload.min.js') }}"></script>
    <script src="{{ asset('js/frontend.min.js') }}"></script>
    <script src="{{ asset('js/cart-fragments.min.js') }}" defer></script>
    <script src="{{ asset('js/webpack.runtime.min.js') }}"></script>
    <script src="{{ asset('js/frontend-modules.min.js') }}"></script>
    <script src="{{ asset('js/core.min.js') }}"></script>
    <script src="{{ asset('js/index_1.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/elementor.js') }}"></script>
    <script async fetchpriority="low" src="{{ asset('js/comment-reply.min.js') }}"></script>
    <script src="{{ asset('js/sourcebuster.min.js') }}"></script>
    <script src="{{ asset('js/order-attribution.min.js') }}"></script>
    <script src="{{ asset('js/hooks.min.js') }}"></script>
    <script src="{{ asset('js/i18n.min.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>

    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        /* ── Owl Carousel init (home page testimonials) ── */
        $(document).ready(function () {
            if ($('.testimonial-carousel').length) {
                $('.testimonial-carousel').owlCarousel({
                    loop: true,
                    margin: 30,
                    autoHeight: true,
                    nav: false,
                    dots: true,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 600,
                    responsive: {
                        0:   { items: 1 },
                        768: { items: 1 },
                        992: { items: 2 }
                    }
                });
            }
        });

        /* ── Swiper mid-slider (testimonials carousel) ──
           Force reinit with correct mobile settings and fast autoplay.
        ── */
        function initMidSliders() {
            if (typeof Swiper === 'undefined') {
                /* Swiper not loaded yet — retry in 300ms */
                setTimeout(initMidSliders, 300);
                return;
            }
            document.querySelectorAll('.swiper-container.mid-slider').forEach(function (el) {
                /* Destroy existing instance if any */
                if (el.swiper) { el.swiper.destroy(true, true); }

                var perView = parseInt(el.getAttribute('data-perview') || '3', 10);

                new Swiper(el, {
                    loop: true,
                    centeredSlides: true,       /* keeps active slide centred on mobile */
                    slidesPerView: 1,
                    spaceBetween: 20,
                    speed: 500,                 /* slide transition speed ms */
                    autoplay: {
                        delay: 1500,            /* 1.5 seconds as requested */
                        disableOnInteraction: false,
                        pauseOnMouseEnter: true
                    },
                    pagination: {
                        el: el.querySelector('.swiper-pagination, .carousel-pagination'),
                        clickable: true
                    },
                    navigation: {
                        nextEl: el.querySelector('.swiper-button-next, .carousel-nav-next'),
                        prevEl: el.querySelector('.swiper-button-prev, .carousel-nav-prev')
                    },
                    breakpoints: {
                        768: { slidesPerView: 2, spaceBetween: 24, centeredSlides: false },
                        992: { slidesPerView: perView, spaceBetween: 30, centeredSlides: false }
                    }
                });
            });
        }

        /* Run after DOM ready AND after full page load to catch late-rendered sliders */
        document.addEventListener('DOMContentLoaded', initMidSliders);
        window.addEventListener('load', initMidSliders);

        /* ── Progress circles ── */
        document.querySelectorAll('.circle').forEach(function (circle) {
            circle.style.setProperty('--percent', circle.getAttribute('data-percent'));
        });

        /* ── Card pulse colour ── */
        jQuery(function ($) {
            $('.card-pulse-icon').each(function () {
                var card = $(this);
                card.hover(function () {
                    var color = card.find('.pulse-icon').data('color');
                    $(':root').css('--pulse-color', color);
                });
            });
        });
    </script>

    <style>
        /* ================================================================
           VALUES & CULTURE SECTION (#about-3)
           Problem: background image + dark #21333e text = unreadable on mobile
           Fix: dark overlay behind content, all text forced white
        ================================================================ */
        #about-3 {
            position: relative;
        }
        /* Dark overlay so background image never competes with text */
        #about-3::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.72);
            z-index: 0;
            pointer-events: none;
        }
        /* Lift container above overlay */
        #about-3 .container {
            position: relative;
            z-index: 1;
        }
        /* Force all text white inside this section only */
        #about-3 h2,
        #about-3 h4,
        #about-3 p,
        #about-3 span.pre-title,
        #about-3 .pre-title,
        #about-3 .items h4,
        #about-3 .items p,
        #about-3 .intro p,
        #about-3 i {
            color: #fff !important;
        }

        /* ── Swiper carousel mobile: centred single slide ── */
        .section-4 .swiper-container.mid-slider {
            overflow: hidden !important;
            padding-bottom: 40px !important;
        }
        /* On mobile show one full-width card centred */
        @@media (max-width: 767px) {
            .section-4 .swiper-container.mid-slider .swiper-slide {
                display: flex !important;
                justify-content: center !important;
                align-items: stretch !important;
                width: 100% !important;
            }
            .section-4 .swiper-container.mid-slider .swiper-slide .card,
            .section-4 .swiper-container.mid-slider .swiper-slide .row.card {
                width: 100% !important;
                max-width: 100% !important;
                margin: 0 auto !important;
            }
            /* Pagination dots centred */
            .section-4 .swiper-pagination,
            .section-4 .carousel-pagination {
                text-align: center !important;
                position: relative !important;
                margin-top: 16px !important;
            }
        }
        .section-4 .swiper-slide.item {
            height: auto !important;
        }
        .section-4 .card {
            height: 100% !important;
            min-height: auto !important;
        }
    </style>

    <!-- ================================================================
         AOS MOBILE FIX — global, covers every page
         Problem: AOS disables itself on mobile by default (disable:'mobile')
         Fix:
           1. Re-init AOS with disable:false so it works on all screen sizes
           2. Apply aos-delay values as actual CSS transition-delays
           3. Fallback IntersectionObserver for any elements AOS misses
    ================================================================ -->
    <script>
        (function () {

            /* ── 1. Re-initialise AOS with mobile enabled ── */
            function initAOS() {
                if (typeof AOS !== 'undefined') {
                    AOS.init({
                        disable: false,          // enable on ALL devices including mobile
                        startEvent: 'DOMContentLoaded',
                        initClassName: 'aos-init',
                        animatedClassName: 'aos-animate',
                        useClassNames: false,
                        disableMutationObserver: false,
                        debounceDelay: 50,
                        throttleDelay: 99,
                        offset: 80,              // px from bottom of viewport to trigger
                        delay: 0,
                        duration: 600,
                        easing: 'ease',
                        once: false,
                        mirror: false,
                        anchorPlacement: 'top-bottom'
                    });
                }
            }

            /* ── 2. Apply data-aos-delay as real CSS transition-delay ── */
            function applyDelays() {
                document.querySelectorAll('[data-aos-delay]').forEach(function (el) {
                    var delay = el.getAttribute('data-aos-delay');
                    if (delay) {
                        el.style.transitionDelay = (parseInt(delay, 10) / 1000) + 's';
                    }
                });
            }

            /* ── 3. IntersectionObserver fallback ──
               Catches elements that AOS missed (e.g. already in viewport on load,
               or on very short pages on mobile).
            ── */
            function setupFallbackObserver() {
                if (!('IntersectionObserver' in window)) {
                    /* Very old browser — just show everything */
                    document.querySelectorAll('[data-aos]').forEach(function (el) {
                        el.classList.add('aos-animate');
                    });
                    return;
                }

                /* Larger trigger zone on mobile so animations fire reliably */
                var isMobile = window.innerWidth <= 991;
                var threshold = isMobile ? 0.05 : 0.1;
                var rootMargin = isMobile ? '0px 0px 100px 0px' : '0px 0px -60px 0px';

                var observer = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('aos-animate');
                        }
                    });
                }, {
                    threshold: threshold,
                    rootMargin: rootMargin
                });

                document.querySelectorAll('[data-aos]').forEach(function (el) {
                    observer.observe(el);
                });

                /* ── SAFETY NET ──
                   After 3 seconds, force-show any element still stuck.
                   This guarantees content is never permanently invisible
                   even if scroll detection fails for any reason.
                ── */
                setTimeout(function () {
                    document.querySelectorAll('[data-aos]:not(.aos-animate)').forEach(function (el) {
                        var rect = el.getBoundingClientRect();
                        /* If element is in or near viewport, animate it in */
                        if (rect.top < window.innerHeight + 200) {
                            el.classList.add('aos-animate');
                        }
                    });
                }, 3000);

                /* On scroll, also do a manual check as ultimate fallback */
                var scrollCheckTimer = null;
                window.addEventListener('scroll', function () {
                    if (scrollCheckTimer) return;
                    scrollCheckTimer = setTimeout(function () {
                        scrollCheckTimer = null;
                        document.querySelectorAll('[data-aos]:not(.aos-animate)').forEach(function (el) {
                            var rect = el.getBoundingClientRect();
                            if (rect.top < window.innerHeight && rect.bottom > 0) {
                                el.classList.add('aos-animate');
                            }
                        });
                    }, 100);
                }, { passive: true });
            }

            /* ── Run everything on DOM ready ── */
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', function () {
                    initAOS();
                    applyDelays();
                    setupFallbackObserver();
                });
            } else {
                initAOS();
                applyDelays();
                setupFallbackObserver();
            }

            /* ── Also re-run after full page load (images etc.) ── */
            window.addEventListener('load', function () {
                initAOS();
                if (typeof AOS !== 'undefined') { AOS.refresh(); }
            });

        })();
    </script>

    <!-- Modals -->
    <div id="search" class="p-0 modal modal-search fade" role="dialog">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content full">
                <div class="modal-header" data-dismiss="modal">
                    <i class="icon-close fas fa-arrow-left"></i>
                </div>
                <div class="modal-body">
                    <form class="row">
                        <div class="col-12 p-0 align-self-center">
                            <div class="row"><div class="col-12 p-0"><h2>What are you looking for?</h2></div></div>
                            <div class="row"><div class="col-12 p-0 input-group"><input type="search" placeholder="Enter Keywords"></div></div>
                            <div class="row"><div class="col-12 p-0 input-group align-self-center"><button class="btn primary-button">SEARCH</button></div></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="menu" class="p-0 modal modal-menu fade" role="dialog">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content full">
                <div class="modal-header" data-dismiss="modal">
                    <i class="icon-close fas fa-arrow-left"></i>
                </div>
                <div class="menu modal-body">
                    <ul class="navbar-nav items">
                        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">HOME</a></li>
                        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">ABOUT</a></li>
                        <li class="nav-item"><a href="{{ asset('service-hedge-funds') }}" class="nav-link">HEDGE FUNDS</a></li>
                        <li class="nav-item"><a href="{{ asset('service-treasury-funds') }}" class="nav-link">TREASURY MANAGEMENT</a></li>
                        <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="cart" class="p-0 modal modal-cart fade" role="dialog">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content full">
                <div class="modal-header" data-dismiss="modal">
                    <i class="icon-close fas fa-arrow-left"></i>
                </div>
                <div class="modal-body">
                    <div class="widget woocommerce widget_shopping_cart">
                        <div class="widget_shopping_cart_content"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================
         MOBILE HERO FIX — loaded LAST so it overrides all theme CSS
         Must stay here, after all external stylesheets
    ============================================================ -->
    <style>
    @@media (max-width: 991px) {
        html, body { overflow-x: hidden !important; width: 100% !important; max-width: 100% !important; }

        /* Slider container */
        #slider { background: #000; width: 100% !important; max-width: 100% !important; overflow: hidden !important; }
        #slider .swiper-container,
        #slider .swiper-wrapper,
        #slider .swiper-slide { display: contents !important; width: 100% !important; max-width: 100% !important; overflow: hidden !important; }

        /* Hero image — show page-specific image */
        #slider .full-image { display: block !important; position: absolute !important; top: 0; left: 0; width: 100% !important; height: 100% !important; object-fit: cover !important; z-index: 0 !important; }

        /* Dark overlay */
        #slider .swiper-slide::after { content: ""; position: absolute; inset: 0; background: rgba(0,0,0,0.6); z-index: 1; }
        #slider .parallax-y-bg { display: none !important; }

        /* Slide content */
        #slider .slide-content { display: block !important; position: relative !important; z-index: 2 !important; width: 100% !important; max-width: 100% !important; padding-top: 100px !important; padding-bottom: 60px !important; min-height: 280px; overflow: hidden !important; }

        /* Kill inline width on slide-width divs (50%, 55%, 40%) */
        #slider .slide-width { width: 100% !important; max-width: 100% !important; padding: 0 20px !important; }

        /* ── THE KEY FIX: h1 font size ── */
        #slider h1,
        #slider h1.title,
        #slider h1.heading,
        .hero h1,
        .hero h1.title,
        .full-slider h1,
        .swiper-slide h1,
        .swiper-slide h1.title,
        .slide-content h1 { font-size: 22px !important; line-height: 1.35 !important; margin-bottom: 12px !important; word-break: normal !important; overflow-wrap: break-word !important; white-space: normal !important; }

        /* Description text */
        #slider p.description,
        #slider p.paragraph { font-size: 13px !important; line-height: 1.6 !important; margin-bottom: 18px !important; }

        /* Buttons */
        #slider .d-sm-inline-flex { display: flex !important; flex-direction: column !important; gap: 10px !important; align-items: flex-start !important; }
        #slider .btn { margin-left: 0 !important; margin-top: 0 !important; font-size: 12px !important; padding: 9px 18px !important; }

        /* Alignment */
        #slider .inner { justify-content: flex-start !important; text-align: left !important; }
        #slider .slide-content .col-12 { width: 100% !important; max-width: 100% !important; flex: 0 0 100% !important; padding-left: 15px !important; padding-right: 15px !important; }

        /* Breadcrumb / inner hero pages */
        .slider-h-auto.no-slider .inner { padding-top: 0px; }
        .effect-static-text { padding: 80px 20px 40px; color: #fff; text-align: left; }
    }
    </style>

    <!-- ============================================================
         MOBILE HERO JS FIX - simplified, no observer
    ============================================================ -->
    <script>
    (function() {
        function isMobile() { return window.innerWidth <= 991; }

        function applyMobileFix() {
            if (!isMobile()) return;

            /* Hero h1 */
            document.querySelectorAll(
                '.hero h1, .full-slider h1, #slider h1, .swiper-slide h1, .slide-content h1, h1.title, h1.heading'
            ).forEach(function(el) {
                el.style.setProperty('font-size', '22px', 'important');
                el.style.setProperty('line-height', '1.35', 'important');
                el.style.setProperty('white-space', 'normal', 'important');
                el.style.setProperty('word-break', 'break-word', 'important');
                el.style.setProperty('margin-bottom', '12px', 'important');
            });

            /* Section h2 headings */
            document.querySelectorAll(
                '.sec-title h2, .about-style1-area h2, .working-process-area h2, .testimonial-style1-area h2, section h2.heading'
            ).forEach(function(el) {
                el.style.setProperty('font-size', '24px', 'important');
                el.style.setProperty('line-height', '1.3', 'important');
                el.style.setProperty('word-break', 'break-word', 'important');
            });

            /* Slogan */
            document.querySelectorAll('.slogan-style3__content h3').forEach(function(el) {
                el.style.setProperty('font-size', '18px', 'important');
                el.style.setProperty('line-height', '1.5', 'important');
            });

            /* Process cards */
            document.querySelectorAll('.working-process__single h3').forEach(function(el) {
                el.style.setProperty('font-size', '18px', 'important');
            });

            /* Slide width — only set width, don't touch the swiper internal styles */
            document.querySelectorAll('.slide-width').forEach(function(el) {
                el.style.setProperty('width', '100%', 'important');
                el.style.setProperty('max-width', '100%', 'important');
            });

            /* Description text */
            document.querySelectorAll('#slider p.description, .hero p.description').forEach(function(el) {
                el.style.setProperty('font-size', '13px', 'important');
                el.style.setProperty('line-height', '1.6', 'important');
            });
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', applyMobileFix);
        } else {
            applyMobileFix();
        }
        window.addEventListener('load', applyMobileFix);

        /* Only a few re-runs, no observer */
        setTimeout(applyMobileFix, 500);
        setTimeout(applyMobileFix, 1500);
        setTimeout(applyMobileFix, 3000);

        window.addEventListener('resize', applyMobileFix);
    })();
    </script>

    <!-- ============================================================
         CUSTOM SCROLL ANIMATION for .about-style1-area on mobile
         This section uses no AOS/WOW classes, so add our own.
    ============================================================ -->
    <style>
        @@media (max-width: 991px) {
            .about-style1-area .about-style1__image,
            .about-style1-area .about-style1__content {
                opacity: 0;
                transform: translateY(40px);
                transition: opacity 0.7s ease-out, transform 0.7s ease-out;
            }
            .about-style1-area .about-style1__image.oa-in-view {
                opacity: 1;
                transform: translateY(0);
            }
            .about-style1-area .about-style1__content.oa-in-view {
                opacity: 1;
                transform: translateY(0);
                transition-delay: 0.2s;
            }
        }
    </style>
    <script>
        (function() {
            if (window.innerWidth > 991) return;
            if (!('IntersectionObserver' in window)) {
                /* Old browsers — just show */
                document.querySelectorAll('.about-style1__image, .about-style1__content').forEach(function(el) {
                    el.classList.add('oa-in-view');
                });
                return;
            }
            var obs = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('oa-in-view');
                        obs.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15, rootMargin: '0px 0px -50px 0px' });

            function init() {
                document.querySelectorAll('.about-style1__image, .about-style1__content').forEach(function(el) {
                    obs.observe(el);
                });
                /* Safety net — show after 4s if scroll never triggers */
                setTimeout(function() {
                    document.querySelectorAll('.about-style1__image, .about-style1__content').forEach(function(el) {
                        var rect = el.getBoundingClientRect();
                        if (rect.top < window.innerHeight + 300) {
                            el.classList.add('oa-in-view');
                        }
                    });
                }, 4000);
            }

            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', init);
            } else {
                init();
            }
        })();
    </script>
    <style>
        body { top: 0 !important; position: static !important; min-height: auto !important; }
        html { margin-top: 0 !important; }
        .goog-te-banner-frame.skiptranslate, iframe.skiptranslate { display: none !important; }
        .goog-tooltip, .goog-tooltip:hover { display: none !important; }
        .goog-text-highlight { background: transparent !important; box-shadow: none !important; }
        #google_translate_element { display: none !important; }
        .VIpgJd-ZVi9od-ORHb-OEVmcd, .VIpgJd-ZVi9od-aZ2wEe-wOHMyf,
        .VIpgJd-yAWNEb-L7lbkb, .goog-te-balloon-frame,
        div[style*="translate.googleapis.com"] { display: none !important; visibility: hidden !important; }
    </style>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,ar,fr,de,hi',
                autoDisplay: false
            }, 'google_translate_element');
        }
        function changeLanguage(lang) {
            var interval = setInterval(function () {
                var select = document.querySelector(".goog-te-combo");
                if (select) {
                    select.value = lang;
                    select.dispatchEvent(new Event("change"));
                    document.body.style.top = "0px";
                    clearInterval(interval);
                }
            }, 300);
        }
        setInterval(function () {
            document.body.style.top = "0px";
            var frame = document.querySelector(".goog-te-banner-frame");
            if (frame) { frame.remove(); }
        }, 500);
    </script>
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <!-- Restore correct parallax background image after theme JS override -->
    <script>
    (function() {
        var saved = [];
        document.querySelectorAll('#slider .parallax-y-bg').forEach(function(el) {
            var bg = el.style.backgroundImage;
            if (bg && bg.indexOf('url') !== -1) {
                saved.push({ el: el, bg: bg });
            }
        });
        function restore() {
            saved.forEach(function(item) {
                item.el.style.backgroundImage = item.bg;
                item.el.style.backgroundSize = 'cover';
                item.el.style.backgroundPosition = 'center center';
                item.el.style.backgroundAttachment = 'scroll';
            });
        }
        window.addEventListener('load', restore);
        setTimeout(restore, 300);
        setTimeout(restore, 800);
    })();
    </script>


@if(session('success'))

<div id="success-popup"
    style="
        position: fixed;
        top: 30px;
        right: 30px;
        z-index: 999999;
        background: #28a745;
        color: white;
        padding: 15px 25px;
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        font-weight: 600;
        font-size: 16px;
        min-width: 300px;
        transition: opacity 0.5s ease;
    ">

    {{ session('success') }}

</div>

<script>
    setTimeout(function () {

        let popup = document.getElementById('success-popup');

        if (popup) {

            popup.style.opacity = "0";

            setTimeout(function () {
                popup.remove();
            }, 500);

        }

    }, 5000);

</script>

@endif
</body>
</html>