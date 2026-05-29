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
    <link rel="stylesheet" id="contact-form-7-css" href="{{ asset('css/styles.css') }}" type="text/css"
        media="all">


    {{-- css internal --}}

    <style>
        .signature-name {
            font-family: 'Great Vibes', cursive;
            /* signature style font */
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

        

        

        

        
        
        

        .woocommerce-product-gallery {
            opacity: 1 !important;
        }

        

        

        

        
        

        

        .lg-outer .lg-has-vimeo .lg-video-play {
            --wpr-bg-ac5a1111-be1e-473f-a8b8-f4b8f89c0d9a: url('https://nexgen.codings.dev/wp-content/themes/nexgen/assets/images/favicon.ico');
        }

        .lg-outer .lg-has-vimeo:hover .lg-video-play {
            --wpr-bg-2b1935f9-7899-44cd-bb99-92397318449d: url('https://nexgen.codings.dev/wp-content/themes/nexgen/assets/images/favicon.ico');
        }

        .lg-outer .lg-has-html5 .lg-video-play {
            --wpr-bg-4979c50d-8ee1-4d52-bf42-736844bee139: url('https://nexgen.codings.dev/wp-content/themes/nexgen/assets/images/favicon.ico');
        }

        .lg-outer .lg-has-youtube .lg-video-play {
            --wpr-bg-04c3017e-2733-496d-947f-6c1d071295fe: url('https://nexgen.codings.dev/wp-content/themes/nexgen/assets/images/favicon.ico');
        }

        .lg-outer .lg-has-youtube:hover .lg-video-play {
            --wpr-bg-2bfc4610-671e-4c67-bac1-c469416166b1: url('https://nexgen.codings.dev/wp-content/themes/nexgen/assets/images/favicon.ico');
        }

        .lg-outer .lg-item {
            --wpr-bg-ac59fbfd-7e3d-4bdd-bc1d-18e6e3fd06e7: url('https://nexgen.codings.dev/wp-content/themes/nexgen/assets/images/loading.gif');
        }

        .elementor-6480 .elementor-element.elementor-element-1f66739:not(.elementor-motion-effects-element-type-background),
        .elementor-6480 .elementor-element.elementor-element-1f66739>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            --wpr-bg-fc7df5e7-060c-480e-9c0f-cf0f70cb9210: url('https://nexgen.codings.dev/wp-content/uploads/2021/03/bg-wide.jpg');
        }

        .rll-youtube-player .play {
            --wpr-bg-98acf99b-b2df-4ab0-b1a8-b576963da27c: url('https://nexgen.codings.dev/wp-content/plugins/wp-rocket/assets/img/youtube.png');
        }



        /* Progress Block */
        .progress-block {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 4px;
        }

        /* Circle Progress */
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

        /* Inner white circle */
        .circle::before {
            content: "";
            position: absolute;
            width: 95px;
            height: 95px;
            background: #000000;
            border-radius: 50%;
        }

        /* Percentage text */
        .circle span {
            position: relative;
            font-size: 22px;
            font-weight: 600;
            color: #FAF3E0;
        }

        /* Text beside */
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

        body {
            font-family: Arial;
        }

        .testimonial-style1-area {
            padding: 60px 0;
        }

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

        .client-img img {
            width: 60px;
            height: 60px; 
        }
        .signature-name {
            font-family: 'Great Vibes', cursive; /* signature style font */
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

        
        .hero {
                    position: relative;
                }

                .hero::before {
                    content: "";
                    position: absolute;
                    inset: 0;
                    background: rgba(0, 0, 0, 0.7); /* black overlay */
                    z-index: 1;
                }

                .hero .slide-content {
                    position: relative;
                    z-index: 2;
                }
    </style>


    {{-- css internal  --}}
    {{-- Boss internal css  --}}
        <style>
                 
                section.section-3  { background-color: #111117;  background-image: images/bg-1.jpg; }
                </style>
                <!-- Hero --> 

                <style>
                @media (max-width: 991px){
        
                    /* ── CORE FIX: prevent horizontal overflow and white gap ── */
                    html, body {
                        overflow-x: hidden !important;
                        width: 100% !important;
                        max-width: 100% !important;
                    }
        
                    /* Force slider to full width, hide overflow */
                    #slider {
                        background: #000;
                        width: 100% !important;
                        max-width: 100% !important;
                        overflow: hidden !important;
                    }
        
                    /* KEY FIX: swiper-slide was sitting in flex row with parallax div
                    This makes it block so nothing sits beside the content */
                    #slider .swiper-container,
                    #slider .swiper-wrapper,
                    #slider .swiper-slide {
                        display: block !important;
                        width: 100% !important;
                        max-width: 100% !important;
                        overflow: hidden !important;
                    }
        
                    /* Hide the parallax background image div completely —
                    this is the element causing the white column on the right */
                    #slider .parallax-y-bg {
                        display: none !important;
                        width: 0 !important;
                        height: 0 !important;
                        position: absolute !important;
                        visibility: hidden !important;
                    }
        
                    /* Slide content: block layout, full width */
                    #slider .slide-content {
                        display: block !important;
                        width: 100% !important;
                        max-width: 100% !important;
                        padding-top: 80px;
                        padding-bottom: 40px;
                        min-height: auto;
                        background-color: #000;
                        overflow: hidden !important;
                    }
        
                    /* All columns inside slide take full width */
                    #slider .slide-content .col-12 {
                        width: 100% !important;
                        max-width: 100% !important;
                        flex: 0 0 100% !important;
                        padding-left: 15px !important;
                        padding-right: 15px !important;
                    }
        
                    /* Content .right div — full width, black background */
                    #slider .right {
                        width: 100% !important;
                        max-width: 100% !important;
                        background: #000;
                        padding: 0 !important;
                    }
        
                    /* Background image on title area only */
                    .effect-static-text {
                        background-image: url('images/bg-9.jpeg');
                        background-size: cover;
                        background-position: center top;
                        background-repeat: no-repeat;
                        padding: 25px 20px 40px;
                        border-radius: 0;
                        color: #fff;
                        display: flex;
                        flex-direction: column;
                        align-items: flex-end;
                        text-align: right;
                    }
        
                    /* Heading */
                    #slider h1.title {
                        font-size: 52px;
                        line-height: 1.1;
                        color: #fff;
                        margin-bottom: 30px;
                    }
        
                    /* Inputs */
                    #slider .form-control {
                        background: #161616 !important;
                        border: 1px solid #222 !important;
                        color: #fff !important;
                    }
        
                    #slider .form-control::placeholder {
                        color: #8f8f8f;
                    }
        
                    .slider-h-auto.no-slider .inner {
                        padding-top: 0px;
                    }

                    [data-aos]{
                        opacity: 1 !important;
                        transform: none !important;
                        transition: none !important;
                    }
                }
        
            @media (max-width: 767px) {
        
                /* Hide left topbar on mobile */
                .navbar.top .left {
                    display: none !important;
                }
        
                /* Hide social icons in topbar */
                .navbar.top .right .nav-item:nth-child(3),
                .navbar.top .right .nav-item:nth-child(4),
                .navbar.top .right .nav-item:nth-child(5) {
                    display: none !important;
                }
            
            }
         </style>
    {{-- Boss internal css  --}}


</head>

<body>

    {{-- HEADER --}}
    <header id="header" class="has-navbar-top has-navbar-bottom">


        <!-- Top Bar -->
        <nav class="navbar navbar-expand top">
            <div class="container header">


                <!-- Top Bar [left] -->

                <ul class="navbar-nav left">


                    <li class="nav-item">

                        <a href="#" target="_self" class="nav-link m-0"><i
                                class="fas fa-clock text-after"></i>Open Hours: Mon - Sat - 9:00 - 18:00</a>
                    </li>


                </ul>


                <!-- Nav holder -->
                <div class="ml-auto"></div>

                <!-- Top Bar [right] -->

                <ul class="navbar-nav right">


                    <li class="nav-item">

                        <a href="#" target="_self" class="nav-link m-0"><i
                                class="fas fa-phone-alt text-after"></i>+971 585015666</a>
                    </li>


                    <li class="nav-item">

                        <a href="#" target="_self" class="nav-link m-0"><i
                                class="fas fa-envelope text-after"></i>oceanoapexdubai@icloud.com</a>
                    </li>


                    <li class="nav-item">

                        <a href="#" target="_self" class="nav-link m-0"><i
                                class="fab fa-facebook-f m-0"></i></a>
                    </li>


                    <li class="nav-item">

                        <a href="#" target="_self" class="nav-link m-0"><i class="fab fa-twitter m-0"></i></a>
                    </li>


                    <li class="nav-item">

                        <a href="#" target="_self" class="nav-link m-0"><i
                                class="fab fa-linkedin-in m-0"></i></a>
                    </li>
                    <li class="nav-item dropdown language-dropdown">
                        <select onchange="changeLanguage(this.value)" class="form-control lang-select">
                            <option value="en">English</option>
                            <option value="ar">Arabic</option>
                        </select>
                    </li>
                </ul>


            </div>
        </nav>



        <!-- Navbar -->
        <nav class="navbar navbar-expand navbar-fixed sub" style="position: absolute;">
            <div class="container header">


                <!-- Navbar [left] -->

                <a href="{{ route('home') }}" class="navbar-brand">
                    <img width="286" height="100" src="{{ asset('images/Oceano-Apex-Logo.png') }}"
                        alt="Oceano Apex" class="d-none d-sm-block desktop-logo"><img width="286" height="100"
                        src="{{ asset('images/Oceano-Apex-Logo.png') }}" alt="Oceano Apex"
                        class="d-block d-sm-none responsive-logo"> </a>


                <!-- Nav holder -->
                <div class="ml-auto"></div>

                <!-- Navbar [right] -->


                <ul id="menu-nexgen-menu-1" class="navbar-nav items right">


                    <li id="menu-item-10573"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10573 nav-item"><a
                            href="{{ route('home') }}" class="nav-link">HOME</a></li>

                    <li id="menu-item-10573"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10573 nav-item"><a
                            href="{{ route('about') }}" class="nav-link">ABOUT</a></li>
                    <li id="menu-item-10573"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10573 nav-item"><a
                            href="#" class="nav-link">SERVICES</a></li>
                    <li id="menu-item-10573"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10573 nav-item"><a
                            href="#" class="nav-link">BLOG</a></li>
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
<!-- Google Translate -->
 
  {{-- FOOTER --}}
    <footer data-wpr-lazyrender="1" id="footer" class="footer">


        <!-- Main -->
        <section class="footer main offers">
            <div class="container">
                <div class="row items">


                    <div class="col-12 col-md-6 col-lg-3 item">


                        <div class="content-block brand">
                            <a href="" class="navbar-brand">
                                <img width="286" height="100" src="{{ asset('images/Oceano-Apex-Logo.png') }}"
                                    alt="Oceano Apex" class="d-none d-sm-block desktop-logo"><img width="286"
                                    height="100" src="{{ asset('images/Oceano-Apex-Logo.png') }}"
                                    alt="Oceano Apex" class="d-block d-sm-none responsive-logo"> </a>
                        </div>


                        <div class="content-block paragraph">
                            <p>Oceano Apex is a trusted<br>
                                financia Advisory firm and<br>
                                growing wealth management <br>
                                company providing professional<br>
                                investment management<br>
                                services</p>
                        </div>




                        <ul class="navbar-nav action content-block">
                            <li class="nav-item">

                                <a href="#" target="_blank" class="btn secondary-button">GET IN TOUCH</a>
                            </li>
                        </ul>

                    </div>


                    <div class="col-12 col-md-6 col-lg-3 item">
                        <div class="card">
                            <h4>About</h4>
                            <ul id="menu-nexgen-footer-1" class="footer-link-list">
                                <li id="menu-item-10684"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10684"><a
                                        href="{{ route('about') }}">About us</a></li>
                                <li id="menu-item-10684"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10684"><a
                                        href="{{ route('contact') }}">Contact </a></li>
                                <li id="menu-item-10685"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10685"><a
                                        href="#">Blog </a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-3 item">
                        <div class="card">
                            <h4>Services</h4>
                            <ul id="menu-nexgen-footer-2" class="footer-link-list">
                                <li id="menu-item-14051"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14051"><a
                                        href="{{ route('services-hedgefunds') }}">Hedge Funds</a></li>
                                <li id="menu-item-14052"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14052"><a
                                        href="{{ route('services-treasuryfunds') }}">Treasury Funds </a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-3 item">
                        <div class="card">
                            <h4>Support</h4>
                            <ul id="menu-nexgen-footer-3" class="footer-link-list">
                                <li id="menu-item-14056"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14056"><a
                                        href="#">Terms of Use</a></li>
                                <li id="menu-item-14057"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14057"><a
                                        href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </section>



        <!-- Bottom Bar -->
        <section class="bottom-bar" style="background-color: #000;">
            <div class="container">
                <div class="row">



                    <div class="col-12 col-md-6 p-0 text-left">

                        <!-- Bottom Bar [left] -->

                        <ul class="navbar-nav text-left text-lg-left">


                            <li class="nav-item d-block d-md-inline-flex">

                                <a href="https://eoan.co.in/" target="_blank" class="nav-link">© 2026 - All rights
                                    reserved. Oceano Apex is maintained by Eoan.</a>
                            </li>


                        </ul>


                    </div>
                    <div class="col-12 col-md-6 p-0 text-left text-lg-right">

                        <!-- Bottom Bar [right] -->

                        <ul class="navbar-nav text-left text-lg-right">


                            <li class="nav-item">

                                <a href="#" target="_self" class="nav-link"><i
                                        class="fab fa-facebook-f m-0"></i></a>
                            </li>


                            <li class="nav-item">

                                <a href="#" target="_self" class="nav-link"><i
                                        class="fab fa-twitter m-0"></i></a>
                            </li>


                            <li class="nav-item">

                                <a href="#" target="_self" class="nav-link"><i
                                        class="fab fa-linkedin-in m-0"></i></a>
                            </li>


                        </ul>


                    </div>
                </div>
            </div>
        </section>


    </footer>



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

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
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
                    0: {
                        items: 1
                    },
                    768: {
                        items: 1
                    },
                    992: {
                        items: 2
                    }
                }
            });
        });
    </script>
    <script>
        document.querySelectorAll('.circle').forEach(circle => {
            let percent = circle.getAttribute('data-percent');
            circle.style.setProperty('--percent', percent);
        });
    </script>
    <script>
        jQuery(function($) {

            $('.card-pulse-icon').each(function() {

                let card = $(this);

                card.hover(function() {

                    let color = card.find('.pulse-icon').data('color');

                    $(':root').css('--pulse-color', color);
                })
            })
        })
    </script>
    <script>
        $(document).ready(function(){
            $('.testimonial-carousel').owlCarousel({
                loop: true,
                margin: 30,
                autoHeight: true,
                nav: false,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000,
                smartSpeed: 600,
                responsive:{
                    0:{ items:1 },
                    768:{ items:1 },
                    992:{ items:2 }
                }
            });
        });
    </script>


    <!-- Search Modal -->
<div id="search" class="p-0 modal modal-search fade" role="dialog">
    <div class="modal-dialog modal-dialog-slideout" role="document">
        <div class="modal-content full">
            <div class="modal-header" data-dismiss="modal">
                <i class="icon-close fas fa-arrow-left"></i>
            </div>

            <div class="modal-body">
                <form class="row">
                    <div class="col-12 p-0 align-self-center">

                        <div class="row">
                            <div class="col-12 p-0">
                                <h2>What are you looking for?</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 p-0 input-group">
                                <input type="search" placeholder="Enter Keywords">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 p-0 input-group align-self-center">
                                <button class="btn primary-button">SEARCH</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Mobile Menu Modal -->
<div id="menu" class="p-0 modal modal-menu fade" role="dialog">
    <div class="modal-dialog modal-dialog-slideout" role="document">
        <div class="modal-content full">

            <div class="modal-header" data-dismiss="modal">
                <i class="icon-close fas fa-arrow-left"></i>
            </div>

            <div class="menu modal-body">

                <ul class="navbar-nav items">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">HOME</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('about') }}" class="nav-link">ABOUT</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('services-hedgefunds') }}" class="nav-link">
                            HEDGE FUNDS
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('services-treasuryfunds') }}" class="nav-link">
                            TREASURY FUNDS
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="nav-link">CONTACT</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>

<!-- Cart Modal -->
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


<!-- Google Translate -->
<!-- Google Translate -->

<div id="google_translate_element" style="display:none"></div>

<style>
    body {
        top: 0 !important;
        position: static !important;
        min-height: auto !important;
    }

    html {
        margin-top: 0 !important;
    }

    /* Hide top translate banner */
    .goog-te-banner-frame.skiptranslate {
        display: none !important;
    }

    iframe.skiptranslate {
        display: none !important;
    }

    /* Hide translate tooltip */
    .goog-tooltip,
    .goog-tooltip:hover {
        display: none !important;
    }

    /* Remove text highlight */
    .goog-text-highlight {
        background: transparent !important;
        box-shadow: none !important;
    }

    /* Hide Google translate widget */
    #google_translate_element {
        display: none !important;
    }

    /* Hide translation popup / feedback */
    .VIpgJd-ZVi9od-ORHb-OEVmcd,
    .VIpgJd-ZVi9od-aZ2wEe-wOHMyf,
    .VIpgJd-yAWNEb-L7lbkb,
    .goog-te-balloon-frame,
    div[style*="translate.googleapis.com"] {
        display: none !important;
        visibility: hidden !important;
    }
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

        let frame = document.querySelector(".goog-te-banner-frame");

        if (frame) {
            frame.remove();
        }

    }, 500);
</script>

<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>

</html>
