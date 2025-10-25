@extends('layouts.homepage')

@section('title', 'ALL INDIA INSTITUTE OF OCCULT SCIENCE - Home')
@section('description', 'Discover ancient wisdom, mystical practices, and esoteric knowledge through our comprehensive occult science education.')

@php
use Illuminate\Support\Facades\Storage;
@endphp

@section('content')
    <!-- Hero Section -->
<div class="hero-gradient text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl md:text-7xl font-bold mb-6">
            <span class="bg-gradient-to-r from-yellow-300 to-orange-300 bg-clip-text text-transparent">Occult Science</span>
        </h1>
        <p class="text-xl md:text-2xl text-blue-100 max-w-4xl mx-auto mb-8">
            विद्याधनं सर्वधनं प्रधानम्
        </p>
        <p class="text-lg text-blue-200 max-w-3xl mx-auto mb-10">
            Explore the mystical and esoteric world through ancient wisdom, sacred symbols, and spiritual practices.
            Join us in discovering the profound mysteries of occult science.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://www.occultscience.in/courses/" target="_blank" class="bg-orange-600 hover:bg-orange-700 text-yellow-100 px-8 py-3 rounded-lg font-semibold transition-colors shadow-lg">
                Explore Courses
            </a>
            <a href="#about" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-blue-900 px-8 py-3 rounded-lg font-semibold transition-colors">
                Learn More
            </a>
        </div>
    </div>
</div>

<!-- Recent Posts Section -->
<div class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="mb-8">
            <div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-t-lg px-6 py-4">
                <h2 class="text-white font-bold text-xl">Recent Posts</h2>
            </div>
        </div>
        
        @if($posts->count() > 0)
            <!-- Slider Container -->
            <div class="relative">
                <!-- Slider Wrapper -->
                <div class="overflow-hidden">
                    <div id="recent-posts-slider" class="flex transition-transform duration-500 ease-in-out">
                        @foreach($posts->chunk(3) as $chunk)
                            <div class="w-full flex-shrink-0">
                                <!-- Desktop: Show 3 posts in grid -->
                                <div class="hidden md:grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                    @foreach($chunk as $post)
                                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                                            <!-- Post Image -->
                        <div class="relative">
                            <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
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
                                                <!-- Badge -->
                                                <div class="absolute top-3 left-3">
                                                    <span class="bg-orange-600 text-white text-xs font-bold px-3 py-1 rounded-sm shadow-md flex items-center">
                                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        Occult Science
                                                    </span>
                            </div>
                        </div>
                        
                        <!-- Post Content -->
                        <div class="p-6">
                                                <p class="text-gray-500 text-sm mb-2">
                                                    {{ $post->published_at ? $post->published_at->format('d M, Y') : 'No date' }} by Admin
                                                </p>
                                                <h3 class="text-lg font-bold text-gray-900 mb-3 leading-tight hover:text-orange-600 transition-colors">
                                <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                            </h3>
                                                <p class="text-gray-600 text-sm leading-relaxed">
                                                    {{ $post->excerpt ? Str::limit($post->excerpt, 120) : Str::limit(strip_tags($post->content), 120) }}
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                
                                <!-- Mobile: Show only first post of chunk -->
                                <div class="block md:hidden">
                                    <div class="max-w-sm mx-auto">
                                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                                            <!-- Post Image -->
                                            <div class="relative">
                                                <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                                    @if($chunk->first()->featured_image)
                                                        <img src="{{ Storage::url($chunk->first()->featured_image) }}" 
                                                             alt="{{ $chunk->first()->title }}" 
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
                                                <!-- Badge -->
                                                <div class="absolute top-3 left-3">
                                                    <span class="bg-orange-600 text-white text-xs font-bold px-3 py-1 rounded-sm shadow-md flex items-center">
                                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        Occult Science
                                                    </span>
                                                </div>
                                            </div>
                                            
                                            <!-- Post Content -->
                                            <div class="p-6">
                                                <p class="text-gray-500 text-sm mb-2">
                                                    {{ $chunk->first()->published_at ? $chunk->first()->published_at->format('d M, Y') : 'No date' }} by Admin
                                                </p>
                                                <h3 class="text-lg font-bold text-gray-900 mb-3 leading-tight hover:text-orange-600 transition-colors">
                                                    <a href="{{ route('blog.show', $chunk->first()->slug) }}">{{ $chunk->first()->title }}</a>
                                                </h3>
                                                <p class="text-gray-600 text-sm leading-relaxed">
                                                    {{ $chunk->first()->excerpt ? Str::limit($chunk->first()->excerpt, 120) : Str::limit(strip_tags($chunk->first()->content), 120) }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        @endforeach
                        
                        <!-- Add individual posts for mobile sliding if we have less than 3 posts -->
                        @if($posts->count() < 3)
                            @foreach($posts as $post)
                                <div class="w-full flex-shrink-0 block md:hidden">
                                    <div class="max-w-sm mx-auto">
                                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                                            <!-- Post Image -->
                                            <div class="relative">
                                                <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
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
                                                <!-- Badge -->
                                                <div class="absolute top-3 left-3">
                                                    <span class="bg-orange-600 text-white text-xs font-bold px-3 py-1 rounded-sm shadow-md flex items-center">
                                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        Occult Science
                                                    </span>
                                                </div>
                                            </div>
                                            
                                            <!-- Post Content -->
                                            <div class="p-6">
                                                <p class="text-gray-500 text-sm mb-2">
                                                    {{ $post->published_at ? $post->published_at->format('d M, Y') : 'No date' }} by Admin
                                                </p>
                                                <h3 class="text-lg font-bold text-gray-900 mb-3 leading-tight hover:text-orange-600 transition-colors">
                                                    <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                                                </h3>
                                                <p class="text-gray-600 text-sm leading-relaxed">
                                {{ $post->excerpt ? Str::limit($post->excerpt, 120) : Str::limit(strip_tags($post->content), 120) }}
                            </p>
                                            </div>
                                        </div>
                        </div>
                    </div>
                @endforeach
                        @endif
                    </div>
                </div>
                
            </div>
            
            <!-- Pagination Dots -->
            <div class="flex justify-center mt-8">
                <div id="slider-dots" class="flex space-x-2">
                    @if($posts->count() >= 3)
                        @for($i = 0; $i < $posts->count(); $i += 3)
                            <button class="slider-dot w-3 h-3 rounded-full transition-colors {{ $i === 0 ? 'bg-orange-600' : 'bg-gray-400' }}" data-slide="{{ $i / 3 }}"></button>
                        @endfor
                    @else
                        @for($i = 0; $i < $posts->count(); $i++)
                            <button class="slider-dot w-3 h-3 rounded-full transition-colors {{ $i === 0 ? 'bg-orange-600' : 'bg-gray-400' }}" data-slide="{{ $i }}"></button>
                        @endfor
                    @endif
                </div>
            </div>
        @else
            <div class="text-center text-gray-500">
                <p>No posts available at the moment.</p>
            </div>
        @endif
    </div>
</div>

<!-- Main Content Layout - Desktop Two Column, Mobile Single Column -->
<div class="bg-white py-8 lg:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column - Category Sections (2/3 width on desktop) -->
            <div class="lg:col-span-2 space-y-12">
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
                                <div class="mb-6">
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
                                                        Occult Science
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Post Content - Right Side -->
                                        <div class="md:w-2/3 p-6">
                                            <p class="text-gray-500 text-sm mb-2">
                                                {{ $categoryPosts[0]->published_at ? $categoryPosts[0]->published_at->format('d M, Y') : 'No date' }} by Admin
                                            </p>
                                            <h3 class="text-xl font-bold text-gray-900 mb-3 leading-tight hover:text-orange-600 transition-colors">
                                                <a href="{{ route('blog.show', $categoryPosts[0]->slug) }}">{{ $categoryPosts[0]->title }}</a>
                                            </h3>
                                            <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                                {{ $categoryPosts[0]->excerpt ? Str::limit($categoryPosts[0]->excerpt, 150) : Str::limit(strip_tags($categoryPosts[0]->content), 150) }}
                                            </p>
                                            <a href="{{ route('blog.show', $categoryPosts[0]->slug) }}" class="text-orange-600 hover:text-orange-800 font-medium text-sm">
                                                Read More...
                                            </a>
                                        </div>
                                    </div>
                                </article>
                                
                                <!-- Two Additional Posts - Grid Layout -->
                                @if($categoryPosts->count() > 1)
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        @foreach($categoryPosts->skip(1) as $post)
                                            <article class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden border border-gray-100">
                                                <!-- Post Image -->
                                                <div class="relative h-48">
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
                                                <div class="p-4">
                                                    <h3 class="text-lg font-bold text-gray-900 mb-2 leading-tight hover:text-orange-600 transition-colors">
                                                        <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                                                    </h3>
                                                    <p class="text-gray-600 text-sm leading-relaxed">
                                                        {{ $post->excerpt ? Str::limit($post->excerpt, 100) : Str::limit(strip_tags($post->content), 100) }}
                                                    </p>
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
            
            <!-- Right Column - Sidebar (1/3 width on desktop, hidden on mobile) -->
            <div class="hidden lg:block lg:col-span-1 space-y-8">
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
                                        <a href="{{ route('blog.show', $post->slug) }}" class="text-gray-900 text-sm hover:text-orange-600 transition-colors leading-relaxed">
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
<style>
/* Mobile slider fixes */
@media (max-width: 767px) {
    #recent-posts-slider {
        overflow: hidden;
    }
    
    #recent-posts-slider > div {
        min-width: 100%;
    }
    
    /* Hide desktop grid on mobile */
    .hidden.md\\:grid {
        display: none !important;
    }
    
    /* Show mobile posts */
    .block.md\\:hidden {
        display: block !important;
    }
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.getElementById('recent-posts-slider');
    const dots = document.querySelectorAll('.slider-dot');
    
    if (!slider) {
        console.log('Slider not found');
        return;
    }
    
    let currentSlide = 0;
    let totalSlides = 0;
    
    // Check if mobile
    function isMobile() {
        return window.innerWidth < 768;
    }
    
    // Update total slides based on device
    function updateTotalSlides() {
        if (isMobile()) {
            // Mobile: count individual posts
            totalSlides = document.querySelectorAll('.block.md\\:hidden').length;
        } else {
            // Desktop: count chunks
            totalSlides = slider.children.length;
        }
    }
    
    // Initialize
    updateTotalSlides();
    
    console.log('Total slides:', totalSlides);
    console.log('Total posts:', {{ $posts->count() }});
    console.log('Is mobile:', isMobile());
    
    // Update slider position
    function updateSlider() {
        const translateX = -currentSlide * 100;
        slider.style.transform = `translateX(${translateX}%)`;
        
        console.log('Current slide:', currentSlide, 'TranslateX:', translateX);
        
        // Update dots
        dots.forEach((dot, index) => {
            if (index === currentSlide) {
                dot.classList.remove('bg-gray-400');
                dot.classList.add('bg-orange-600');
            } else {
                dot.classList.remove('bg-orange-600');
                dot.classList.add('bg-gray-400');
            }
        });
    }
    
    // Next slide
    function nextSlide() {
        if (totalSlides > 1) {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlider();
            console.log('Auto-advancing to slide:', currentSlide);
        }
    }
    
    // Previous slide
    function prevSlide() {
        if (totalSlides > 1) {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateSlider();
        }
    }
    
    // Dot navigation
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            const slideIndex = parseInt(dot.getAttribute('data-slide'));
            currentSlide = slideIndex;
            updateSlider();
            console.log('Clicked dot:', index, 'Slide index:', slideIndex);
        });
    });
    
    // Initialize slider
    updateSlider();
    
    // Auto-play slider - 3 seconds (only if more than 1 slide)
    if (totalSlides > 1) {
        console.log('Starting auto-play with', totalSlides, 'slides');
        let autoPlay = setInterval(nextSlide, 3000);
        
        // Pause auto-play on hover (desktop only)
        slider.addEventListener('mouseenter', () => {
            clearInterval(autoPlay);
            console.log('Auto-play paused on hover');
        });
        
        slider.addEventListener('mouseleave', () => {
            autoPlay = setInterval(nextSlide, 3000);
            console.log('Auto-play resumed');
        });
    } else {
        console.log('Only 1 slide, no auto-play needed');
    }
    
    // Touch/swipe support for mobile
    let startX = 0;
    let endX = 0;
    
    slider.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
    });
    
    slider.addEventListener('touchend', (e) => {
        endX = e.changedTouches[0].clientX;
        const diff = startX - endX;
        
        if (Math.abs(diff) > 50) { // Minimum swipe distance
            if (diff > 0) {
                nextSlide(); // Swipe left - next slide
            } else {
                prevSlide(); // Swipe right - previous slide
            }
        }
    });
    
    // Handle window resize
    window.addEventListener('resize', () => {
        updateTotalSlides();
        currentSlide = 0;
        updateSlider();
        console.log('Window resized - Total slides:', totalSlides, 'Is mobile:', isMobile());
    });
});
</script>
@endpush
