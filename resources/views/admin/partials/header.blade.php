<header class="fixed top-0 left-0 right-0 h-16 bg-white/80 backdrop-blur-md text-gray-800 border-b border-gray-100 flex items-center justify-between px-6 z-50 font-sans antialiased">
    
    <!-- LEFT PANEL: TOGGLE & BRAND IDENTIFIER -->
    <div class="flex items-center gap-4">
        <!-- Hamburger Menu toggle icon precisely styled from image_70e11a.png -->
        <button type="button" class="text-gray-800 hover:text-gray-600 focus:outline-none transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h10M4 18h14"></path>
            </svg>
        </button>

        <!-- Current Context Page Title -->
        <h1 class="text-xl font-black tracking-tight text-gray-900 hidden sm:block select-none">
            @yield('title', 'Dashboard')
        </h1>

        <!-- Logo Container Slot -->
        <div class="ml-2 flex items-center">
            <img width="80" height="40" src="{{ asset('images/Oceano-Apex-Logo.png') }}" alt="Oceano Apex" class="block md:hidden h-8 w-auto object-contain">
        </div>
    </div>

    <!-- RIGHT PANEL: SEARCH INPUT INTERFACE & ADMINISTRATIVE CONTROLS -->
    <div class="flex items-center gap-6">
        
        <!-- Premium Pill Search Box Component from image_70e11a.png -->
        <div class="relative hidden sm:block w-64 md:w-80">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                <!-- Soft red/coral glass lens icon -->
                <svg class="w-4 h-4 text-[#ff6d55]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </span>
            <input type="text" 
                   placeholder="Search here..." 
                   class="w-full bg-[#f8faf9] text-xs font-semibold text-gray-700 placeholder-gray-400 rounded-xl pl-10 pr-4 py-2.5 border border-transparent focus:outline-none focus:bg-white focus:border-gray-200 transition-all shadow-inner-sm">
        </div>

        <!-- Session Profiler Metrics -->
        <div class="flex items-center gap-4 border-l border-gray-100 pl-6">
            <span class="hidden lg:block text-xs font-bold text-gray-400 uppercase tracking-wider">
                Welcome, Admin
            </span>

            <!-- Sign out Button Trigger -->
            <form method="POST" action="{{ route('logout') }}" class="m-0">
                @csrf
                <button type="submit"
                        class="flex items-center gap-2 bg-[#fff5f4] hover:bg-[#ffece9] text-[#ff6d55] px-4 py-2 rounded-xl transition-all duration-200 font-bold text-xs shadow-sm">
                    <span>Logout</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                </button>
            </form>
        </div>

    </div>
</header>