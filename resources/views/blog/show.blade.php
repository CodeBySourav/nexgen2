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

    {{-- Schema Markup --}}
    @if($post->schema_markup)
        <script type="application/ld+json">
            {!! $post->schema_markup !!}
        </script>
    @endif
@endsection

@section('content')
<section class="py-5" style="background-color: #212529;">
    <div class="container text-white">

        <h1 class="text-center mt-4">
            {{ $post->title }}
        </h1>

        <div class="mt-4 text-white">
            {!! $post->content !!}
        </div>

    </div>
</section>
@endsection