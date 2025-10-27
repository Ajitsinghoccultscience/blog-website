@extends('admin.layout')

@section('title', 'View Post')
@section('page-title', 'Post Details')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex justify-between items-start mb-6">
            <div>
                <h2 class="text-2xl font-bold text-gray-900">{{ $post->title }}</h2>
                <div class="flex items-center mt-2 space-x-4">
                    @if($post->category)
                        <div class="flex items-center">
                            <div class="w-3 h-3 rounded-full mr-2" style="background-color: {{ $post->category->color }}"></div>
                            <span class="text-gray-600">{{ $post->category->name }}</span>
                        </div>
                    @endif
                    <span class="text-gray-500">•</span>
                    <span class="text-gray-600">{{ $post->created_at->format('M d, Y') }}</span>
                </div>
            </div>
            <div class="flex space-x-3">
                <a href="{{ route('admin.posts.edit', $post) }}" 
                   class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                    <i class="fas fa-edit mr-2"></i>Edit
                </a>
                <a href="{{ route('admin.posts.index') }}" 
                   class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition-colors">
                    <i class="fas fa-arrow-left mr-2"></i>Back
                </a>
            </div>
        </div>

        <!-- Featured Image -->
        @if($post->featured_image)
            <div class="mb-6">
                <img src="{{ Storage::url($post->featured_image) }}" 
                     alt="{{ $post->title }}" 
                     class="w-full h-64 object-cover rounded-lg">
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Post Content -->
            <div class="lg:col-span-2">
                <div class="prose max-w-none">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Content</h3>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        {!! nl2br(e($post->content)) !!}
                    </div>
                </div>

                @if($post->excerpt)
                <div class="mt-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Excerpt</h3>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="text-gray-700">{{ $post->excerpt }}</p>
                    </div>
                </div>
                @endif
            </div>

            <!-- Post Details -->
            <div class="space-y-6">
                <!-- Status & Publishing -->
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Publishing</h3>
                    
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-gray-500">Status:</span>
                            @if($post->is_published)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    <i class="fas fa-check-circle mr-1"></i>Published
                                </span>
                            @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                    <i class="fas fa-edit mr-1"></i>Draft
                                </span>
                            @endif
                        </div>
                        
                        @if($post->published_at)
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-medium text-gray-500">Published:</span>
                                <span class="text-sm text-gray-900">{{ $post->published_at->format('M d, Y g:i A') }}</span>
                            </div>
                        @endif
                        
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-gray-500">Created:</span>
                            <span class="text-sm text-gray-900">{{ $post->created_at->format('M d, Y g:i A') }}</span>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-gray-500">Updated:</span>
                            <span class="text-sm text-gray-900">{{ $post->updated_at->format('M d, Y g:i A') }}</span>
                        </div>
                    </div>
                </div>

                <!-- SEO Information -->
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">SEO Information</h3>
                    
                    <div class="space-y-3">
                        <div>
                            <span class="text-sm font-medium text-gray-500">Meta Title:</span>
                            <p class="text-sm text-gray-900 mt-1">
                                {{ $post->meta_title ?: 'Not set (will use post title)' }}
                            </p>
                        </div>
                        
                        <div>
                            <span class="text-sm font-medium text-gray-500">Meta Description:</span>
                            <p class="text-sm text-gray-900 mt-1">
                                {{ $post->meta_description ?: 'Not set (will use excerpt)' }}
                            </p>
                        </div>
                        
                        <div>
                            <span class="text-sm font-medium text-gray-500">Slug:</span>
                            <p class="text-sm text-gray-900 mt-1">
                                <code class="bg-gray-200 px-2 py-1 rounded text-xs">{{ $post->slug }}</code>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Quick Actions</h3>
                    
                    <div class="space-y-2">
                        <form action="{{ route('admin.posts.toggle-status', $post) }}" method="POST" class="w-full">
                            @csrf
                            <button type="submit" 
                                    class="w-full text-left px-3 py-2 text-sm {{ $post->is_published ? 'text-yellow-700 hover:bg-yellow-100' : 'text-green-700 hover:bg-green-100' }} rounded transition-colors">
                                <i class="fas fa-{{ $post->is_published ? 'eye-slash' : 'eye' }} mr-2"></i>
                                {{ $post->is_published ? 'Unpublish' : 'Publish' }} Post
                            </button>
                        </form>
                        
                        <a href="{{ route('blog.post', [$post->category->slug, $post->slug]) }}" 
                           target="_blank"
                           class="block w-full text-left px-3 py-2 text-sm text-blue-700 hover:bg-blue-100 rounded transition-colors">
                            <i class="fas fa-external-link-alt mr-2"></i>
                            View on Website
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Danger Zone -->
        <div class="mt-8 pt-6 border-t border-gray-200">
            <h3 class="text-lg font-semibold text-red-600 mb-4">Danger Zone</h3>
            <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                <div class="flex items-center justify-between">
                    <div>
                        <h4 class="text-sm font-medium text-red-800">Delete Post</h4>
                        <p class="text-sm text-red-600 mt-1">
                            Once deleted, this post cannot be recovered.
                        </p>
                    </div>
                    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" 
                          onsubmit="return confirm('Are you sure you want to delete this post? This action cannot be undone.')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition-colors">
                            <i class="fas fa-trash mr-2"></i>Delete Post
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
