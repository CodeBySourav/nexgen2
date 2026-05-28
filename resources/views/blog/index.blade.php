@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<section class="py-5 bg-dark">
    <div class="container mt-4">
        <div class="row mb-5 text-center">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-4 fw-bold">Latest Stories</h1>
                <p class="lead text-muted">Insights, thoughts, and announcements from our team.</p>
            </div>
        </div>

        <div class="row g-4">
            @foreach($posts as $post)
                <div class="col-md-6 col-lg-4 mb-3">
                    <article class="card h-100 border-0 shadow-sm hover-shadow transition">
                        {{-- Optional: Add an image if your model has one --}}
                        {{-- <img src="{{ $post->image_url }}" class="card-img-top" alt="{{ $post->title }}"> --}}
                        
                        <div class="card-body p-4">
                            <div class="mb-2">
                                <span class="badge bg-primary-soft text-primary px-2 py-1">Article</span>
                                <small class="text-muted ms-2">{{ $post->created_at->format('M d, Y') }}</small>
                            </div>
                            
                            <h3 class="h5 card-title mb-3">
                                <a href="{{ route('blog.show', $post->slug) }}" class="text-dark text-decoration-none stretched-link">
                                    {{ $post->title }}
                                </a>
                            </h3>

                            <p class="card-text text-muted small">
                                {{ Str::limit(strip_tags($post->content), 120) }}
                            </p>
                        </div>
                        
                        <div class="card-footer bg-transparent border-0 px-4 pb-4">
                            <div class="d-flex align-items-center">
                                <div class="text-primary fw-bold small">Read More →</div>
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
</section>

<style>
    .hover-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1) !important;
    }
    .transition {
        transition: all 0.3s ease-in-out;
    }
    .bg-primary-soft {
        background-color: rgba(13, 110, 253, 0.1);
    }
</style>
@endsection