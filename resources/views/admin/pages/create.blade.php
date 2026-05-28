@extends('layouts.admin')

@section('title', 'Add New Page')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">

<main>
    <form id="entryForm" action="{{ route('pages.store') }}" method="POST">
        @csrf

        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Add New Page</h1>
                <p class="text-gray-500 text-sm">Create fresh content for your website.</p>
            </div>

            <button type="submit"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2 rounded-xl font-semibold text-sm">
                Save Page
            </button>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- LEFT -->
            <div class="lg:col-span-2 bg-white p-6 rounded-2xl border shadow-sm">

                <div class="mb-6">
                    <label class="block text-sm font-bold mb-2">Title</label>
                    <input type="text" name="title" required
                           class="w-full px-4 py-3 bg-gray-50 border rounded-xl">
                </div>

                <div>
                    <label class="block text-sm font-bold mb-2">Content</label>

                    <!-- IMPORTANT: name="content" -->
                    <textarea id="summernote" name="content">{{ old('content') }}</textarea>
                </div>

            </div>

            <!-- RIGHT -->
            <div class="bg-white p-6 rounded-2xl border shadow-sm">

                <div class="mb-4">
                    <label class="text-xs font-bold uppercase text-gray-500">Slug</label>
                    <input type="text" name="slug"
                           class="w-full mt-2 px-4 py-2 bg-gray-50 border rounded-lg">
                </div>

                <div class="flex items-center justify-between border-t pt-4">
                    <span>Active</span>
                    <input type="checkbox" name="is_active" value="1" checked>
                </div>

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
        height: 400,
        placeholder: 'Write content here...',
        toolbar: [
            ['style', ['bold', 'italic', 'underline']],
            ['para', ['ul', 'ol']],
            ['insert', ['link', 'picture']],
            ['view', ['codeview', 'fullscreen']]
        ]
    });
});
</script>

@endsection