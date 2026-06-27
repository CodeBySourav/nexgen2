@extends('layouts.admin')

@section('title', 'Users')

@section('content')
<div class="max-w-7xl mx-auto">

    <!-- Success Message -->
    @if(session('success'))
        <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl flex items-center justify-between">
            <span>{{ session('success') }}</span>
            <button onclick="this.parentElement.remove()" class="text-green-700 font-bold text-lg leading-none">×</button>
        </div>
    @endif

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-800 tracking-tight">Users</h1>
            <p class="text-gray-500 text-sm">Manage database records and modify system user structural access permissions.</p>
        </div>

        <a href="{{ route('users.create') }}"
           class="bg-[#4cb790] hover:bg-[#3fa37f] text-white px-5 py-2.5 rounded-xl font-semibold text-sm flex items-center gap-2 shadow-sm transition-all">
            <i class="fas fa-user-plus"></i>
            Add User
        </a>
    </div>

    <!-- Users Table Card -->
    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left">
                <thead class="bg-gray-50 text-gray-500 uppercase text-xs border-b border-gray-100">
                    <tr>
                        <th class="px-6 py-4 font-semibold">ID</th>
                        <th class="px-6 py-4 font-semibold">Name</th>
                        <th class="px-6 py-4 font-semibold">Email</th>
                        <th class="px-6 py-4 font-semibold">Role</th>
                        <th class="px-6 py-4 font-semibold">Created</th>
                        <th class="px-6 py-4 font-semibold text-right">Actions</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-100">
                    @forelse($users as $user)
                        <tr class="hover:bg-gray-50/70 transition">

                            <!-- ID -->
                            <td class="px-6 py-4 text-gray-400 font-mono text-xs">
                                #{{ $user->id }}
                            </td>

                            <!-- Name -->
                            <td class="px-6 py-4 font-semibold text-gray-800">
                                {{ $user->name }}
                            </td>

                            <!-- Email -->
                            <td class="px-6 py-4 text-gray-600">
                                {{ $user->email }}
                            </td>

                            <!-- Role -->
                            <td class="px-6 py-4">
                                @if($user->role == 'admin')
                                    <span class="bg-[#ff6d55]/10 text-[#ff6d55] text-[11px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                        Admin
                                    </span>
                                @else
                                    <span class="bg-[#4cb790]/10 text-[#4cb790] text-[11px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                        Editor
                                    </span>
                                @endif
                            </td>

                            <!-- Created Date -->
                            <td class="px-6 py-4 text-gray-500">
                                {{ $user->created_at->format('d M Y') }}
                            </td>

                            <!-- Actions -->
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-end gap-3">

                                    <!-- Edit Button -->
                                    <a href="{{ route('users.edit', $user->id) }}"
                                       class="w-9 h-9 rounded-lg bg-[#4cb790]/10 text-[#4cb790] flex items-center justify-center hover:bg-[#4cb790] hover:text-white transition shadow-sm">
                                        <i class="fas fa-edit text-xs"></i>
                                    </a>

                                    <!-- Delete Button Trigger -->
                                    <form action="{{ route('users.destroy', $user->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Delete this user?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="w-9 h-9 rounded-lg bg-[#ff6d55]/10 text-[#ff6d55] flex items-center justify-center hover:bg-[#ff6d55] hover:text-white transition shadow-sm">
                                            <i class="fas fa-trash text-xs"></i>
                                        </button>
                                    </form>

                                </div>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-12 text-gray-400">
                                <div class="flex flex-col items-center justify-center gap-2">
                                    <i class="fas fa-users text-2xl text-gray-200"></i>
                                    <span>No system users discovered.</span>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination Framework Hook -->
        @if(method_exists($users, 'links'))
            <div class="p-6 border-t border-gray-100 bg-gray-50/50">
                {{ $users->links() }}
            </div>
        @endif

    </div>
</div>
@endsection