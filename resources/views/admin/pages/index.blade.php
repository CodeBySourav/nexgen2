 @extends('layouts.admin')

@section('content')
@if(session('success'))
    <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl flex items-center justify-between">
        <span>{{ session('success') }}</span>
        <button onclick="this.parentElement.remove()" class="text-green-700 font-bold">×</button>
    </div>
@endif
<main class=" ">
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Site Pages</h1>
            <p class="text-gray-500 text-sm">Manage your static content like About Us, Privacy Policy, and FAQ.</p>
        </div>
        <a href="{{ route('pages.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2.5 rounded-xl font-semibold text-sm flex items-center gap-2 shadow-sm transition-all">
            <i class="fas fa-plus"></i>
            Add New Page
        </a>
    </div>

    <!-- Page List Table -->
    <div class="bg-white border border-gray-100 rounded-2xl overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 text-gray-400 text-xs uppercase font-bold">
                        <th class="px-6 py-4">Page Title</th>
                        <th class="px-6 py-4">URL Slug</th>
                        <th class="px-6 py-4">Visibility</th>
                        <th class="px-6 py-4">Last Updated</th>
                        <th class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    {{-- Loop through pages from Controller --}}
                    @forelse($pages as $page)
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded bg-indigo-100 text-indigo-600 flex items-center justify-center">
                                    <i class="fas fa-file-alt text-xs"></i>
                                </div>
                                <span class="font-semibold text-gray-800 text-sm">{{ $page->title }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <code class="text-xs bg-gray-100 px-2 py-1 rounded text-gray-600">/{{ $page->slug }}</code>
                        </td>
                        <td class="px-6 py-4">
                            @if($page->is_published)
                                <span class="flex items-center gap-1.5 text-green-600 text-xs font-bold">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-600"></span> Public
                                </span>
                            @else
                                <span class="flex items-center gap-1.5 text-gray-400 text-xs font-bold">
                                    <span class="w-1.5 h-1.5 rounded-full bg-gray-400"></span> Hidden
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500">
                            {{ $page->updated_at->format('M d, Y') }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-2">

                                    <a href="{{ route('pages.edit', $page->id) }}"
                                    class="p-2 text-gray-400 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg transition-all">
                                        <i class="fas fa-edit text-sm"></i>
                                    </a>

                                    <form action="{{ route('pages.destroy', $page->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Delete this page?')">

                                        @csrf
                                        @method('DELETE')

                                        <button class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-all">
                                            <i class="fas fa-trash text-sm"></i>
                                        </button>

                                    </form>

                                </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-10 text-center text-gray-400">No pages found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection