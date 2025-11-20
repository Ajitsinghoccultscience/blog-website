@extends('layouts.homepage')

@section('title', $category->name)
@section('description', $category->description ?: 'Explore posts in the ' . $category->name . ' category.')

@php
use Illuminate\Support\Facades\Storage;
@endphp

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Page Title -->
    <div class="text-center mb-8 py-12">
        <h1 class="text-2xl font-bold text-gray-900">Category: {{ $category->name }}</h1>
    </div>

    <!-- Two Column Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        <!-- Main Content Column (3/4 width) -->
        <div class="lg:col-span-3">
    @if($posts->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($posts as $post)
                        <article class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden border border-gray-100">
                            <!-- Post Image -->
                            <div class="relative">
                                <a href="{{ route('blog.post', $post->slug) }}/" class="block">
                                    @if($post->featured_image)
                                        <img src="{{ Storage::url($post->featured_image) }}" 
                                             alt="{{ $post->featured_image_alt ?? $post->title }}" 
                                             class="w-full h-56 object-cover hover:opacity-90 transition-opacity duration-200"
                                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                        <div class="w-full h-56 bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center" style="display: none;">
                                            <span class="text-white text-sm">No Image</span>
                                        </div>
                                    @else
                                        <div class="w-full h-56 bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center">
                                            <span class="text-white text-sm">No Image</span>
                                        </div>
                                    @endif
                                </a>
                    
                                <!-- Category Badge -->
                                <!-- <div class="absolute top-3 right-3">
                                    <span class="bg-orange-600 text-white text-xs font-bold px-3 py-1 rounded-sm shadow-md">
                                        {{ strtoupper($category->name) }}
                        </span>
                                </div> -->
                            </div>
                            
                            <!-- Post Content -->
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3 leading-tight">
                                    <a href="{{ route('blog.post', $post->slug) }}/" class="hover:text-orange-600 transition-colors">
                                        {{ strtolower($post->title) }}
                            </a>
                        </h3>
                        
                        @if($post->excerpt)
                                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">{{ Str::limit($post->excerpt, 120) }}</p>
                                @elseif($post->content)
                                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">{{ Str::limit(strip_tags($post->content), 120) }}</p>
                        @endif
                        
                                <div class="flex items-center justify-between">
                            <a href="{{ route('blog.post', $post->slug) }}/" 
                                       class="text-orange-600 hover:text-orange-800 font-medium text-sm">
                                        READ MORE
                            </a>
                                    <div class="text-xs text-gray-500">
                                        {{ $post->published_at ? $post->published_at->format('F d, Y') : 'No Date' }} - No Comments
                                    </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <!-- Pagination -->
                <div class="mt-8 flex justify-center">
                    <nav class="flex items-center">
                        @if($posts->previousPageUrl())
                            <a href="{{ $posts->previousPageUrl() }}" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-50 hover:text-gray-900 transition-colors duration-200">
                                « Previous
                            </a>
                        @endif
                        
                        <div class="flex items-center">
                            @for($i = 1; $i <= $posts->lastPage(); $i++)
                                @if($i == $posts->currentPage())
                                    <span class="px-4 py-2 text-sm font-medium text-white bg-orange-600 border border-orange-600">{{ $i }}</span>
                                @else
                                    <a href="{{ $posts->url($i) }}" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-orange-50 hover:text-orange-600 transition-colors duration-200">{{ $i }}</a>
                                @endif
                            @endfor
                        </div>
                        
                        @if($posts->nextPageUrl())
                            <a href="{{ $posts->nextPageUrl() }}" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-50 hover:text-gray-900 transition-colors duration-200">
                                Next »
                            </a>
                        @endif
                    </nav>
        </div>
    @else
        <div class="text-center py-12">
            <h3 class="text-2xl font-bold text-gray-900 mb-4">No Posts in This Category</h3>
            <p class="text-gray-600 mb-6">Check back soon for posts in {{ $category->name }}.</p>
            <a href="{{ route('blog.index') }}/" 
                       class="inline-flex items-center px-4 py-2 bg-orange-600 text-yellow-100 rounded-lg hover:bg-orange-700 transition-colors shadow-lg">
                ← Back to All Posts
            </a>
        </div>
    @endif
        </div>

        <!-- Sidebar Column (1/4 width) -->
        <div class="lg:col-span-1">
            <div class="space-y-8">
                <!-- Popular Posts Section -->
                <div>
                    <h3 class="text-lg font-bold text-orange-600 mb-4 border-b-2 border-orange-600 pb-2">
                        Recent Posts
                    </h3>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="space-y-4">
                            @php
                                $popularPosts = \App\Models\Post::with('category')
                                    ->where('is_published', true)
                                    ->orderBy('published_at', 'desc')
                                    ->limit(5)
                                    ->get();
                            @endphp
                            
                            @foreach($popularPosts as $popularPost)
                                <div class="flex space-x-3">
                                    <div class="flex-shrink-0 w-16 h-16 rounded-lg overflow-hidden">
                                        @if($popularPost->featured_image)
                                            <img src="{{ Storage::url($popularPost->featured_image) }}" 
                                                 alt="{{ $popularPost->featured_image_alt ?? $popularPost->title }}" 
                                                 class="w-full h-full object-cover"
                                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                            <div class="w-full h-full bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center" style="display: none;">
                                                <span class="text-white text-xs">No Image</span>
                                            </div>
                                        @else
                                            <div class="w-full h-full bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center">
                                                <span class="text-white text-xs">No Image</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h4 class="text-sm font-bold text-gray-900 mb-1 leading-tight hover:text-orange-600 transition-colors">
                                            <a href="{{ route('blog.post', $popularPost->slug) }}/">{{ $popularPost->title }}</a>
                                        </h4>
                                        <p class="text-xs text-gray-500">{{ $popularPost->published_at ? $popularPost->published_at->format('F d, Y') : 'No Date' }}</p>
                                    </div>
                                </div>
                @endforeach
            </div>
        </div>
                </div>

                <!-- Category Section -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-bold text-orange-600 mb-4 border-b-2 border-orange-600 pb-2">
                        Category
                    </h3>
                    <div class="space-y-2">
                        @if(isset($categories) && $categories->count() > 0)
                            @foreach($categories as $cat)
                                <div class="border-b border-gray-200 pb-2 last:border-b-0">
                                    <a href="{{ route('blog.category', $cat->slug) }}/" 
                                       class="text-gray-700 text-sm hover:text-orange-600 transition-colors font-medium">
                                        {{ strtoupper($cat->name) }}
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <p class="text-gray-400 text-sm">No categories available</p>
    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
