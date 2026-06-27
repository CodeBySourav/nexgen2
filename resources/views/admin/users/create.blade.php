@extends('layouts.admin')

@section('title', 'Add User')

@section('content')
<div class="max-w-3xl mx-auto">

    <!-- Header Actions -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-800 tracking-tight">Add User</h1>
            <p class="text-gray-500 text-sm">Create a new user account and provision identity profiles.</p>
        </div>

        <a href="{{ route('users.index') }}"
           class="bg-white border border-gray-200 text-gray-600 px-5 py-2.5 rounded-xl font-semibold text-sm hover:bg-gray-50 transition-all shadow-sm inline-flex items-center justify-center">
            Cancel
        </a>
    </div>

    <!-- Main Content Card -->
    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 sm:p-8">
        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Name -->
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">
                        Full Name
                    </label>
                    <input type="text"
                           name="name"
                           value="{{ old('name') }}"
                           class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#4cb790]/20 focus:border-[#4cb790] outline-none transition-all placeholder-gray-400 text-gray-800"
                           placeholder="e.g. Sourav Prasad"
                           required>

                    @error('name')
                        <p class="text-[#ff6d55] text-xs mt-1 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">
                        Email Address
                    </label>
                    <input type="email"
                           name="email"
                           value="{{ old('email') }}"
                           class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#4cb790]/20 focus:border-[#4cb790] outline-none transition-all placeholder-gray-400 text-gray-800"
                           placeholder="name@example.com"
                           required>

                    @error('email')
                        <p class="text-[#ff6d55] text-xs mt-1 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">
                        Password
                    </label>
                    <input type="password"
                           name="password"
                           class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#4cb790]/20 focus:border-[#4cb790] outline-none transition-all placeholder-gray-400 text-gray-800"
                           placeholder="••••••••"
                           required>

                    @error('password')
                        <p class="text-[#ff6d55] text-xs mt-1 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">
                        Confirm Password
                    </label>
                    <input type="password"
                           name="password_confirmation"
                           class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#4cb790]/20 focus:border-[#4cb790] outline-none transition-all placeholder-gray-400 text-gray-800"
                           placeholder="••••••••"
                           required>
                </div>

                <!-- Role -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-bold text-gray-700 mb-2">
                        User Role
                    </label>

                    <div class="relative">
                        <select name="role"
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#4cb790]/20 focus:border-[#4cb790] outline-none transition-all text-gray-800 appearance-none cursor-pointer"
                                required>
                            <option value="" disabled {{ old('role') ? '' : 'selected' }}>Select assigned system role...</option>
                            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="editor" {{ old('role') == 'editor' ? 'selected' : '' }}>Editor</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-400">
                            <i class="fas fa-chevron-down text-xs"></i>
                        </div>
                    </div>

                    @error('role')
                        <p class="text-[#ff6d55] text-xs mt-1 font-medium">{{ $message }}</p>
                    @enderror
                </div>

            </div>

            <!-- Bottom Action Controls -->
            <div class="mt-8 pt-6 border-t border-gray-100 flex justify-end">
                <button type="submit"
                        class="bg-[#4cb790] hover:bg-[#3fa37f] text-white px-6 py-3 rounded-xl font-semibold text-sm shadow-md transition-all flex items-center gap-2">
                    <i class="fas fa-user-plus text-xs"></i>
                    Create Account
                </button>
            </div>

        </form>
    </div>

</div>
@endsection