<!-- Simple Admin Navbar -->
<div class="w-64 bg-white shadow-lg sticky top-0 h-screen overflow-y-auto">
    <div class="p-6">
        <div class="flex items-center">
            <div class="w-10 h-10 bg-gradient-to-br from-purple-600 to-indigo-600 rounded-lg flex items-center justify-center mr-3 shadow-lg">
                <i class="fas fa-moon text-white text-lg"></i>
            </div>
            <div>
                <h2 class="text-xl font-bold text-gray-800">Occult Science</h2>
                <p class="text-xs text-gray-500">Admin Dashboard</p>
            </div>
        </div>
    </div>
    <nav class="mt-6">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('admin.dashboard') ? 'bg-primary text-white hover:bg-primary' : '' }}">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <a href="{{ route('admin.posts.index') }}" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('admin.posts.*') ? 'bg-primary text-white hover:bg-primary' : '' }}">
            <i class="fas fa-file-alt mr-3"></i>
            Posts
        </a>
        <a href="{{ route('admin.categories.index') }}" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('admin.categories.*') ? 'bg-primary text-white hover:bg-primary' : '' }}">
            <i class="fas fa-tags mr-3"></i>
            Categories
        </a>
        <a href="{{ route('blog.index') }}" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100">
            <i class="fas fa-home mr-3"></i>
            View Site
        </a>
    </nav>
</div>
