<aside class="w-64 h-screen bg-white border-r border-gray-100 fixed hidden md:block select-none font-sans antialiased">
    <!-- Brand / Title Space (Optional placeholder to match dashboard alignment) -->
    <div class="px-6 pt-6 pb-2">
        <span class="text-xs font-bold tracking-wider text-gray-400 uppercase">Main Menu</span>
    </div>

    <nav class="px-3 space-y-1">

        <!-- Dashboard Link -->
        <a href="{{ route('dashboard') }}"
           class="flex items-center justify-between px-4 py-3 rounded-xl text-sm font-semibold transition-all group
           {{ request()->routeIs('dashboard') ? 'text-[#ff6d55] bg-[#fff5f4]' : 'text-[#6c7a93] hover:bg-gray-50 hover:text-[#ff6d55]' }}">
            <div class="flex items-center gap-3.5">
                <!-- Grid icon styled like image_708de9.png -->
                <svg class="w-5 h-5 flex-shrink-0 transition-colors {{ request()->routeIs('dashboard') ? 'text-[#ff6d55]' : 'text-[#ff8572] group-hover:text-[#ff6d55]' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                </svg>
                <span>Dashboard</span>
            </div>
            <!-- Chevron Right indicator -->
            <svg class="w-3.5 h-3.5 text-gray-300 group-hover:text-gray-400 transition-colors" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>

        <!-- Blog Link -->
        <a href="{{ route('posts.index') }}"
           class="flex items-center justify-between px-4 py-3 rounded-xl text-sm font-semibold transition-all group
           {{ request()->routeIs('posts.*') ? 'text-[#ff6d55] bg-[#fff5f4]' : 'text-[#6c7a93] hover:bg-gray-50 hover:text-[#ff6d55]' }}">
            <div class="flex items-center gap-3.5">
                <!-- Book/Nib style icon icon -->
                <svg class="w-5 h-5 flex-shrink-0 transition-colors {{ request()->routeIs('posts.*') ? 'text-[#ff6d55]' : 'text-[#ff8572] group-hover:text-[#ff6d55]' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
                <div class="flex items-center gap-2">
                    <span>Blog</span>
                    <!-- Modules status label pill style -->
                    <span class="text-[10px] font-bold px-1.5 py-0.5 rounded bg-[#fff0ed] text-[#ff6d55] tracking-wide transform scale-90 origin-left">Modules</span>
                </div>
            </div>
            <svg class="w-3.5 h-3.5 text-gray-300 group-hover:text-gray-400 transition-colors" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>

        <!-- Pages Link -->
        <a href="{{ route('pages.index') }}"
           class="flex items-center justify-between px-4 py-3 rounded-xl text-sm font-semibold transition-all group
           {{ request()->routeIs('pages.*') ? 'text-[#ff6d55] bg-[#fff5f4]' : 'text-[#6c7a93] hover:bg-gray-50 hover:text-[#ff6d55]' }}">
            <div class="flex items-center gap-3.5">
                <!-- Info/File Outline icon -->
                <svg class="w-5 h-5 flex-shrink-0 transition-colors {{ request()->routeIs('pages.*') ? 'text-[#ff6d55]' : 'text-[#ff8572] group-hover:text-[#ff6d55]' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>Pages</span>
            </div>
            <svg class="w-3.5 h-3.5 text-gray-300 group-hover:text-gray-400 transition-colors" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>

        <!-- Dynamic User Area -->
        @if(auth()->check() && auth()->user()->role == 'admin')
            <a href="{{ route('users.index') }}"
               class="flex items-center justify-between px-4 py-3 rounded-xl text-sm font-semibold transition-all group
               {{ request()->routeIs('users.*') ? 'text-[#ff6d55] bg-[#fff5f4]' : 'text-[#6c7a93] hover:bg-gray-50 hover:text-[#ff6d55]' }}">
                <div class="flex items-center gap-3.5">
                    <!-- User Account Icon component -->
                    <svg class="w-5 h-5 flex-shrink-0 transition-colors {{ request()->routeIs('users.*') ? 'text-[#ff6d55]' : 'text-[#ff8572] group-hover:text-[#ff6d55]' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <span>Users</span>
                </div>
                <svg class="w-3.5 h-3.5 text-gray-300 group-hover:text-gray-400 transition-colors" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        @endif

    </nav>
</aside>