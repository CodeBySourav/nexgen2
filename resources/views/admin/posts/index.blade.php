@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
@if(session('success'))
    <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl flex items-center justify-between">
        <span>{{ session('success') }}</span>
        <button onclick="this.parentElement.remove()" class="text-green-700 font-bold">×</button>
    </div>
@endif
 
<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.tailwindcss.min.css">

<main>

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Blog Posts</h1>
            <p class="text-gray-500 text-sm">Create, edit, and manage your website articles.</p>
        </div>

        <a href="{{ route('posts.create') }}"
           class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2.5 rounded-xl font-semibold text-sm flex items-center gap-2 shadow-sm transition-all">
            <i class="fas fa-plus"></i>
            Create New Post
        </a>
    </div>

    <!-- Card -->
    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">

        <div class="overflow-x-auto">

            <table id="postsTable" class="w-full text-sm text-left">

                <thead class="bg-gray-50 text-gray-500 uppercase text-xs">
                    <tr>
                        <th class="px-6 py-4">Post</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4">URL</th>
                        <th class="px-6 py-4">Date</th>
                        <th class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($posts as $post)

                    <tr class="border-t border-gray-100 hover:bg-gray-50 transition">

                        <!-- Post -->
                        <td class="px-6 py-4">

                            <div class="flex items-center gap-3">

                                @php preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $post->content, $matches); 
                                
                                $image = $matches['src'] ?? 'https://placehold.co/100x100/e2e8f0/64748b?text=No+Image';
                                
                                @endphp <img src="{{ $image }}" alt="{{ $post->title }}" class="w-14 h-14 rounded-2xl object-cover border border-gray-200 shadow-sm">

                                <div>
                                    <h4 class="font-semibold text-gray-800">
                                        {{ $post->title }}
                                    </h4>

                                    <p class="text-xs text-gray-400 mt-1">
                                        {{ Str::limit(strip_tags($post->content), 60) }}
                                    </p>
                                </div>

                            </div>

                        </td>

                        <!-- Status -->
                        <td class="px-6 py-4">

                            @if($post->status)

                                <span class="bg-green-100 text-green-700 text-[11px] font-bold px-3 py-1 rounded-full">
                                    Published
                                </span>

                            @else

                                <span class="bg-yellow-100 text-yellow-700 text-[11px] font-bold px-3 py-1 rounded-full">
                                    Draft
                                </span>

                            @endif

                        </td>

                        <!-- URL -->
                        <td class="px-6 py-4">

                            <a href="{{ route('blog.show', $post->slug) }}"
                               target="_blank"
                               class="text-indigo-600 hover:underline">

                                /{{ $post->slug }}

                            </a>

                        </td>

                        <!-- Date -->
                        <td class="px-6 py-4 text-gray-500">
                            {{ $post->created_at->format('d M Y') }}
                        </td>

                        <!-- Actions -->
                        <td class="px-6 py-4">

                            <div class="flex items-center justify-end gap-3">

                                <!-- Edit -->
                                <a href="{{ route('posts.edit', $post->id) }}"
                                   class="w-9 h-9 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center hover:bg-indigo-100 transition">

                                    <i class="fas fa-edit"></i>

                                </a>

                                <!-- Delete -->
                                <form action="{{ route('posts.destroy', $post->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Delete this post?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="w-9 h-9 rounded-lg bg-red-50 text-red-600 flex items-center justify-center hover:bg-red-100 transition">

                                        <i class="fas fa-trash"></i>

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</main>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- DataTables -->
<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function () {

    $('#postsTable').DataTable({

        responsive: true,

        pageLength: 10,

        language: {
            search: "",
            searchPlaceholder: "Search posts...",
            lengthMenu: "Show _MENU_ posts",
            info: "Showing _START_ to _END_ of _TOTAL_ posts",
            paginate: {
                previous: "←",
                next: "→"
            }
        },

        dom:
            '<"flex flex-col md:flex-row md:items-center md:justify-between gap-4 p-6 border-b border-gray-100"lf>' +
            't' +
            '<"flex flex-col md:flex-row md:items-center md:justify-between gap-4 p-6 border-t border-gray-100"ip>'

    });

});
</script>

<style>

/* Search */
.dataTables_filter input {
    border: 1px solid #e5e7eb !important;
    border-radius: 12px !important;
    padding: 10px 14px !important;
    background: #f9fafb !important;
    outline: none !important;
    margin-left: 10px !important;
}

/* Dropdown */
.dataTables_length select {
    border: 1px solid #e5e7eb !important;
    border-radius: 10px !important;
    padding: 6px 10px !important;
    background: #f9fafb !important;
}

/* Pagination */
.dataTables_paginate .paginate_button {
    border-radius: 10px !important;
    margin: 0 3px !important;
}

/* Active */
.dataTables_wrapper .dataTables_paginate .paginate_button.current {
    background: #4f46e5 !important;
    color: white !important;
    border: none !important;
}

/* Hover */
.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    background: #eef2ff !important;
    color: #4f46e5 !important;
    border: none !important;
}

</style>
 
@endsection