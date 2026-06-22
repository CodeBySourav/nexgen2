@extends('layouts.app')

@section('title', 'Blog')

@section('content')

    <body
        class="wp-singular page-template page-template-templates page-template-full-width page-template-templatesfull-width-php page page-id-6480 wp-theme-nexgen theme-nexgen woocommerce-js woocommerce-active elementor-default elementor-kit-10201 elementor-page elementor-page-6480">

        <div data-elementor-type="wp-page" data-elementor-id="6480" class="elementor elementor-6480">

            <!-- Hero -->
            <section id="slider" class="hero p-0 odd featured">
                <div class="swiper-container no-slider animation slider-h-50 slider-h-auto">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide-center">
                            <img src="images/blog-head.jpg" alt="Oceano Apex — Who We Are" class="full-image" data-mask="80">
                            <div class="slide-content row text-center">
                                <div class="col-12 mx-auto inner">
                                    <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                        </ol>
                                    </nav>
                                    <h1 class="mb-0 title effect-static-text">Blog</h1>
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
                        

                        <div class="row g-4">
                            @foreach ($posts as $post)
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <article class="card h-100 border-0 shadow-sm hover-shadow transition">
                                        {{-- Optional: Add an image if your model has one --}}
                                        @php
                                            preg_match(
                                            '/<img.+?src=[\'"]([^\'"]+)[\'"].*@endphp/i',
                                                    $post->content,
                                                    $matches,
                                                );
                                                $image = $matches[1] ?? asset('images/default-blog.jpg');
                                                ?>

                                        <img src="{{ $image }}" class="card-img-top" alt="{{ $post->title }}">

                                        <div class="card-body p-4">
                                            <div class="mb-2">
                                                <span class="badge bg-primary-soft   px-2 py-1">Article</span>
                                                <small
                                                    class="text-muted ms-2">{{ $post->created_at->format('M d, Y') }}</small>
                                            </div>

                                            <h3 class="h5 card-title mb-3">
                                                <a href="{{ route('blog.show', $post->slug) }}"
                                                    class="text-dark text-decoration-none stretched-link">
                                                    {{ $post->title }}
                                                </a>
                                            </h3>

                                            <p class="card-text text-muted small">
                                                {{ Str::limit(strip_tags($post->content), 120) }}
                                            </p>
                                        </div>

                                        <div class="card-footer bg-transparent border-0 px-4 pb-4">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-bold small" style="color:#ddc59e;">Read More →</div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        </div>

                        {{-- Pagination Links --}}
                        <div class="mt-5 d-flex justify-content-center">
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
        </div>
        </section>
        <style>
            .bg-primary-soft {
                background-color: rgb(229 217 180 / 15%);
            }
            .hover-shadow:hover {
                transform: translateY(-5px);
                box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1) !important;
            }

            .transition {
                transition: all 0.3s ease-in-out;
            }
 
        </style>
        <style>
            .navbar-nav .nav-link {
                display: flex;
                align-items: flex-start;
                gap: 15px;
                padding: 12px 0;
            }

            .icon-wrapper {
                min-width: 50px;
                width: 50px;
                height: 50px;
                border-radius: 50%;
                background: #2b241d;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-shrink: 0;
            }

            .list-icon {
                color: #d8c3a5;
                font-size: 18px;
            }

            .list-text {
                line-height: 1.7;
                color: #d8c3a5;
            }

            .navbar-nav .nav-item {
                list-style: none;
            }
        </style>

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
                            width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

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
                background-attachment: scroll;
                /* override fixed for this section */
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

    @endsection
