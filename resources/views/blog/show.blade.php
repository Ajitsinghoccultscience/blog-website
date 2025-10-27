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
                <span class="mr-2">•</span>
                <span class="mr-4">{{ $post->published_at ? $post->published_at->format('F j, Y') : 'No Date' }}</span>
                <span class="mr-2">◷</span>
                <span class="mr-4">{{ $post->published_at ? $post->published_at->format('g:i A') : 'No Time' }}</span>
                <span class="mr-2">◆</span>
            @if($post->category)
                    <span class="text-gray-700">{{ $post->category->name }}</span>
            @endif
            </div>

            <!-- Featured Image -->
            <div class="relative mb-6">
                @if($post->featured_image)
                    <img src="{{ Storage::url($post->featured_image) }}" 
                         alt="{{ $post->title }}" 
                         class="w-full h-96 object-cover rounded-lg"
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

            <!-- Article Content -->
            <article class="bg-white">
                <!-- Title -->
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">{{ $post->title }}</h1>

            <!-- Excerpt -->
            @if($post->excerpt)
                    <div class="bg-gray-50 border-l-4 border-orange-500 p-4 mb-8">
                    <p class="text-lg text-gray-700 italic">{{ $post->excerpt }}</p>
                </div>
            @endif

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
                    <a href="#" class="flex items-center w-full bg-blue-600 text-white px-4 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                        <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                        <span class="font-medium">Like Us On Facebook</span>
                    </a>
                    
                    <a href="#" class="flex items-center w-full bg-orange-600 text-yellow-100 px-4 py-3 rounded-lg hover:bg-orange-700 transition-colors shadow-lg">
                        <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.746-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"/>
                        </svg>
                        <span class="font-medium">Follow Us On Instagram</span>
                    </a>
                    
                    <a href="#" class="flex items-center w-full bg-orange-600 text-yellow-100 px-4 py-3 rounded-lg hover:bg-orange-700 transition-colors shadow-lg">
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
                                                 alt="{{ $latestPost->title }}" 
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
                                            <a href="{{ route('blog.post', [$latestPost->category->slug, $latestPost->slug]) }}">{{ Str::limit($latestPost->title, 50) }}</a>
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
                                 alt="{{ $relatedPost->title }}" 
                                 class="w-full h-32 object-cover"
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
                                <a href="{{ route('blog.post', [$relatedPost->category->slug, $relatedPost->slug]) }}" class="hover:text-orange-600 transition-colors">
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
