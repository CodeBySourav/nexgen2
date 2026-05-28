@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<div class="mb-8">
    <h1 class="text-2xl font-bold text-gray-800">Overview</h1>
    <p class="text-gray-500 text-sm">Manage your platform and view statistics.</p>
</div>

<!-- STATS -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <div class="bg-white p-6 rounded-2xl shadow-sm border">
        <p class="text-gray-400 text-sm uppercase font-bold">Total Posts</p>
        <h2 class="text-3xl font-black mt-1">{{ $totalPosts }}</h2>
    </div>

    <div class="bg-white p-6 rounded-2xl shadow-sm border">
        <p class="text-gray-400 text-sm uppercase font-bold">Total Pages</p>
        <h2 class="text-3xl font-black mt-1">{{ $totalPages }}</h2>
    </div>

    <div class="bg-white p-6 rounded-2xl shadow-sm border">
        <p class="text-gray-400 text-sm uppercase font-bold">System Status</p>
        <h2 class="text-3xl font-black mt-1 text-green-600">Active</h2>
    </div>

</div>

<!-- RECENT POSTS -->
<div class="mt-10 bg-white p-6 rounded-2xl border shadow-sm">

    <h2 class="text-lg font-bold mb-4">Latest Posts</h2>

    <div class="space-y-3">

        @foreach($latestPosts as $post)
            <div class="flex justify-between items-center border-b pb-2">
                <span class="text-gray-700 font-medium">{{ $post->title }}</span>
                <span class="text-xs text-gray-400">{{ $post->created_at->diffForHumans() }}</span>
            </div>
        @endforeach

    </div>

</div>

@endsection