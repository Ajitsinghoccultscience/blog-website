@extends('layouts.homepage')

@section('title', 'ALL INDIA INSTITUTE OF OCCULT SCIENCE - Home')
@section('description', 'Discover ancient wisdom, mystical practices, and esoteric knowledge through our comprehensive occult science education.')

@php
use Illuminate\Support\Facades\Storage;
@endphp

@section('content')
    <!-- Banner Image -->
    <div class="banner-container">
        <img src="{{ asset('images/NEE (1) (3).jpg') }}" 
             alt="Occult Science Banner" 
             class="w-full h-auto object-cover">
    </div>

    <!-- Recent Posts Section -->
<div class="bg-white py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="mb-4">
            <div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-t-lg px-6 py-4">
                <h2 class="text-white font-bold text-xl">Recent Posts</h2>
            </div>
        </div>
        
        @if($posts->count() > 0)
            <!-- Swiper Container -->
            <div class="swiper recent-posts-swiper">
                <!-- Swiper Wrapper -->
                <div class="swiper-wrapper">
                    @foreach($posts as $post)
                        <div class="swiper-slide">
                                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                                            <!-- Post Image -->
                        <div class="relative">
                            <a href="{{ route('blog.post', $post->slug) }}" class="block">
                            <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                @if($post->featured_image)
                                                        <img src="{{ Storage::url($post->featured_image) }}" 
                                         alt="{{ $post->title }}" 
                                                                 class="w-full h-full object-cover hover:opacity-90 transition-opacity duration-200"
                                                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                                        <div class="w-full h-full bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center" style="display: none;">
                                                            <span class="text-white text-sm">No Image</span>
                                                        </div>
                                @else
                                                        <div class="w-full h-full bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center">
                                                            <span class="text-white text-sm">No Image</span>
                                    </div>
                                @endif
                            </div>
                                                <!-- Badge -->
                                                <div class="absolute top-3 left-3">
                                                    <span class="bg-orange-600 text-white text-xs font-bold px-3 py-1 rounded-sm shadow-md flex items-center">
                                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        Occult Science
                                                    </span>
                            </div>
                                                </a>
                                            </div>
                                            
                                            <!-- Post Content -->
                                            <div class="p-6">
                                                <p class="text-gray-500 text-sm mb-2">
                                        {{ $post->published_at ? $post->published_at->format('d M, Y') : 'No date' }}
                                    </p>
                                                <h3 class="text-lg font-bold text-gray-900 mb-3 leading-tight hover:text-orange-600 transition-colors">
                                                    <a href="{{ route('blog.post', $post->slug) }}">{{ $post->title }}</a>
                                                </h3>
                                                <p class="text-gray-600 text-sm leading-relaxed mb-3">
                                {{ $post->excerpt ? Str::limit($post->excerpt, 120) : Str::limit(strip_tags($post->content), 120) }}
                            </p>
                                                <a href="{{ route('blog.post', $post->slug) }}" 
                                                   class="text-orange-600 hover:text-orange-700 font-medium text-sm transition-colors">
                                                    Read More...
                                                </a>
                                            </div>
                                        </div>
                        </div>
                    @endforeach
                </div>
                
                <!-- Swiper Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                
                <!-- Swiper Pagination -->
                <div class="swiper-pagination"></div>
            </div>
            
        @else
            <div class="text-center text-gray-500">
                <p>No posts available at the moment.</p>
            </div>
        @endif
    </div>
</div>

<!-- Main Content Layout - Desktop Two Column, Mobile Single Column -->
<div class="bg-white py-4 lg:py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8">
            <!-- Left Column - Category Sections (2/3 width on desktop, full width on mobile) -->
            <div class="lg:col-span-2 space-y-6 lg:space-y-8 order-1 lg:order-1">
                @if($categories->count() > 0)
                    @foreach($categories->take(5) as $category)
                        @php
                            $categoryPosts = \App\Models\Post::with('category')
                                ->where('is_published', true)
                                ->where('category_id', $category->id)
                                ->orderBy('published_at', 'desc')
                                ->limit(3)
                                ->get();
                        @endphp
                        
                        @if($categoryPosts->count() > 0)
                            <!-- Category Section -->
                            <div>
                                <!-- Category Header - Orange Gradient -->
                                <div class="mb-3">
                                    <div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-t-lg px-6 py-4">
                                        <h2 class="text-white font-bold text-xl">{{ $category->name }}</h2>
                                    </div>
                                </div>
                                
                                <!-- Main Featured Post - Horizontal Card -->
                                <article class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden border border-gray-100 mb-6">
                                    <div class="flex flex-col md:flex-row">
                                        <!-- Post Image - Left Side -->
                                        <div class="md:w-1/3">
                                            <div class="relative h-48 md:h-full">
                                                @if($categoryPosts[0]->featured_image)
                                                    <img src="{{ Storage::url($categoryPosts[0]->featured_image) }}" 
                                                         alt="{{ $categoryPosts[0]->title }}" 
                                                         class="w-full h-full object-cover"
                                                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                                    <div class="w-full h-full bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center" style="display: none;">
                                                        <span class="text-white text-sm">No Image</span>
                                                    </div>
                                                @else
                                                    <div class="w-full h-full bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center">
                                                        <span class="text-white text-sm">No Image</span>
                                                    </div>
                                                @endif
                                                
                                                <!-- Badge -->
                                                <div class="absolute top-3 right-3">
                                                    <span class="bg-orange-600 text-white text-xs font-bold px-3 py-1 rounded-sm shadow-md flex items-center">
                                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        @if($post->category && $post->category->name)
                                                            {{ $post->category->name }}
                                                        @else
                                                            Uncategorized
                                                        @endif
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Post Content - Right Side -->
                                        <div class="md:w-2/3 p-3 md:p-6">
                                            <p class="text-gray-500 text-xs md:text-sm mb-1 md:mb-2">
                                                {{ $categoryPosts[0]->published_at ? $categoryPosts[0]->published_at->format('d M, Y') : 'No date' }}                                            </p>
                                            <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-2 md:mb-3 leading-tight hover:text-orange-600 transition-colors">
                                                <a href="{{ route('blog.post', $categoryPosts[0]->slug) }}">{{ Str::limit($categoryPosts[0]->title, 40) }}</a>
                                            </h3>
                                            <p class="text-gray-600 text-xs md:text-sm leading-relaxed mb-2 md:mb-4">
                                                {{ $categoryPosts[0]->excerpt ? Str::limit($categoryPosts[0]->excerpt, 80) : Str::limit(strip_tags($categoryPosts[0]->content), 80) }}
                                            </p>
                                            <a href="{{ route('blog.post', $categoryPosts[0]->slug) }}" class="text-orange-600 hover:text-orange-800 font-medium text-xs md:text-sm">
                                                Read More...
                                            </a>
                                        </div>
                                    </div>
                                </article>
                                
                                <!-- Two Additional Posts - Always Side by Side -->
                                @if($categoryPosts->count() > 1)
                                    <!-- 2 posts side by side for all screen sizes -->
                                    <div class="grid grid-cols-2 gap-3 md:gap-6">
                                        @foreach($categoryPosts->skip(1) as $post)
                                            <article class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden border border-gray-100">
                                                <!-- Post Image -->
                                                <div class="relative h-32 md:h-48">
                                                    @if($post->featured_image)
                                                        <img src="{{ Storage::url($post->featured_image) }}" 
                                                             alt="{{ $post->title }}" 
                                                             class="w-full h-full object-cover"
                                                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                                        <div class="w-full h-full bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center" style="display: none;">
                                                            <span class="text-white text-sm">No Image</span>
                                                        </div>
                                                    @else
                                                        <div class="w-full h-full bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center">
                                                            <span class="text-white text-sm">No Image</span>
                                                        </div>
                                                    @endif
                                                </div>
                                                
                                                <!-- Post Content -->
                                                <div class="p-2 md:p-4">
                                                    <h3 class="text-sm md:text-lg font-bold text-gray-900 mb-1 md:mb-2 leading-tight hover:text-orange-600 transition-colors">
                                                        <a href="{{ route('blog.post', $post->slug) }}">{{ Str::limit($post->title, 30) }}</a>
                                                    </h3>
                                                    <p class="text-gray-600 text-xs md:text-sm leading-relaxed mb-1 md:mb-2">
                                                        {{ $post->excerpt ? Str::limit($post->excerpt, 60) : Str::limit(strip_tags($post->content), 60) }}
                                                    </p>
                                                    <a href="{{ route('blog.post', $post->slug) }}" 
                                                       class="text-orange-600 hover:text-orange-700 font-medium text-xs md:text-sm transition-colors">
                                                        Read More...
                                                    </a>
                                                </div>
                                            </article>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
            
            <!-- Right Column - Sidebar (1/3 width on desktop, full width on mobile) -->
            <div class="lg:col-span-1 space-y-6 lg:space-y-8 order-2 lg:order-2">
    <!-- Categories Section -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <!-- Categories Header -->
                    <div class="bg-orange-600 text-white px-4 py-3">
                        <h3 class="font-bold text-lg">Categories</h3>
                    </div>
                    
                    <!-- Categories List -->
                    <div class="p-0">
                        @if($categories->count() > 0)
                            @foreach($categories as $category)
                                <div class="px-4 py-3 border-b border-gray-200 last:border-b-0 hover:bg-gray-50 transition-colors">
                                    <a href="{{ route('blog.category', $category->slug) }}" 
                                       class="block text-gray-900 font-medium text-sm hover:text-orange-600 transition-colors">
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
                
                <!-- Recent Posts Section -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <!-- Recent Posts Header -->
                    <div class="bg-orange-600 text-white px-4 py-3">
                        <h3 class="font-bold text-lg">Recent Posts</h3>
                    </div>
                    
                    <!-- Recent Posts List -->
                    <div class="p-4">
                        @php
                            $recentPosts = \App\Models\Post::with('category')
                                ->where('is_published', true)
                                ->orderBy('published_at', 'desc')
                                ->limit(5)
                                ->get();
                        @endphp
                        
                        @if($recentPosts->count() > 0)
                            <ul class="space-y-3">
                                @foreach($recentPosts as $post)
                                    <li class="flex items-start">
                                        <div class="w-2 h-2 bg-orange-600 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                        <a href="{{ route('blog.post', $post->slug) }}" class="text-gray-900 text-sm hover:text-orange-600 transition-colors leading-relaxed">
                                            {{ Str::limit($post->title, 60) }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-gray-500 text-sm">No posts available</p>
                        @endif
                    </div>
                </div>
                
                <!-- Newsletter Section -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <!-- Newsletter Header -->
                    <div class="bg-gradient-to-r from-orange-500 to-orange-600 px-4 py-3">
                        <h3 class="text-white font-bold text-lg">Subscribe to Our Newsletter</h3>
                    </div>
                    
                    <!-- Newsletter Form -->
                    <div class="p-4">
                        <form class="space-y-4">
                            <div>
                                <label class="block text-gray-700 text-sm font-medium mb-2">Email us *</label>
                                <input type="email" 
                                       placeholder="Enter Email Address" 
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                            </div>
                            <button type="submit" 
                                    class="w-full bg-orange-600 hover:bg-orange-700 text-yellow-100 font-medium py-2 px-4 rounded-md transition-colors duration-200 shadow-lg">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
/* Banner styling */
.banner-container {
    width: 100%;
    overflow: hidden;
    position: relative;
}

.banner-container img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.3s ease;
}

.banner-container:hover img {
    transform: scale(1.02);
}

@media (max-width: 768px) {
    .banner-container img {
        height: auto;
    }
}

@media (max-width: 480px) {
    .banner-container img {
        height: auto;
    }
}

/* Swiper Customization */
.recent-posts-swiper {
    padding: 20px 0 60px 0;
    position: relative;
    margin: 0 auto;
    max-width: 1200px;
}

.recent-posts-swiper .swiper-slide {
    height: auto;
    display: flex;
    align-items: stretch;
}

.recent-posts-swiper .swiper-slide > div {
    width: 100%;
    flex: 1;
}

/* Navigation Buttons */
.recent-posts-swiper .swiper-button-next,
.recent-posts-swiper .swiper-button-prev {
    color: #ea580c;
    background: rgba(255, 255, 255, 0.9);
    border-radius: 50%;
    width: 44px;
    height: 44px;
    margin-top: -22px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    transition: all 0.3s ease;
}

.recent-posts-swiper .swiper-button-next:hover,
.recent-posts-swiper .swiper-button-prev:hover {
    background: rgba(255, 255, 255, 1);
    transform: scale(1.1);
}

.recent-posts-swiper .swiper-button-next:after,
.recent-posts-swiper .swiper-button-prev:after {
    font-size: 18px;
    font-weight: bold;
}

/* Pagination Dots */
.recent-posts-swiper .swiper-pagination-bullet {
    background: #d1d5db;
    opacity: 1;
    width: 12px;
    height: 12px;
    transition: all 0.3s ease;
}

.recent-posts-swiper .swiper-pagination-bullet-active {
    background: #ea580c;
    transform: scale(1.2);
}

.recent-posts-swiper .swiper-pagination {
    bottom: 20px;
}

/* Mobile responsive adjustments */
@media (max-width: 768px) {
    .recent-posts-swiper {
        padding: 10px 20px 50px 20px;
        max-width: 100%;
    }
    
    /* Hide navigation buttons on mobile */
    .recent-posts-swiper .swiper-button-next,
    .recent-posts-swiper .swiper-button-prev {
        display: none;
    }
}

/* Desktop and tablet spacing */
@media (min-width: 769px) {
    .recent-posts-swiper {
        padding: 20px 40px 60px 40px;
    }
}
</style>
@endpush

@push('scripts')
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('Initializing Recent Posts Swiper...');
    
    // Initialize Swiper
    const swiper = new Swiper('.recent-posts-swiper', {
        // Optional parameters
        loop: false,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        
        // Pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            dynamicBullets: false,
        },
        
        // Responsive breakpoints
        breakpoints: {
            // Mobile
            320: {
                slidesPerView: 1,
                spaceBetween: 20,
                centeredSlides: true,
                autoplay: {
                    delay: 3000,
                }
            },
            // Tablet
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
                centeredSlides: false,
                autoplay: {
                    delay: 4000,
                }
            },
            // Desktop
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
                centeredSlides: false,
                autoplay: {
                    delay: 5000,
                }
            },
        },
        
        // Touch/Swipe settings
        touchRatio: 1,
        touchAngle: 45,
        grabCursor: true,
        
        // Speed
        speed: 600,
        
        // Events
        on: {
            init: function () {
                console.log('Recent Posts Swiper initialized with', this.slides.length, 'slides');
                console.log('Current slides per view:', this.params.slidesPerView);
            },
            slideChange: function () {
                console.log('Slide changed to:', this.activeIndex);
            },
            autoplayStart: function () {
                console.log('Autoplay started');
            },
            autoplayStop: function () {
                console.log('Autoplay stopped');
            },
        },
    });
    
    // Pause autoplay on hover (desktop only)
    const swiperContainer = document.querySelector('.recent-posts-swiper');
    if (swiperContainer) {
        swiperContainer.addEventListener('mouseenter', () => {
            swiper.autoplay.stop();
            console.log('Autoplay paused on hover');
        });
        
        swiperContainer.addEventListener('mouseleave', () => {
            swiper.autoplay.start();
            console.log('Autoplay resumed');
        });
    }
    
    console.log('Recent Posts Swiper setup complete!');
});
</script>
@endpush

