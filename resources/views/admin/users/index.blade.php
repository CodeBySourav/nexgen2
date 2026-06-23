@extends('layouts.admin')

@section('title', 'Users')

@section('content')
<div class="max-w-7xl mx-auto">

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Users</h1>
            <p class="text-gray-500">Manage all system users.</p>
        </div>

        <a href="{{ route('users.create') }}"
           class="inline-flex items-center px-5 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
            <i class="fas fa-user-plus mr-2"></i>
            Add User
        </a>
    </div>

    <!-- Success Message -->
    @if(session('success'))
        <div class="mb-4 p-4 rounded-lg bg-green-100 text-green-700">
            {{ session('success') }}
        </div>
    @endif

    <!-- Users Table -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">
                            ID
                        </th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">
                            Name
                        </th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">
                            Email
                        </th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">
                            Role
                        </th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">
                            Created
                        </th>
                        <th class="px-6 py-4 text-center text-sm font-semibold text-gray-700">
                            Actions
                        </th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-100">
                    @forelse($users as $user)
                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4">
                                {{ $user->id }}
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-800">
                                {{ $user->name }}
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                {{ $user->email }}
                            </td>

                            <td class="px-6 py-4">
                                @if($user->role == 'admin')
                                    <span class="px-3 py-1 text-xs font-semibold bg-red-100 text-red-700 rounded-full">
                                        Admin
                                    </span>
                                @else
                                    <span class="px-3 py-1 text-xs font-semibold bg-blue-100 text-blue-700 rounded-full">
                                        Editor
                                    </span>
                                @endif
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                {{ $user->created_at->format('d M Y') }}
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex justify-center gap-2">

                                    <a href="{{ route('users.edit', $user->id) }}"
                                       class="px-3 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form action="{{ route('users.destroy', $user->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Delete this user?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="px-3 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>

                                </div>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-10 text-gray-500">
                                No users found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if(method_exists($users, 'links'))
            <div class="p-4 border-t">
                {{ $users->links() }}
            </div>
        @endif

    </div>
</div>
@endsection