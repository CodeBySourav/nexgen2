@extends('layouts.app')

@section('title', $post->seo_title ?? $post->title)

@section('meta')
    {{-- SEO Meta Tags --}}
    <meta name="title" content="{{ $post->seo_title ?? $post->title }}">
    <meta name="description" content="{{ $post->seo_description }}">

    {{-- Open Graph --}}
    <meta property="og:title" content="{{ $post->seo_title ?? $post->title }}">
    <meta property="og:description" content="{{ $post->seo_description }}">
    <meta property="og:type" content="article">
    <meta property="og:image" content="{{ $post->image ? asset('storage/' . $post->image) : asset('images/blog-head.jpg') }}">

    {{-- Schema Markup --}}
    @isset($post->schema_markup)
        <script type="application/ld+json">
            {!! $post->schema_markup !!}
        </script>
    @endisset
@endsection

@section('content')
    {{-- Hero Section --}}
    {{-- Custom inline padding-top added below to push content safely past your fixed navigation bar --}}
    <section id="slider" class="hero featured odd" style=" ">
        <div class="swiper-container no-slider animation slider-h-auto">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide-center">
                    {{-- Post Image Mask Background --}}
                    <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('images/blog-head.jpg') }}" 
                         alt="{{ $post->title }}" 
                         class="full-image" 
                         data-mask="80">
                    
                    {{-- Increased container padding & vertical centering alignment --}}
                    <div class="slide-content row text-center py-5">
                        <div class="col-12 mx-auto inner position-relative" style="z-index: 2;">
                            
                            {{-- Breadcrumb (Added mb-3 to separate it from the title) --}}
                            <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb" class="mb-3">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
                                </ol>
                            </nav>

                            {{-- Title with optimized responsive sizing classes --}}
                            <h1 class="mb-0 display-4 fw-bold title effect-static-text text-white px-3">
                                {{ $post->title }}
                            </h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Post Content Section --}}
    <section class="py-5" style="background-color: #212529;">
        <div class="container text-white">
            <div class="mt-4 content-body">
                {!! $post->content !!}
            </div>
        </div>
    </section>

    <style>
    .slider-h-auto.no-slider .inner { 
        padding-top: 5px;
        padding-bottom: 0px;
    }
    </style>

@endsection