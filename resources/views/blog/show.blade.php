@extends('layouts.homepage')

@section('title', $metaTitle . ' - ALL INDIA INSTITUTE OF OCCULT SCIENCE')
@section('description', $metaDescription)
@section('og_image', $post->featured_image ? Storage::url($post->featured_image) : asset('images/occult-blog-og.jpg'))

@php
use Illuminate\Support\Facades\Storage;
@endphp

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        <!-- Main Content Area -->
        <div class="lg:col-span-3">
            <!-- Metadata Header -->
            <div class="flex items-center text-sm text-gray-600 mb-4">
                <span class="mr-2">◆</span>
                <span class="mr-4">{{ $post->published_at ? $post->published_at->format('F j, Y') : 'No Date' }}</span>
                <span class="mr-2">◷</span>
                <span class="mr-4">{{ $post->published_at ? $post->published_at->format('g:i A') : 'No Time' }}</span>
                @if($post->category)
                    <span class="mr-2">◆</span>
                    <span class="text-gray-700">{{ $post->category->name }}</span>
                @endif
            </div>

            <!-- Featured Image -->
            <div class="relative mb-6">
                @if($post->featured_image)
                    <img src="{{ Storage::url($post->featured_image) }}" 
                         alt="{{ $post->featured_image_alt ?? $post->title }}" 
                         class="w-full h-auto object-contain rounded-lg mx-auto"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="w-full h-96 bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center rounded-lg" style="display: none;">
                        <span class="text-white text-lg">No Featured Image</span>
                    </div>
                @else
                    <div class="w-full h-96 bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center rounded-lg">
                        <span class="text-white text-lg">No Featured Image</span>
                    </div>
                @endif
            </div>

            <!-- Title -->
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ $post->title }}</h1>

            <!-- Article Content -->
            <article class="bg-white">

           
          
            <!-- Content -->
            <div class="prose prose-lg max-w-none text-gray-800">
                    <style>
                        .prose img {
                            max-width: 100%;
                            height: auto;
                            border-radius: 8px;
                            margin: 1rem 0;
                            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
                        }
                        .prose figure {
                            margin: 1.5rem 0;
                        }
                        .prose figcaption {
                            text-align: center;
                            font-size: 0.875rem;
                            color: #6b7280;
                            margin-top: 0.5rem;
                        }
                        .prose h1, article h1 {
                            font-size: 2.5rem;
                            font-weight: 800;
                            color: #1a1a1a;
                            margin-bottom: 1rem;
                        }
                        .prose h2, article h2 {
                            font-size: 2rem;
                            font-weight: 700;
                            color: #222;
                            margin-top: 2rem;
                            margin-bottom: 1rem;
                        }
                        .prose h3, article h3 {
                            font-size: 1.5rem;
                            font-weight: 600;
                            color: #333;
                            margin-top: 1.5rem;
                            margin-bottom: 0.75rem;
                        }
                        .prose h4, article h4 {
                            font-size: 1.25rem;
                            font-weight: 500;
                            color: #444;
                            margin-top: 1rem;
                            margin-bottom: 0.5rem;
                        }
                        .prose p, article p {
                            font-size: 1rem;
                            line-height: 1.75;
                            color: #555;
                            margin-bottom: 1.2em;
                        }
                        .prose a, article a {
                            color: #0073e6;
                            text-decoration: none;
                            font-weight: 500;
                        }
                        .prose a:hover, article a:hover {
                            color: #005bb5;
                            text-decoration: underline;
                        }
                        .prose ul, .prose ol, article ul, article ol {
                            margin-left: 1.5rem;
                            line-height: 1.7;
                        }
                    </style>
                    {!! $processedContent !!}
                </div>
            </article>
        </div>

        <!-- Sidebar -->
        <div class="lg:col-span-1">
            <div class="sticky top-8">
                <!-- Social Media Buttons -->
                <div class="space-y-3 mb-8">
                    <a href="https://www.facebook.com/allindiainstituteofoccultscience/" target="_blank" class="flex items-center w-full bg-blue-600 text-white px-4 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                        <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                        <span class="font-medium">Like Us On Facebook</span>
                    </a>
                    
                    <a href="https://www.instagram.com/occultscience_/" target="_blank" class="flex items-center w-full bg-gradient-to-r from-purple-500 via-pink-500 to-orange-500 text-white px-4 py-3 rounded-lg hover:from-purple-600 hover:via-pink-600 hover:to-orange-600 transition-all duration-300 shadow-lg">
                        <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                        <span class="font-medium">Follow Us On Instagram</span>
                    </a>
                    
                    <a href="https://www.youtube.com/@official_occultscience" target="_blank" class="flex items-center w-full bg-red-600 text-white px-4 py-3 rounded-lg hover:bg-red-700 transition-colors shadow-lg">
                        <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                        <span class="font-medium">Subscribe To Our Channel</span>
                    </a>
                </div>

                <!-- Latest Posts -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
                    <div class="bg-orange-600 text-white px-4 py-3">
                        <h3 class="font-bold text-lg">Latest Posts</h3>
                    </div>
                    <div class="p-4">
                        @if(isset($categories) && $categories->count() > 0)
                            @php
                                $latestPosts = \App\Models\Post::with('category')
                                    ->where('is_published', true)
                                    ->where('id', '!=', $post->id)
                                    ->orderBy('published_at', 'desc')
                                    ->limit(5)
                                    ->get();
                            @endphp
                            
                            @foreach($latestPosts as $latestPost)
                                <div class="flex items-start space-x-3 mb-4 pb-4 border-b border-gray-200 last:border-b-0">
                                    <div class="flex-shrink-0 w-16 h-16 rounded-lg overflow-hidden">
                                        @if($latestPost->featured_image)
                                            <img src="{{ Storage::url($latestPost->featured_image) }}" 
                                                 alt="{{ $latestPost->featured_image_alt ?? $latestPost->title }}" 
                                                 class="w-full h-full object-cover"
                                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                            <div class="w-full h-full bg-gradient-to-br from-purple-500 to-indigo-600 flex items-center justify-center" style="display: none;">
                                                <span class="text-white text-xs">No Image</span>
                                            </div>
                                        @else
                                            <div class="w-full h-full bg-gradient-to-br from-purple-500 to-indigo-600 flex items-center justify-center">
                                                <span class="text-white text-xs">No Image</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="text-sm font-medium text-gray-900 mb-1 hover:text-orange-600 transition-colors">
                                            <a href="{{ route('blog.post', $latestPost->slug) }}">{{ Str::limit($latestPost->title, 50) }}</a>
                                        </h4>
                                        <p class="text-xs text-gray-500">{{ $latestPost->published_at ? $latestPost->published_at->format('F j, Y') : 'No Date' }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p class="text-gray-500 text-sm">No posts available</p>
                        @endif
                    </div>
                </div>

                <!-- Category Section -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-orange-600 text-white px-4 py-3">
                        <h3 class="font-bold text-lg">Category</h3>
                    </div>
                    <div class="p-0">
                        @if(isset($categories) && $categories->count() > 0)
                            @foreach($categories as $category)
                                <div class="px-4 py-3 border-b border-gray-200 last:border-b-0 hover:bg-gray-50 transition-colors">
                                    <a href="{{ route('blog.category', $category->slug) }}" 
                                       class="block text-gray-900 font-bold text-sm uppercase hover:text-orange-600 transition-colors">
                                        {{ $category->name }}
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div class="px-4 py-3">
                                <p class="text-gray-500 text-sm">No categories available</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            </div>
        </div>

    <!-- Related Posts -->
    @if($relatedPosts->count() > 0)
        <div class="mt-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Related Posts</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($relatedPosts as $relatedPost)
                    <article class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                        @if($relatedPost->featured_image)
                            <img src="{{ Storage::url($relatedPost->featured_image) }}" 
                                 alt="{{ $relatedPost->featured_image_alt ?? $relatedPost->title }}" 
                                 class="w-full h-32 object-contain"
                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="w-full h-32 bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center" style="display: none;">
                                <span class="text-white text-sm">No Image</span>
                            </div>
                        @else
                            <div class="w-full h-32 bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center">
                                <span class="text-white text-sm">No Image</span>
                            </div>
                        @endif
                        
                        <div class="p-4">
                            @if($relatedPost->category)
                                <span class="inline-block px-2 py-1 text-xs font-semibold rounded-full mb-2 bg-gray-100 text-gray-700">
                                    {{ $relatedPost->category->name }}
                                </span>
                            @endif
                            
                            <h3 class="font-bold text-gray-900 mb-2">
                                <a href="{{ route('blog.post', $relatedPost->slug) }}" class="hover:text-orange-600 transition-colors">
                                    {{ $relatedPost->title }}
                                </a>
                            </h3>
                            
                            <p class="text-sm text-gray-500">{{ $relatedPost->published_at ? $relatedPost->published_at->format('M d, Y') : 'No Date' }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    @endif

    <!-- Navigation -->
    <div class="mt-12 flex justify-between">
        <a href="{{ route('blog.index') }}" 
           class="inline-flex items-center px-4 py-2 bg-orange-600 text-yellow-100 rounded-lg hover:bg-orange-700 transition-colors shadow-lg">
            ← Back to Blog
        </a>
        
        @if($post->category)
            <a href="{{ route('blog.category', $post->category->slug) }}" 
               class="inline-flex items-center px-4 py-2 border border-orange-600 text-orange-600 rounded-lg hover:bg-orange-50 transition-colors">
                More in {{ $post->category->name }} →
            </a>
        @endif
    </div>
</div>
@endsection
