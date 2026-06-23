@extends('layouts.admin')

@section('title', 'Edit User')

@section('content')
<div class="max-w-3xl mx-auto">

    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Edit User</h1>
            <p class="text-gray-500">Update user information.</p>
        </div>

        <a href="{{ route('users.index') }}"
           class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200">
            Back
        </a>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Name -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Full Name
                    </label>
                    <input type="text"
                           name="name"
                           value="{{ old('name', $user->name) }}"
                           class="w-full rounded-lg border border-gray-300 px-4 py-3"
                           required>
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Email Address
                    </label>
                    <input type="email"
                           name="email"
                           value="{{ old('email', $user->email) }}"
                           class="w-full rounded-lg border border-gray-300 px-4 py-3"
                           required>
                </div>

                <!-- New Password -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        New Password
                    </label>
                    <input type="password"
                           name="password"
                           class="w-full rounded-lg border border-gray-300 px-4 py-3">

                    <small class="text-gray-500">
                        Leave blank to keep current password.
                    </small>
                </div>

                <!-- Confirm Password -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Confirm Password
                    </label>
                    <input type="password"
                           name="password_confirmation"
                           class="w-full rounded-lg border border-gray-300 px-4 py-3">
                </div>

                <!-- Role -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        User Role
                    </label>

                    <select name="role"
                            class="w-full rounded-lg border border-gray-300 px-4 py-3"
                            required>
                        <option value="admin"
                            {{ $user->role == 'admin' ? 'selected' : '' }}>
                            Admin
                        </option>

                        <option value="editor"
                            {{ $user->role == 'editor' ? 'selected' : '' }}>
                            Editor
                        </option>
                    </select>
                </div>

            </div>

            <div class="mt-8 flex justify-end">
                <button type="submit"
                        class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                    <i class="fas fa-save me-2"></i>
                    Update User
                </button>
            </div>

        </form>
    </div>

</div>
@endsection