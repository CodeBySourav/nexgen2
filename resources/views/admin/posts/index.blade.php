@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
@if(session('success'))
    <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl flex items-center justify-between">
        <span>{{ session('success') }}</span>
        <button onclick="this.parentElement.remove()" class="text-green-700 font-bold">×</button>
    </div>
@endif
    <!-- MAIN CONTENT AREA -->
<main class=" ">
    <!-- Page Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Blog Posts</h1>
            <p class="text-gray-500 text-sm">Create, edit, and manage your website articles.</p>
        </div>
        <a href="{{ route('posts.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2.5 rounded-xl font-semibold text-sm flex items-center gap-2 shadow-sm transition-all">
    <i class="fas fa-plus"></i>
    Create New Post
</a>
    </div>

    <!-- Filters & Search -->
    <div class="bg-white p-4 rounded-t-2xl border border-gray-100 flex flex-col md:flex-row gap-4 justify-between items-center">
        <div class="relative w-full md:w-96">
            <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
            <input type="text" placeholder="Search articles..." class="w-full pl-11 pr-4 py-2 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all text-sm">
        </div>
        <div class="flex gap-2 w-full md:w-auto">
            <select class="bg-gray-50 border border-gray-200 text-gray-600 text-sm rounded-lg px-3 py-2 outline-none">
                <option>All Categories</option>
                <option>Technology</option>
                <option>Lifestyle</option>
            </select>
        </div>
    </div>

    <!-- Blog Table -->
    <div class="bg-white border border-gray-100 border-t-0 rounded-b-2xl overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 text-gray-400 text-xs uppercase font-bold">
                        <th class="px-6 py-4">Article</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4">URL</th>
                        <th class="px-6 py-4">Date</th>
                        <th class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($posts as $post)
                        <tr class="hover:bg-gray-50/50 transition-colors">

                            <!-- Title -->
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=100&h=100&fit=crop"
                                        class="w-10 h-10 rounded-lg object-cover" alt="thumb">

                                    <div>
                                        <span class="block font-semibold text-gray-800 text-sm">
                                            {{ $post->title }}
                                        </span>
                                        <span class="text-xs text-gray-400">
                                            {{ Str::limit(strip_tags($post->content), 30) }}
                                        </span>
                                    </div>
                                </div>
                            </td>

                            <!-- Status -->
                            <td class="px-6 py-4">
                                @if($post->status)
                                    <span class="bg-green-100 text-green-700 text-[10px] font-bold px-2.5 py-1 rounded-full uppercase">
                                        Published
                                    </span>
                                @else
                                    <span class="bg-yellow-100 text-yellow-700 text-[10px] font-bold px-2.5 py-1 rounded-full uppercase">
                                        Draft
                                    </span>
                                @endif
                            </td>

                            <!-- Category (optional - if you don’t have, show default) -->
                            <td class="px-6 py-4 text-sm font-medium">
                                <a href="{{ route('blog.show', $post->slug) }}"
                                target="_blank"
                                class="text-indigo-600 hover:text-indigo-800 hover:underline">
                                    {{ $post->slug }}
                                </a>
                            </td>

                            <!-- Date -->
                            <td class="px-6 py-4 text-sm text-gray-500">
                                {{ $post->created_at->format('d M Y') }}
                            </td>

                            <!-- Actions -->
                            <td class="px-6 py-4 text-right">

                                <!-- EDIT -->
                                <a href="{{ route('posts.edit', $post->id) }}"
                                class="text-gray-400 hover:text-indigo-600 mx-1">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <!-- DELETE -->
                                <form action="{{ route('posts.destroy', $post->id) }}"
                                    method="POST"
                                    class="inline-block"
                                    onsubmit="return confirm('Are you sure you want to delete this post?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="text-gray-400 hover:text-red-600 mx-1">
                                        <i class="fas fa-trash"></i>
                                    </button>

                                </form>

                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-10 text-gray-500">
                                No posts found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="px-6 py-4 bg-gray-50 border-t border-gray-100 flex items-center justify-between">
            <span class="text-xs text-gray-500 font-medium">Showing 1 to 2 of 12 entries</span>
            <div class="flex gap-1">
                <button class="px-3 py-1 border border-gray-200 rounded-md text-xs font-bold hover:bg-white transition-colors disabled:opacity-50" disabled>Prev</button>
                <button class="px-3 py-1 bg-indigo-600 text-white rounded-md text-xs font-bold shadow-sm">1</button>
                <button class="px-3 py-1 border border-gray-200 rounded-md text-xs font-bold hover:bg-white transition-colors">2</button>
                <button class="px-3 py-1 border border-gray-200 rounded-md text-xs font-bold hover:bg-white transition-colors">Next</button>
            </div>
        </div>
    </div>
</main>
@endsection