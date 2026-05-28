@extends('layouts.admin')

@section('title', 'Edit Post')

@section('content')

<!-- Summernote CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">

<main>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-800 tracking-tight">Edit Post</h1>
                <p class="text-gray-500 text-sm">Update your blog content and SEO settings.</p>
            </div>

            <div class="flex gap-3">
                <a href="{{ route('posts.index') }}"
                   class="bg-white border border-gray-200 text-gray-600 px-6 py-2.5 rounded-xl font-semibold text-sm hover:bg-gray-50 transition-all shadow-sm">
                    Cancel
                </a>

                <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2.5 rounded-xl font-semibold text-sm shadow-md transition-all">
                    Update Post
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- LEFT SIDE -->
            <div class="lg:col-span-2 space-y-6">

                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">

                    <!-- Title -->
                    <div class="mb-6">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Post Title</label>
                        <input type="text"
                               name="title"
                               value="{{ $post->title }}"
                               required
                               class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none">
                    </div>

                    <!-- Summernote Editor -->
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Content Body</label>

                        <textarea id="editor" name="content">
                            {!! $post->content !!}
                        </textarea>
                    </div>

                </div>

                <!-- SEO -->
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">

                    <h2 class="text-lg font-bold text-gray-800 mb-4">SEO Settings</h2>

                    <div class="space-y-4">

                        <div>
                            <label class="block text-xs font-bold text-gray-500 uppercase mb-1">SEO Title</label>
                            <input type="text"
                                   name="seo_title"
                                   value="{{ $post->seo_title }}"
                                   class="w-full px-4 py-2 bg-gray-50 border border-gray-200 rounded-lg text-sm outline-none">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-500 uppercase mb-1">SEO Description</label>
                            <textarea name="seo_description" rows="3"
                                      class="w-full px-4 py-2 bg-gray-50 border border-gray-200 rounded-lg text-sm outline-none">{{ $post->seo_description }}</textarea>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-500 uppercase mb-1">JSON-LD Schema</label>
                            <textarea name="schema_markup" rows="4"
                                      class="w-full px-4 py-2 bg-gray-50 border border-gray-200 rounded-lg font-mono text-xs outline-none">{{ $post->schema_markup }}</textarea>
                        </div>

                    </div>
                </div>

            </div>

            <!-- RIGHT SIDE -->
            <div class="lg:col-span-1 space-y-6">

                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">

                    <h3 class="font-bold text-gray-800 mb-4">Visibility</h3>

                    <div class="flex items-center justify-between p-4 bg-gray-50 rounded-xl">

                        <span class="text-sm font-semibold text-gray-700">Published</span>

                        <label class="relative inline-flex items-center cursor-pointer">

                            <input type="checkbox"
                                   name="status"
                                   value="1"
                                   {{ $post->status ? 'checked' : '' }}
                                   class="sr-only peer">

                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer
                                        peer-checked:after:translate-x-full peer-checked:after:border-white
                                        after:content-[''] after:absolute after:top-[2px] after:left-[2px]
                                        after:bg-white after:border-gray-300 after:border after:rounded-full
                                        after:h-5 after:w-5 after:transition-all peer-checked:bg-green-500">
                            </div>

                        </label>

                    </div>

                </div>

            </div>

        </div>
    </form>
</main>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Summernote JS -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>

<script>
$(document).ready(function() {
    $('#editor').summernote({
        height: 450,
        placeholder: 'Edit your blog post...',
        tabsize: 2,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
});
</script>

@endsection