<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'ALL INDIA INSTITUTE OF OCCULT SCIENCE')</title>
    <meta name="description" content="@yield('description', 'Exploring the mystical and esoteric world through ancient wisdom and modern insights.')">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'ALL INDIA INSTITUTE OF OCCULT SCIENCE')">
    <meta property="og:description" content="@yield('description', 'Exploring the mystical and esoteric world through ancient wisdom and modern insights.')">
    <meta property="og:image" content="@yield('og_image', asset('images/occult-blog-og.jpg'))">
    <meta property="og:site_name" content="ALL INDIA INSTITUTE OF OCCULT SCIENCE">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title', 'ALL INDIA INSTITUTE OF OCCULT SCIENCE')">
    <meta property="twitter:description" content="@yield('description', 'Exploring the mystical and esoteric world through ancient wisdom and modern insights.')">
    <meta property="twitter:image" content="@yield('og_image', asset('images/occult-blog-og.jpg'))">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .mystical-shadow {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }
        .hero-gradient {
            background: linear-gradient(135deg, #1e3a8a 0%, #3730a3 50%, #581c87 100%);
        }
        .whats-hot-item {
            transition: all 0.3s ease;
        }
        .whats-hot-item:hover {
            transform: translateX(5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }
        .bg-gray-750 {
            background-color: #374151;
        }
        .latest-post-card {
            transition: all 0.3s ease;
        }
        .latest-post-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50">
    <!-- Custom Navbar -->
    <x-custom-navbar />

    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12 mt-16" style="background-color: #222222;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Column 1: Institute Info -->
                <div>
                    <div class="flex items-start mb-6 md:flex-row flex-col md:items-start items-center text-center md:text-left">
                        <div class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center mr-4 flex-shrink-0 md:mr-4 mr-0 mb-4 md:mb-0">
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-white uppercase leading-tight">ALL INDIA INSTITUTE OF OCCULT SCIENCE</h3>
                            <p class="text-sm text-white mt-1">विद्याधनं सर्वधनं प्रधानम्</p>
                            <p class="text-xs text-gray-300 mt-1">Regd. Under Govt. of NCT of Delhi</p>
                        </div>
                    </div>
                    
                    <!-- Social Media Icons -->
                    <div class="flex space-x-3 md:justify-start justify-center">
                        <a href="#" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-gray-600 transition-colors">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-gray-600 transition-colors">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.746-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-gray-600 transition-colors">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-gray-600 transition-colors">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Column 2: Latest Post -->
                <div>
                    <h4 class="text-lg font-bold text-white mb-4 relative">
                        Latest Post
                        <div class="absolute bottom-0 left-0 w-8 h-0.5 bg-red-600"></div>
                    </h4>
                    <div class="space-y-4">
                        @php
                            $latestPosts = \App\Models\Post::with('category')
                                ->where('is_published', true)
                                ->orderBy('published_at', 'desc')
                                ->limit(2)
                                ->get();
                        @endphp
                        
                        @foreach($latestPosts as $latestPost)
                            <div class="flex space-x-3">
                                <div class="flex-shrink-0 w-16 h-16 rounded-lg overflow-hidden">
                                    @if($latestPost->featured_image && Storage::exists($latestPost->featured_image))
                                        <img src="{{ Storage::url($latestPost->featured_image) }}" 
                                             alt="{{ $latestPost->title }}" 
                                             class="w-full h-full object-cover">
                                    @else
                                        <div class="w-full h-full bg-gradient-to-br from-purple-500 to-indigo-600 flex items-center justify-center">
                                        </div>
                                    @endif
                                </div>
                                <div class="flex-1">
                                    <h5 class="text-sm text-white font-medium mb-1">{{ Str::limit($latestPost->title, 40) }}</h5>
                                    <a href="{{ route('blog.post', [$latestPost->category->slug, $latestPost->slug]) }}" class="text-red-500 text-sm hover:text-red-400 transition-colors">
                                        Read More »
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Column 3: Top Category -->
                <div>
                    <h4 class="text-lg font-bold text-white mb-4 relative">
                        Top Category
                        <div class="absolute bottom-0 left-0 w-8 h-0.5 bg-red-600"></div>
                    </h4>
                    <div class="space-y-2">
                        @if(isset($navbarCategories) && $navbarCategories->count() > 0)
                            @foreach($navbarCategories as $category)
                                <div class="border-b border-gray-600 pb-2 last:border-b-0">
                                    <a href="{{ route('blog.category', $category->slug) }}" 
                                       class="text-white text-sm hover:text-red-500 transition-colors">
                                        {{ $category->name }}
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <p class="text-gray-400 text-sm">No categories available</p>
                        @endif
                    </div>
                </div>

            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-400 text-sm">
                    © {{ date('Y') }} ALL INDIA INSTITUTE OF OCCULT SCIENCE. All rights reserved.
                </p>
                <p class="text-gray-500 text-xs mt-2">
                    विद्याधनं सर्वधनं प्रधानम् - Knowledge is the supreme wealth
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
