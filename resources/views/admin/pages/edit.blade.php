@extends('layouts.admin')

@section('title', 'Edit Page')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">

<main>
    <form action="{{ route('pages.update', $page->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Edit Page</h1>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- LEFT -->
            <div class="lg:col-span-2 bg-white p-6 rounded-2xl border shadow-sm space-y-6">

                <!-- Title -->
                <div>
                    <label class="text-sm font-bold">Title</label>
                    <input type="text" name="title"
                           value="{{ $page->title }}"
                           class="w-full mt-2 px-4 py-3 bg-gray-50 border rounded-xl">
                </div>

                <!-- Content -->
                <div>
                    <label class="text-sm font-bold">Content</label>
                    <textarea id="summernote" name="content">{{ $page->content }}</textarea>
                </div>

            </div>

            <!-- RIGHT -->
            <div class="bg-white p-6 rounded-2xl border shadow-sm space-y-4">

                <div>
                    <label class="text-xs font-bold text-gray-500">Slug</label>
                    <input type="text" name="slug"
                           value="{{ $page->slug }}"
                           class="w-full mt-2 px-4 py-2 bg-gray-50 border rounded-lg">
                </div>

                <div class="flex items-center justify-between border-t pt-4">
                    <span>Active</span>
                    <input type="checkbox" name="is_active" value="1"
                           {{ $page->status ? 'checked' : '' }}>
                </div>

                <button type="submit"
                        class="w-full bg-indigo-600 text-white py-2 rounded-xl">
                    Update Page
                </button>

            </div>

        </div>
    </form>
</main>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>

<script>
$(document).ready(function () {
    $('#summernote').summernote({
        height: 400
    });
});
</script>

@endsection