@extends('admin.layout')

@section('title', 'Posts')
@section('page-title', 'Blog Posts')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <h2 class="text-xl font-semibold text-gray-800">All Posts</h2>
    <a href="{{ route('admin.posts.create') }}" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
        <i class="fas fa-plus mr-2"></i>Create New Post
    </a>
</div>

<!-- Search -->
<div class="bg-white rounded-lg shadow p-4 mb-6">
    <form method="GET" class="flex gap-4 items-end">
        <div class="flex-1">
            <label class="block text-sm font-medium text-gray-700 mb-1">Search Posts by Title</label>
            <input type="text" name="search" value="{{ request('search') }}" 
                   placeholder="Enter post title..." 
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
        </div>
        
        <button type="submit" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600 transition-colors">
            <i class="fas fa-search mr-2"></i>Search
        </button>
        
        @if(request()->has('search'))
            <a href="{{ route('admin.posts.index') }}" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400 transition-colors">
                <i class="fas fa-times mr-2"></i>Clear
            </a>
        @endif
    </form>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Post</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tags</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Published</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($posts as $post)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            @if($post->featured_image)
                                <img src="{{ Storage::url($post->featured_image) }}" 
                                     alt="{{ $post->title }}" 
                                     class="w-12 h-12 rounded-lg object-cover mr-4">
                            @else
                                <div class="w-12 h-12 bg-gray-200 rounded-lg mr-4 flex items-center justify-center">
                                    <i class="fas fa-image text-gray-400"></i>
                                </div>
                            @endif
                            <div>
                                <div class="text-sm font-medium text-gray-900">{{ $post->title }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($post->category)
                            <div class="flex items-center">
                                <div class="w-3 h-3 rounded-full mr-2" style="background-color: {{ $post->category->color }}"></div>
                                <span class="text-sm text-gray-900">{{ $post->category->name }}</span>
                            </div>
                        @else
                            <span class="text-sm text-gray-500">No Category</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($post->tags)
                            <div class="flex flex-wrap gap-1">
                                @foreach(explode(',', $post->tags) as $tag)
                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                        {{ trim($tag) }}
                                    </span>
                                @endforeach
                            </div>
                        @else
                            <span class="text-sm text-gray-500">No Tags</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($post->is_published)
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <i class="fas fa-check-circle mr-1"></i>Published
                            </span>
                        @else
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                <i class="fas fa-edit mr-1"></i>Draft
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        @if($post->published_at)
                            {{ $post->published_at->format('M d, Y') }}
                        @else
                            <span class="text-gray-400">Not published</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $post->created_at->format('M d, Y') }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            <a href="{{ route('blog.post', $post->slug) }}" 
                               target="_blank"
                               class="text-gray-600 hover:text-gray-800" title="View on Website">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.posts.edit', $post) }}" 
                               class="text-primary hover:text-blue-700" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.posts.toggle-status', $post) }}" method="POST" class="inline">
                                @csrf
                                <button type="submit" 
                                        class="text-{{ $post->is_published ? 'yellow' : 'green' }}-600 hover:text-{{ $post->is_published ? 'yellow' : 'green' }}-800"
                                        title="{{ $post->is_published ? 'Unpublish' : 'Publish' }}">
                                    <i class="fas fa-{{ $post->is_published ? 'eye-slash' : 'eye' }}"></i>
                                </button>
                            </form>
                            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="inline" 
                                  onsubmit="return confirm('Are you sure you want to delete this post?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="px-6 py-12 text-center text-gray-500">
                        <i class="fas fa-file-alt text-4xl mb-4"></i>
                        <p class="text-lg">No posts found</p>
                        <p class="text-sm">Get started by creating your first blog post.</p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($posts->hasPages())
        <div class="px-6 py-3 border-t border-gray-200">
            {{ $posts->links() }}
        </div>
    @endif
</div>
@endsection
