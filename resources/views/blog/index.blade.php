@extends('layouts.homepage')

@section('title', 'Occult Science Blog - All India Institute of Occult Science')
@section('description', 'Learn about India\'s best occult science courses at our institute. Master astrology, numerology, tarot, and more. Read blogs for deeper occult knowledge.')

@push('head')
<link rel="canonical" href="{{ url(route('blog.index')) }}/">
<meta name="author" content="All India Institute of Occult Science">
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
@endpush

@php
use Illuminate\Support\Facades\Storage;
@endphp

@section('content')
    <!-- Spacer for fixed navbar -->
    <div class="h-[130px] md:h-[130px]"></div>
    
    <!-- Hero Landing Section -->
    <div class="relative min-h-[500px] md:min-h-[600px] flex items-center hero-bg-image" style="background-image: url('{{ asset('images/WhatsApp Image 2025-11-24 at 15.21.19.jpeg') }}'); background-repeat: no-repeat; background-size: cover; background-position: center; background-attachment: fixed;">
        <!-- Dark Overlay for Text Readability -->
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
        <div class="grid grid-cols-1 lg:grid-cols-3 w-full relative z-10 py-2">
            <!-- Left Section - Content -->
            <div class="lg:col-span-2 relative text-white py-2 px-6 md:px-8 lg:px-10 flex flex-col justify-center min-h-[400px] md:min-h-[500px]">
                
                <!-- Content -->
                <div class="relative z-10">
                    <!-- Headline -->
                    <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-3 leading-tight">
                        <span class="text-orange-500">Learn, Research & Explore</span><br>
                        <span class="text-white">The Depths Of Occult Knowledge</span>
                    </h1>
                    
                    <!-- Description -->
                    <p class="text-sm md:text-base text-white mb-4 leading-relaxed max-w-2xl">
                        All India Institute of Occult Science is the premier institute for occult studies, offering flexible online platforms for various occult subjects like astrology, vastu, numerology, palmistry, card reading, and reiki, with small batch sizes (10-15 students).
                    </p>
                    
                    <!-- Bullet Points -->
                    <ul class="space-y-2 mb-4">
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-white mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-sm md:text-base text-white">Build Your Career With Our 100% Online Program</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-white mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-sm md:text-base text-white">Advance Your Future With A Trusted 23+ Years Legacy</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-white mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-sm md:text-base text-white">Government-Approved Online Program With Live Interactive Classes</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-white mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-sm md:text-base text-white">Expert And Experienced Educators Across All Subjects</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Right Section - Inquiry Form -->
            <div class="lg:col-span-1 flex items-center justify-center p-2 md:p-4 relative">
                <!-- Form Card -->
                <div class="w-full max-w-sm bg-white rounded-xl shadow-2xl p-3 md:p-4 relative z-10">
                    <!-- Form Title -->
                    <h2 class="text-lg md:text-xl font-bold text-gray-900 mb-3 text-center">
                        Fill Out This Forms To Get Course Details
                    </h2>
                    
                    <!-- Form -->
                    <form action="https://www.occultscience.in/enquiry-form-home/" method="POST" class="space-y-4" target="_blank">
                        <!-- Name Field -->
                        <div>
                            <label for="name" class="block text-xs font-semibold text-gray-700 mb-1.5">Your Name</label>
                            <input type="text" 
                                   id="name" 
                                   name="name" 
                                   placeholder="Enter Your Name" 
                                   required
                                   class="w-full px-3 py-2 text-sm border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all">
                        </div>
                        
                        <!-- Contact Field -->
                        <div>
                            <label for="contact" class="block text-xs font-semibold text-gray-700 mb-1.5">Contact</label>
                            <div class="flex">
                                <span class="inline-flex items-center px-3 py-2 text-sm border-2 border-r-0 border-gray-300 rounded-l-lg bg-gray-50 text-gray-700 font-medium">
                                    +91
                                </span>
                                <input type="tel" 
                                       id="contact" 
                                       name="contact" 
                                       placeholder="Enter Your Phone Number" 
                                       required
                                       pattern="[0-9]{10}"
                                       maxlength="10"
                                       class="w-full px-3 py-2 text-sm border-2 border-gray-300 rounded-r-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all">
                            </div>
                        </div>
                        
                        <!-- Email Field -->
                        <div>
                            <label for="email" class="block text-xs font-semibold text-gray-700 mb-1.5">Your Email</label>
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   placeholder="Enter Your Email Id" 
                                   required
                                   class="w-full px-3 py-2 text-sm border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all">
                        </div>
                        
                        <!-- Course Selection -->
                        <div>
                            <label for="course" class="block text-xs font-semibold text-gray-700 mb-1.5">Choose Your Course</label>
                            <select id="course" 
                                    name="course" 
                                    required
                                    class="w-full px-3 py-2 text-sm border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all bg-white">
                                <option value="">Select Course</option>
                                <option value="astrology">Astrology Course</option>
                                <option value="vastu">Vastu Course</option>
                                <option value="numerology">Numerology Course</option>
                                <option value="palmistry">Palmistry Course</option>
                                <option value="graphology">Graphology Course</option>
                                <option value="card-reading">Card Reading Course</option>
                                <option value="reiki">Reiki Course</option>
                            </select>
                        </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" 
                                class="w-full bg-orange-600 hover:bg-orange-700 text-white font-bold text-sm md:text-base py-3 px-4 rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                            Book Live Demo Session
                        </button>
                    </form>
                </div>
            </div>
        </div>
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
                            <a href="{{ route('blog.post', $post->slug) }}/" class="block">
                            <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                @if($post->featured_image)
                                                        <img src="{{ Storage::url($post->featured_image) }}" 
                                         alt="{{ $post->featured_image_alt ?? $post->title }}" 
                                                                 class="w-full h-full object-contain hover:opacity-90 transition-opacity duration-200"
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
                                              </a>
                                            </div>
                                            
                                            <!-- Post Content -->
                                            <div class="p-6">
                                                <p class="text-gray-500 text-sm mb-2">
                                        {{ $post->published_at ? $post->published_at->format('d M, Y') : 'No date' }}
                                    </p>
                                                <h3 class="text-lg font-bold text-gray-900 mb-3 leading-tight hover:text-orange-600 transition-colors">
                                                    <a href="{{ route('blog.post', $post->slug) }}/">{{ $post->title }}</a>
                                                </h3>
                                                <p class="text-gray-600 text-sm leading-relaxed mb-3">
                                {{ $post->excerpt ? Str::limit($post->excerpt, 120) : Str::limit(strip_tags($post->content), 120) }}
                            </p>
                                                <a href="{{ route('blog.post', $post->slug) }}/" 
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
                                                         alt="{{ $categoryPosts[0]->featured_image_alt ?? $categoryPosts[0]->title }}" 
                                                         class="w-full h-full object-contain"
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
                                                <a href="{{ route('blog.post', $categoryPosts[0]->slug) }}/">{{ Str::limit($categoryPosts[0]->title, 40) }}</a>
                                            </h3>
                                            <p class="text-gray-600 text-xs md:text-sm leading-relaxed mb-2 md:mb-4">
                                                {{ $categoryPosts[0]->excerpt ? Str::limit($categoryPosts[0]->excerpt, 80) : Str::limit(strip_tags($categoryPosts[0]->content), 80) }}
                                            </p>
                                            <a href="{{ route('blog.post', $categoryPosts[0]->slug) }}/" class="text-orange-600 hover:text-orange-800 font-medium text-xs md:text-sm">
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
                                                             alt="{{ $post->featured_image_alt ?? $post->title }}" 
                                                             class="w-full h-full object-contain"
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
                                                        <a href="{{ route('blog.post', $post->slug) }}/">{{ Str::limit($post->title, 30) }}</a>
                                                    </h3>
                                                    <p class="text-gray-600 text-xs md:text-sm leading-relaxed mb-1 md:mb-2">
                                                        {{ $post->excerpt ? Str::limit($post->excerpt, 60) : Str::limit(strip_tags($post->content), 60) }}
                                                    </p>
                                                    <a href="{{ route('blog.post', $post->slug) }}/" 
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
                <!-- What's Hot Section -->
                <div class="bg-gray-900 rounded-lg shadow-lg overflow-hidden">
                    <!-- What's Hot Header -->
                    <div class="bg-gradient-to-r from-orange-500 to-orange-600 px-4 py-3">
                        <h3 class="text-white font-bold text-lg">What's Hot</h3>
                    </div>
                    
                    <!-- What's Hot Posts List -->
                    <div class="p-4">
                        @php
                            // Specify the slugs of posts you want to show in "What's Hot"
                            $hotPostSlugs = [
                                'billionaire-signs-palmistry',
                                'triangle-in-palmistry',
                                'divorce-line-in-female-hand-second-marriage-line-in-female-hand',
                                'unlocking-the-secrets-of-nakshatra-and-their-lords',
                            ];
                            
                            $hotPosts = \App\Models\Post::with('category')
                                ->where('is_published', true)
                                ->whereIn('slug', $hotPostSlugs)
                                ->get()
                                ->sortBy(function($post) use ($hotPostSlugs) {
                                    return array_search($post->slug, $hotPostSlugs);
                                })
                                ->values()
                                ->take(4);
                        @endphp
                        
                        @if($hotPosts->count() > 0)
                            <div class="space-y-4">
                                @foreach($hotPosts as $hotPost)
                                    <a href="{{ route('blog.post', $hotPost->slug) }}/" class="block group">
                                        <div class="flex space-x-3 hover:bg-gray-800 rounded-lg p-2 -m-2 transition-colors">
                                            <!-- Thumbnail -->
                                            <div class="flex-shrink-0 w-20 h-20 rounded-lg overflow-hidden border-2 border-gray-700 group-hover:border-orange-500 transition-colors">
                                                @if($hotPost->featured_image)
                                                    <img src="{{ Storage::url($hotPost->featured_image) }}" 
                                                         alt="{{ $hotPost->featured_image_alt ?? $hotPost->title }}" 
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
                                            
                                            <!-- Post Info -->
                                            <div class="flex-1 min-w-0">
                                                <h4 class="text-white text-sm font-medium mb-1 line-clamp-2 group-hover:text-orange-400 transition-colors">
                                                    {{ $hotPost->title }}
                                                </h4>
                                                <p class="text-gray-400 text-xs">
                                                    {{ $hotPost->published_at ? $hotPost->published_at->format('F d, Y') : 'No date' }}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        @else
                            <p class="text-gray-400 text-sm">No posts available</p>
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
                
                <!-- Image Section -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <a href="https://www.occultscience.in/enquiry-form-home/" target="_blank" rel="noopener noreferrer" class="block">
                        <img src="{{ asset('images/tttt.png') }}" 
                             alt="Sidebar Image" 
                             class="w-full h-auto object-contain hover:opacity-90 transition-opacity"
                             onerror="this.style.display='none';">
                    </a>
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
/* Hero Background Image */
.hero-bg-image {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

@media (max-width: 1024px) {
    .hero-bg-image {
        background-attachment: scroll;
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

