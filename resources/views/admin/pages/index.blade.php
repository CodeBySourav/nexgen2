@extends('layouts.admin')

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
            <h1 class="text-2xl font-bold text-gray-800">Site Pages</h1>
            <p class="text-gray-500 text-sm">
                Manage your static content like About Us, Privacy Policy, and FAQ.
            </p>
        </div>

        <a href="{{ route('pages.create') }}"
           class="bg-[#4cb790] hover:bg-[#3fa37f] text-white px-5 py-2.5 rounded-xl font-semibold text-sm flex items-center gap-2 shadow-sm transition-all">

            <i class="fas fa-plus"></i>
            Add New Page

        </a>

    </div>

    <!-- Card -->
    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">

        <div class="overflow-x-auto">

            <table id="pagesTable" class="w-full text-sm text-left">

                <thead class="bg-gray-50 text-gray-500 uppercase text-xs">
                    <tr>
                        <th class="px-6 py-4">Page</th>
                        <th class="px-6 py-4">Slug</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4">Updated</th>
                        <th class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($pages as $page)

                    <tr class="border-t border-gray-100 hover:bg-gray-50 transition">

                        <!-- Page -->
                        <td class="px-6 py-4">

                            <div class="flex items-center gap-3">

                                @php preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $page->content, $matches); $image = $matches['src'] ?? 'https://placehold.co/100x100/e2e8f0/64748b?text=Page'; @endphp <img src="{{ $image }}" alt="{{ $page->title }}" class="w-14 h-14 rounded-2xl object-cover border border-gray-200 shadow-sm">

                                <div>

                                    <h4 class="font-semibold text-gray-800">
                                        {{ $page->title }}
                                    </h4>

                                    <p class="text-xs text-gray-400 mt-1">
                                        {{ Str::limit(strip_tags($page->content), 60) }}
                                    </p>

                                </div>

                            </div>

                        </td>

                        <!-- Slug -->
                        <td class="px-6 py-4">

                            <a href="{{ route('pages.show', $page->slug) }}"
                               target="_blank"
                               class="text-[#4cb790] hover:text-[#3fa37f] hover:underline font-medium">
                                /{{ $page->slug }}
                            </a>

                        </td>

                        <!-- Status -->
                        <td class="px-6 py-4">

                            @if($page->status)

                                <span class="bg-[#4cb790]/10 text-[#4cb790] text-[11px] font-bold px-3 py-1 rounded-full">
                                    Published
                                </span>

                            @else

                                <span class="bg-[#ff6d55]/10 text-[#ff6d55] text-[11px] font-bold px-3 py-1 rounded-full">
                                    Draft
                                </span>

                            @endif

                        </td>

                        <!-- Date -->
                        <td class="px-6 py-4 text-gray-500">
                            {{ $page->updated_at->format('d M Y') }}
                        </td>

                        <!-- Actions -->
                        <td class="px-6 py-4">

                            <div class="flex items-center justify-end gap-3">

                                <!-- Edit -->
                                <a href="{{ route('pages.edit', $page->id) }}"
                                   class="w-9 h-9 rounded-lg bg-[#4cb790]/10 text-[#4cb790] flex items-center justify-center hover:bg-[#4cb790] hover:text-white transition">

                                    <i class="fas fa-edit"></i>

                                </a>

                                <!-- Delete -->
                                <form action="{{ route('pages.destroy', $page->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Delete this page?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="w-9 h-9 rounded-lg bg-[#ff6d55]/10 text-[#ff6d55] flex items-center justify-center hover:bg-[#ff6d55] hover:text-white transition">

                                        <i class="fas fa-trash"></i>

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                    @empty

                    <tr>
                        <td colspan="5" class="text-center py-10 text-gray-400">
                            No pages found.
                        </td>
                    </tr>

                    @endforelse

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

    $('#pagesTable').DataTable({

        responsive: true,

        pageLength: 10,

        language: {
            search: "",
            searchPlaceholder: "Search pages...",
            lengthMenu: "Show _MENU_ pages",
            info: "Showing _START_ to _END_ of _TOTAL_ pages",
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

/* Search field styling adjustments */
.dataTables_filter input {
    border: 1px solid #e5e7eb !important;
    border-radius: 12px !important;
    padding: 10px 14px !important;
    background: #f9fafb !important;
    outline: none !important;
    margin-left: 10px !important;
    transition: all 0.2s ease;
}
.dataTables_filter input:focus {
    border-color: #4cb790 !important;
    background: #ffffff !important;
    box-shadow: 0 0 0 4px rgba(76, 183, 144, 0.1) !important;
}

/* Dropdown */
.dataTables_length select {
    border: 1px solid #e5e7eb !important;
    border-radius: 10px !important;
    padding: 6px 10px !important;
    background: #f9fafb !important;
    outline: none !important;
}
.dataTables_length select:focus {
    border-color: #4cb790 !important;
}

/* Pagination Base Buttons */
.dataTables_paginate .paginate_button {
    border-radius: 10px !important;
    margin: 0 3px !important;
    border: 1px solid transparent !important;
    transition: all 0.2s ease !important;
}

/* Active Page State */
.dataTables_wrapper .dataTables_paginate .paginate_button.current,
.dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
    background: #4cb790 !important;
    color: white !important;
    border-color: #4cb790 !important;
}

/* Inactive Page Item Hover State */
.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    background-color: rgba(76, 183, 144, 0.08) !important;
    color: #4cb790 !important;
    border-color: transparent !important;
}

</style>
 
@endsection