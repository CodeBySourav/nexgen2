@extends('layouts.app')

@section('title', 'Contact') 

@section('content')


<body
    class="wp-singular page-template page-template-templates page-template-full-width page-template-templatesfull-width-php page page-id-6480 wp-theme-nexgen theme-nexgen woocommerce-js woocommerce-active elementor-default elementor-kit-10201 elementor-page elementor-page-6480">
     
    <div data-elementor-type="wp-page" data-elementor-id="6480" class="elementor elementor-6480">
        <!-- Hero -->
        <section id="slider" class="hero p-0 odd featured">
            <div class="swiper-container no-slider animation slider-h-50 slider-h-auto">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">

                        <!-- Media -->
                        <video class="full-image to-bottom" data-mask="70" playsinline autoplay muted loop>
                            <source src="videos/work.mp4" type="video/mp4" />
                        </video> 

                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">

                                <!-- Content -->
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                    </ol>
                                </nav>
                                <h1 class="mb-0 title effect-static-text">Contact Us</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="section-1 form contact">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 pr-md-5 align-self-center text">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <span class="pre-title m-0">Send a message</span>
                                <h2>Get in <span class="featured"><span>Touch</span></span></h2>
                                <p>We will respond to your message as soon as possible.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0">
                                <form action="php/form.php" id="nexgen-simple-form" class="nexgen-simple-form">
                                    <input type="hidden" name="section" value="nexgen_form">

                                    <input type="hidden" name="reCAPTCHA">
                                    <!-- Remove this field if you want to disable recaptcha -->

                                    <div class="row form-group-margin">
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <input type="text" name="name" class="form-control field-name" placeholder="Name">
                                        </div>
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <input type="email" name="email" class="form-control field-email" placeholder="Email">
                                        </div>
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <input type="text" name="phone" class="form-control field-phone" placeholder="Phone">
                                        </div>
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <i class="icon-arrow-down mr-3"></i>
                                            <select name="info" class="form-control field-info">
                                                <option value="" selected disabled>More Info</option>
                                                <option>Audit & Assurance</option>
                                                <option>Treasury Funds</option>
                                                <option>Analytics and M&A</option>
                                                <option>Middle Marketing</option>
                                                <option>Legal Consulting</option>
                                                <option>Regulatory Risk</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                        <div class="col-12 m-0 p-2 input-group">
                                            <textarea name="message" class="form-control field-message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-12 col-12 m-0 p-2 input-group">
                                            <span class="form-alert"></span>
                                        </div>
                                        <div class="col-12 input-group m-0 p-2">
                                            <a class="btn primary-button">SEND</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="contacts">
                            <h4>Example Inc.</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p>Curabitur convallis, diam a egestas iaculis, neque lorem interdum felis, in viverra lacus tortor in leo.</p>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-phone-alt mr-2"></i>
                                        +1 (305) 1234-5678
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-envelope mr-2"></i>
                                        hello@example.com
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-map-marker-alt mr-2"></i>
                                        Main Avenue, 987
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="mt-2 btn outline-button" data-toggle="modal" data-target="#map">VIEW MAP</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About -->
        <section id="about" class="section-2 highlights image-right" style="background-color: #000;">
            <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 pr-md-5 align-self-top text">
                    <div data-aos="fade-up"  class="row intro">
                        <div class="col-12 p-0">
                            <span class="pre-title m-0">Talk to an expert</span>
                            <h2>Our<br>Business<br>Units</h2>
                            <p>Curabitur convallis, diam a egestas iaculis, neque lorem interdum felis, in viverra lacus tortor in leo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 pr-md-5 align-self-top text">
                    <div class="row items">                             
                        <div data-aos="fade-up" class="col-12 p-0 pr-md-4 item">
                            <div class="contacts">
                                <h4>Branch</h4>
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-phone-alt mr-2"></i>
                                            +1 (305) 1234-5678
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-envelope mr-2"></i>
                                            hello@example.com
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-map-marker-alt mr-2"></i>
                                            Main Avenue, 987
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="mt-2 btn outline-button" data-toggle="modal" data-target="#map">VIEW MAP</a>
                                    </li>
                                </ul>
                            </div>
                        </div>     
                    </div>
                </div>
                <div class="col-12 col-md-4 pr-md-5 align-self-top text">
                    <div class="row items">                             
                        <div data-aos="fade-up" class="col-12 p-0 pr-md-4 item">
                            <div class="contacts">
                                <h4>Headquarters</h4>
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-phone-alt mr-2"></i>
                                            +1 (305) 1234-5678
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-envelope mr-2"></i>
                                            hello@example.com
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-map-marker-alt mr-2"></i>
                                            Main Avenue, 987
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="mt-2 btn outline-button" data-toggle="modal" data-target="#map">VIEW MAP</a>
                                    </li>
                                </ul>
                            </div>
                        </div>     
                    </div>
                </div>
            </div>
            </div>
        </section>

 @endsection
    