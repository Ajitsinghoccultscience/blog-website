@extends('admin.layout')

@section('title', 'Admin Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
    <!-- Categories Card -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-primary bg-opacity-10">
                <i class="fas fa-tags text-primary text-xl"></i>
            </div>
            <div class="ml-4">
                <p class="text-sm font-medium text-gray-600">Total Categories</p>
                <p class="text-2xl font-semibold text-gray-900">{{ \App\Models\Category::count() }}</p>
            </div>
        </div>
        <div class="mt-4">
            <a href="{{ route('admin.categories.index') }}" class="text-primary hover:text-blue-700 text-sm font-medium">
                Manage Categories →
            </a>
        </div>
    </div>

    <!-- Active Categories Card -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-green-100">
                <i class="fas fa-check-circle text-green-600 text-xl"></i>
            </div>
            <div class="ml-4">
                <p class="text-sm font-medium text-gray-600">Active Categories</p>
                <p class="text-2xl font-semibold text-gray-900">{{ \App\Models\Category::where('is_active', true)->count() }}</p>
            </div>
        </div>
    </div>

    <!-- Posts Card -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-purple-100">
                <i class="fas fa-file-alt text-purple-600 text-xl"></i>
            </div>
            <div class="ml-4">
                <p class="text-sm font-medium text-gray-600">Total Posts</p>
                <p class="text-2xl font-semibold text-gray-900">{{ \App\Models\Post::count() }}</p>
            </div>
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="bg-white rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 mb-4">Quick Actions</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <a href="{{ route('admin.categories.create') }}" 
           class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
            <div class="p-2 rounded-full bg-primary bg-opacity-10 mr-3">
                <i class="fas fa-plus text-primary"></i>
            </div>
            <div>
                <h4 class="font-medium text-gray-900">Create New Category</h4>
                <p class="text-sm text-gray-600">Add a new category to organize your posts</p>
            </div>
        </a>

        <a href="{{ route('admin.posts.index') }}" 
           class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
            <div class="p-2 rounded-full bg-blue-100 mr-3">
                <i class="fas fa-list text-blue-600"></i>
            </div>
            <div>
                <h4 class="font-medium text-gray-900">Manage Posts</h4>
                <p class="text-sm text-gray-600">View, edit, and organize all blog posts</p>
            </div>
        </a>

        <a href="{{ route('admin.categories.index') }}" 
           class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
            <div class="p-2 rounded-full bg-green-100 mr-3">
                <i class="fas fa-tags text-green-600"></i>
            </div>
            <div>
                <h4 class="font-medium text-gray-900">Manage Categories</h4>
                <p class="text-sm text-gray-600">View, edit, and organize all categories</p>
            </div>
        </a>

        <a href="{{ route('blog.index') }}" 
           class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
            <div class="p-2 rounded-full bg-green-100 mr-3">
                <i class="fas fa-eye text-green-600"></i>
            </div>
            <div>
                <h4 class="font-medium text-gray-900">View Website</h4>
                <p class="text-sm text-gray-600">See how your blog looks to visitors</p>
            </div>
        </a>

        <a href="{{ route('admin.posts.create') }}" 
           class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
            <div class="p-2 rounded-full bg-purple-100 mr-3">
                <i class="fas fa-plus text-purple-600"></i>
            </div>
            <div>
                <h4 class="font-medium text-gray-900">Create New Post</h4>
                <p class="text-sm text-gray-600">Write and publish a new blog post</p>
            </div>
        </a>
    </div>
</div>

<!-- Recent Posts -->
@if(\App\Models\Post::count() > 0)
<div class="mt-8 bg-white rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 mb-4">Recent Posts</h3>
    <div class="space-y-3">
        @foreach(\App\Models\Post::with('category')->latest()->take(5)->get() as $post)
        <div class="flex items-center justify-between p-3 border border-gray-200 rounded-lg">
            <div class="flex items-center">
                @if($post->featured_image)
                    <img src="{{ Storage::url($post->featured_image) }}" 
                         alt="{{ $post->featured_image_alt ?? $post->title }}" 
                         class="w-10 h-10 rounded-lg object-cover mr-3">
                @else
                    <div class="w-10 h-10 bg-gray-200 rounded-lg mr-3 flex items-center justify-center">
                        <i class="fas fa-image text-gray-400 text-sm"></i>
                    </div>
                @endif
                <div>
                    <h4 class="font-medium text-gray-900">{{ Str::limit($post->title, 40) }}</h4>
                    <div class="flex items-center text-sm text-gray-600">
                        @if($post->category)
                            <div class="w-2 h-2 rounded-full mr-2" style="background-color: {{ $post->category->color }}"></div>
                            <span>{{ $post->category->name }}</span>
                        @endif
                        <span class="mx-2">•</span>
                        <span>{{ $post->created_at->format('M d') }}</span>
                    </div>
                </div>
            </div>
            <div class="flex space-x-2">
                @if($post->is_published)
                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                        <i class="fas fa-check-circle mr-1"></i>Published
                    </span>
                @else
                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                        <i class="fas fa-edit mr-1"></i>Draft
                    </span>
                @endif
                <a href="{{ route('admin.posts.edit', $post) }}" 
                   class="text-primary hover:text-blue-700">
                    <i class="fas fa-edit"></i>
                </a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="mt-4 text-center">
        <a href="{{ route('admin.posts.index') }}" 
           class="text-primary hover:text-blue-700 text-sm font-medium">
            View All Posts →
        </a>
    </div>
</div>
@endif
@endsection
