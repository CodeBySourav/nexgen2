<aside class="w-64 h-screen bg-white border-r border-gray-200 fixed hidden md:block">
    <nav class="mt-6 px-4 space-y-2">

        <a href="{{ route('dashboard') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl font-medium
           {{ request()->routeIs('dashboard') ? 'text-indigo-600 bg-indigo-50' : 'text-gray-600 hover:bg-gray-50 hover:text-indigo-600' }}">
            <i class="fas fa-th-large"></i>
            <span>Dashboard</span>
        </a>

        <a href="{{ route('posts.index') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl font-medium
           {{ request()->routeIs('posts.*') ? 'text-indigo-600 bg-indigo-50' : 'text-gray-600 hover:bg-gray-50 hover:text-indigo-600' }}">
            <i class="fas fa-pen-nib"></i>
            <span>Blog</span>
        </a>

        <a href="{{ route('pages.index') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl font-medium
           {{ request()->routeIs('pages.*') ? 'text-indigo-600 bg-indigo-50' : 'text-gray-600 hover:bg-gray-50 hover:text-indigo-600' }}">
            <i class="fas fa-file-alt"></i>
            <span>Pages</span>
        </a>

    </nav>
</aside>