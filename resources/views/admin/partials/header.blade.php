<header class="fixed w-full bg-white text-gray-800 shadow-sm flex items-center justify-between px-6 py-3 z-50">
    <div class="flex items-center gap-2">
         
            <img width="80" height="40"
                        src="{{ asset('images/Oceano-Apex-Logo.png') }}" alt="Oceano Apex" class="d-block d-sm-none responsive-logo"> 
          
    </div>

    <div class="flex items-center gap-4">
        <span class="hidden md:block text-sm font-medium text-gray-500">
            Welcome, Admin
        </span>

        <form method="POST" action="{{ route('logout') }}">
    @csrf

    <button type="submit"
        class="flex items-center gap-2 bg-red-50 hover:bg-red-100 text-red-600 px-4 py-2 rounded-lg transition-colors font-semibold text-sm">

        <span>Logout</span>
        <i class="fas fa-sign-out-alt"></i>

    </button>
</form>
    </div>
</header>