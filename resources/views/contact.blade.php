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
                    <div class="swiper-slide slide-center">
                        <video class="full-image to-bottom" data-mask="70" playsinline autoplay muted loop>
                            <source src="videos/work.mp4" type="video/mp4" />
                        </video>
                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">
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

        <!-- Contact Form -->
        <section id="contact" class="section-1 form contact">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 pr-md-5 align-self-center text">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <span class="pre-title m-0">Start your journey with one message</span>
                                <h2>Get in <span class="featured"><span>Touch</span></span></h2>
                                <p>Fill in the form and a dedicated advisor will be in touch within one business day. Your first conversation is always complimentary and without obligation.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0">
                                <form action="{{ route('contact.submit2') }}" method="POST" id="nexgen-simple-form" class="nexgen-simple-form">
                                     @csrf 
                                    <div class="row form-group-margin">
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <input type="text" name="firstname" class="form-control field-name" placeholder="First Name">
                                        </div>
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <input type="text" name="lastname" class="form-control field-name" placeholder="Last Name">
                                        </div>
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <input type="email" name="email" class="form-control field-email" placeholder="Email Address">
                                        </div>
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <input type="text" name="phone" class="form-control field-phone" placeholder="Phone Number">
                                        </div>
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <i class="icon-arrow-down mr-3"></i>
                                            <select name="Subject" class="form-control field-info">
                                                <option value="" selected disabled>I am enquiring about</option>
                                                <option value="Hedge Funds">Hedge Funds</option>
                                                <option value="Treasury Management">Treasury Management</option>
                                                <option value="General Enquiry">General Enquiry</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <i class="icon-arrow-down mr-3"></i>
                                            <select name="PreferredOffice" class="form-control field-info">
                                                <option value="" selected disabled>Preferred Office</option>
                                                <option value="Dubai UAE">Dubai — UAE</option>
                                                <option value="India Gurugram">India — Gurugram</option>
                                                <option value="London UK">London — UK</option>
                                                <option value="No Preference">No Preference</option>
                                            </select>
                                        </div>
                                        <div class="col-12 m-0 p-2 input-group">
                                            <textarea name="message" class="form-control field-message" placeholder="Your Message"></textarea>
                                        </div>
                                        <div class="col-12 m-0 p-2">
                                            <small style="color:#888;">By submitting this form you agree to our Privacy Policy. We will never share your information with third parties.</small>
                                        </div>
                                        <div class="col-12 col-12 m-0 p-2 input-group">
                                            <span class="form-alert"></span>
                                        </div>
                                        <div class="col-12 input-group m-0 p-2"> 
                                            <input class="wpcf7-form-control wpcf7-submit has-spinner"
                                                                            type="submit" value="SEND MESSAGE →">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Dubai Contact Info -->
                    <div class="col-12 col-md-4">
                        <div class="contacts">
                        <br>
                        <br>
                        <br>
                            <h4>Oceano Apex — Dubai</h4>
                            <p>Our Dubai office serves clients across the UAE and Gulf region. No obligation — just an honest conversation with a qualified advisor genuinely invested in your success.</p>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="tel:+971585015666" class="nav-link">
                                        <i class="fas fa-phone-alt mr-2"></i>
                                        +971 585 015 666
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="mailto:dubai@oceanoapex.com" class="nav-link">
                                        <i class="fas fa-envelope mr-2"></i>
                                        dubai@oceanoapex.com
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.oceanoapex.com" target="_blank" class="nav-link">
                                        <i class="fas fa-globe mr-2"></i>
                                        www.oceanoapex.com
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://maps.app.goo.gl/UFZnBCqppvT9EJRD8"
                                    target="_blank" class="nav-link">
                                        <i class="fas fa-map-marker-alt mr-2"></i>
                                        Meydan Grandstand, 6th Floor,<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Meydan Road, Nad Al Sheba, Dubai, UAE
                                    </a>
                                </li>
                                 
                                <li class="nav-item">
                                    <a href="https://maps.app.goo.gl/UFZnBCqppvT9EJRD8"
                                    target="_blank"
                                    class="mt-2 btn outline-button">
                                        VIEW MAP
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Map Modal -->
        <div id="map" class="p-0 modal fade" role="dialog" aria-labelledby="map" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header absolute" data-dismiss="modal">
                        <div class="icon-wrapper">
                            <i class="icon-close fas fa-times"></i>
                        </div>
                    </div>
                    <div class="modal-body p-0">
                        <iframe loading="lazy"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.178532482555!2d55.30678!3d25.17316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f69c1b6e0b3c9%3A0x1!2sMeydan+Grandstand%2C+Meydan+Rd%2C+Dubai!5e0!3m2!1sen!2sae"
                            width="600" height="450" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Office Locations -->
        <section id="about" class="oa-offices-section">
            <div class="container">

                <!-- Section Header -->
                <div class="oa-offices-header" data-aos="fade-up">
                    <span class="pre-title">Talk to an expert</span>
                    <h2>Our Global Offices</h2>
                    <p>Oceano Apex operates across three locations — serving clients in the UAE, India, and the United Kingdom. Reach out to the office closest to you or connect with us online.</p>
                </div>

                <!-- Office Cards Grid -->
                <div class="oa-offices-grid">

                    <!-- Dubai -->
                    <div class="oa-office-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="oa-office-badge">Est. 2024</div>
                        <h4 class="oa-office-title">
                            <span class="oa-office-flag">🇦🇪</span>
                            Dubai — UAE
                        </h4>
                        <ul class="oa-contact-list">
                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <a href="tel:+971585015666">+971 585 015 666</a>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <a href="mailto:dubai@oceanoapex.com">dubai@oceanoapex.com</a>
                            </li>
                            <li>
                                <a href="https://maps.app.goo.gl/UFZnBCqppvT9EJRD8" target="_blank">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>
                                        Meydan Grandstand, 6th Floor, Meydan Road, 
                                        Nad Al Sheba, Dubai, UAE
                                    </span>
                                </a>
                            </li>
                                                        
                        </ul>
                        <a href="https://maps.app.goo.gl/UFZnBCqppvT9EJRD8"
                            target="_blank"
                            class="oa-map-btn">
                                
                                <i class="fas fa-map mr-2"></i>View Map

                            </a>
                    </div>

                    <!-- India -->
                    <div class="oa-office-card oa-office-hq" data-aos="fade-up" data-aos-delay="200">
                        <div class="oa-office-badge">Headquarters · Est. 2015</div>
                        <h4 class="oa-office-title">
                            <span class="oa-office-flag">🇮🇳</span>
                            Gurugram — India
                        </h4>
                        <ul class="oa-contact-list">
                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <a href="tel:+1244453335">+124-445-3335</a>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <a href="mailto:info@oceanoapex.com">info@oceanoapex.com</a>
                            </li>
                            <li>
                                <i class="fas fa-globe"></i>
                                <a href="https://www.oceanoapex.com" target="_blank">www.oceanoapex.com</a>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Building 74, DLF-1, Sector 28, Gurugram, Haryana, India</span>
                            </li> 
                        </ul>
                    </div>

                    <!-- London --> 
                    <div class="oa-office-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="oa-office-badge">Est. 2024</div>

                        <h4 class="oa-office-title">
                            <span class="oa-office-flag">🇬🇧</span>
                            London — UK
                        </h4>

                        <ul class="oa-contact-list">

                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <a href="tel:+447438440330">
                                    +44 7438 440330
                                </a>
                            </li>

                            <li>
                                <i class="fas fa-envelope"></i>
                                <a href="mailto:london@oceanoapex.com">
                                    london@oceanoapex.com
                                </a>
                            </li>

                            <li>
                                <i class="fas fa-globe"></i>
                                <a href="https://www.oceanoapex.com" target="_blank">
                                    www.oceanoapex.com
                                </a>
                            </li>

                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>
                                    20 Wenlock Road, London, England, N1 7GU
                                </span>
                            </li>
 

                        </ul>
 
                    </div>

                </div>
            </div>
        </section>

    </div>

<style>
/* ── Base section ── */
section {
    position: relative;
    width: 100%;
    padding: 130px 0;
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
}

/* ── Offices Section ── */
.oa-offices-section {
    background-color: #000;
    padding: 80px 0;
    background-attachment: scroll; /* override fixed for this section */
}

/* Section header */
.oa-offices-header {
    text-align: center;
    margin-bottom: 56px;
}
.oa-offices-header .pre-title {
    display: block;
    font-size: 12px;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #c9a96e;
    margin-bottom: 12px;
}
.oa-offices-header h2 {
    color: #fff;
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 16px;
}
.oa-offices-header p {
    color: #9a9a9a;
    max-width: 560px;
    margin: 0 auto;
    font-size: 15px;
    line-height: 1.7;
}

/* ── Cards grid: 3 equal columns on desktop ── */
.oa-offices-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
}

/* ── Individual card ── */
.oa-office-card {
    background: #111;
    border: 1px solid #222;
    border-radius: 10px;
    padding: 32px 28px;
    position: relative;
    transition: border-color 0.3s ease;
}
.oa-office-card:hover {
    border-color: #c9a96e;
}

/* HQ card slight highlight */
.oa-office-hq {
    border-color: #2a2a1a;
    background: #111008;
}

/* Badge */
.oa-office-badge {
    font-size: 11px;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #c9a96e;
    margin-bottom: 14px;
    font-weight: 600;
}

/* Title row */
.oa-office-title {
    color: #fff;
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 24px;
    display: flex;
    align-items: center;
    gap: 10px;
}
.oa-office-flag {
    font-size: 22px;
    line-height: 1;
}

/* Contact list */
.oa-contact-list {
    list-style: none;
    padding: 0;
    margin: 0 0 24px 0;
}
.oa-contact-list li {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 10px 0;
    border-bottom: 1px solid #1e1e1e;
    font-size: 14px;
    line-height: 1.5;
}
.oa-contact-list li:last-child {
    border-bottom: none;
}
.oa-contact-list li i {
    color: #c9a96e;
    font-size: 13px;
    margin-top: 3px;
    flex-shrink: 0;
    width: 16px;
    text-align: center;
}
.oa-contact-list li a,
.oa-contact-list li span {
    color: #ccc;
    text-decoration: none;
    transition: color 0.2s;
}
.oa-contact-list li a:hover {
    color: #fff;
}

/* Map button */
.oa-map-btn {
    display: inline-flex;
    align-items: center;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #c9a96e;
    border: 1px solid #c9a96e;
    padding: 8px 18px;
    border-radius: 4px;
    text-decoration: none;
    transition: background 0.2s, color 0.2s;
}
.oa-map-btn:hover {
    background: #c9a96e;
    color: #000;
    text-decoration: none;
}

/* ── Tablet: 2 columns ── */
@media (max-width: 991px) {
    .oa-offices-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .oa-offices-header h2 {
        font-size: 28px;
    }
}

/* ── Mobile: 1 column ── */
@media (max-width: 575px) {
    .oa-offices-section {
        padding: 60px 0;
    }
    .oa-offices-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    .oa-office-card {
        padding: 24px 20px;
    }
    .oa-offices-header {
        margin-bottom: 36px;
    }
    .oa-offices-header h2 {
        font-size: 24px;
    }
    .oa-office-title {
        font-size: 18px;
    }
}
</style>
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
    ">

    {{ session('success') }}

</div>

<script>
    setTimeout(function () {
        let popup = document.getElementById('success-popup');

        if (popup) {
            popup.style.transition = "0.5s";
            popup.style.opacity = "0";

            setTimeout(() => {
                popup.remove();
            }, 500);
        }
    }, 3000);
</script>

@endif
@endsection