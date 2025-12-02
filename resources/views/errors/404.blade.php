<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="KQjEqJFAaJm5OHebNoiVM88PCH9Zeg4yz1Pv2iVlXB0" />

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N9BPVGSN');</script>
    <!-- End Google Tag Manager -->

    <title>404 - Page Not Found | ALL INDIA INSTITUTE OF OCCULT SCIENCE</title>
    <meta name="description" content="The page you are looking for could not be found.">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="404 - Page Not Found">
    <meta property="og:description" content="The page you are looking for could not be found.">
    <meta property="og:image" content="{{ asset('images/occult-blog-og.jpg') }}">
    <meta property="og:site_name" content="ALL INDIA INSTITUTE OF OCCULT SCIENCE">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="404 - Page Not Found">
    <meta property="twitter:description" content="The page you are looking for could not be found.">
    <meta property="twitter:image" content="{{ asset('images/occult-blog-og.jpg') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/WEBSITE_HEADER_LOGO.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/WEBSITE_HEADER_LOGO.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/WEBSITE_HEADER_LOGO.png') }}">

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
        
        /* Scroll to Top Button */
        #scrollToTop {
            transition: opacity 0.3s ease, transform 0.3s ease;
        }
        
        #scrollToTop:hover {
            transform: translateY(-3px) scale(1.05);
        }
        
        #scrollToTop:active {
            transform: translateY(-1px) scale(0.98);
        }
        
        @media (max-width: 768px) {
            #scrollToTop {
                bottom: 4rem;
                right: 1rem;
                width: 3rem;
                height: 3rem;
            }
        }

        /* 404 Page Styles */
        .error-404-container {
            padding-top: 120px;
            padding-bottom: 80px;
            min-height: calc(100vh - 200px);
        }

        .error-404-number {
            font-size: 12rem;
            font-weight: 700;
            background: linear-gradient(135deg, #EF620F 0%, #FF7A1F 50%, #FF8C33 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1;
            text-shadow: 0 4px 20px rgba(239, 98, 15, 0.3);
        }
        
        .theme-orange {
            color: #EF620F;
        }
        
        .bg-theme-orange {
            background-color: #EF620F;
        }
        
        .bg-theme-orange-hover:hover {
            background-color: #D8560D;
        }
        
        .text-theme-orange {
            color: #EF620F;
        }
        
        .text-theme-orange-hover:hover {
            color: #FF7A1F !important;
        }
        
        a.text-theme-orange-hover:hover {
            color: #FF7A1F !important;
        }
        
        .border-theme-orange {
            border-color: #EF620F;
        }
        

        @media (max-width: 768px) {
            .error-404-number {
                font-size: 8rem;
            }
        }

        .error-404-icon {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N9BPVGSN"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <!-- Custom Navbar -->
    <x-custom-navbar />

    <!-- Main Content -->
    <main>
        <div class="error-404-container">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <!-- 404 Number -->
                <div class="error-404-number mb-4">
                    404
                </div>

                <!-- Error Message -->
                <h1 class="text-4xl font-bold text-gray-800 mb-4">
                    Page Not Found
                </h1>
                <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                    Oops! The page you are looking for seems to have vanished into the mystical realm. 
                    It might have been moved, deleted, or never existed.
                </p>

                <!-- Action Buttons -->
                <div class="flex justify-center items-center">
                    <a href="{{ route('blog.index') }}/" 
                       class="inline-flex items-center px-6 py-3 text-white font-semibold rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300" 
                       style="background: linear-gradient(135deg, #EF620F 0%, #FF7A1F 100%);">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        Go to Homepage
                    </a>
                </div>

                <!-- Search Suggestion -->
                <div class="mt-12 p-6 bg-gray-100 rounded-lg">
                    <p class="text-gray-700 mb-4">Looking for something specific? Try searching:</p>
                    <form action="{{ route('blog.search') }}/" method="GET" class="max-w-md mx-auto">
                        <div class="flex gap-2">
                            <input type="text" 
                                   name="q" 
                                   placeholder="Search articles..." 
                                   class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:border-transparent"
                                   style="--tw-ring-color: #EF620F;"
                                   onfocus="this.style.boxShadow='0 0 0 2px rgba(239, 98, 15, 0.5)'"
                                   onblur="this.style.boxShadow=''">
                            <button type="submit" 
                                    class="px-6 py-2 text-white rounded-lg transition-colors bg-theme-orange bg-theme-orange-hover"
                                    style="background-color: #EF620F;"
                                    onmouseover="this.style.backgroundColor='#D8560D'"
                                    onmouseout="this.style.backgroundColor='#EF620F'">
                                Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12 mt-16" style="background-color: #222222;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Column 1: Institute Info -->
                <div>
                    <div class="mb-8 flex justify-center md:justify-start md:-ml-4">
                        <img src="{{ asset('images/WEBSITE-HEADER_1-2-e1663577068999.png') }}" 
                             alt="ALL INDIA INSTITUTE OF OCCULT SCIENCE" 
                             class="max-w-full h-auto object-contain"
                             onerror="this.style.display='none';">
                    </div>
                    
                    <!-- Social Media Icons -->
                    <div class="flex space-x-3 justify-center mt-4">
                        <a href="https://www.facebook.com/allindiainstituteofoccultscience/" target="_blank" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-gray-600 transition-colors">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/occultscience_/" target="_blank" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-gray-600 transition-colors">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/@official_occultscience" target="_blank" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-gray-600 transition-colors">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                        <a href="https://x.com/gurudevsk" target="_blank" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-gray-600 transition-colors">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Column 2: Latest Post -->
                <div>
                    <h4 class="text-lg font-bold text-white mb-4 relative">
                        Latest Post
                        <div class="absolute bottom-0 left-0 w-8 h-0.5 bg-theme-orange"></div>
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
                                    @if($latestPost->featured_image)
                                        <img src="{{ Storage::url($latestPost->featured_image) }}" 
                                             alt="{{ $latestPost->featured_image_alt ?? $latestPost->title }}" 
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
                                <div class="flex-1">
                                    <h5 class="text-sm text-white font-medium mb-1">{{ Str::limit($latestPost->title, 40) }}</h5>
                                    <a href="{{ route('blog.post', $latestPost->slug) }}/" class="text-theme-orange text-sm text-theme-orange-hover transition-colors">
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
                        <div class="absolute bottom-0 left-0 w-8 h-0.5 bg-theme-orange"></div>
                    </h4>
                    <div class="space-y-2">
                        @php
                            $navbarCategories = \App\Models\Category::orderBy('name', 'asc')->get();
                        @endphp
                        @if($navbarCategories->count() > 0)
                            @foreach($navbarCategories->take(5) as $category)
                                <div class="border-b border-gray-600 pb-2 last:border-b-0">
                                    <a href="{{ route('blog.category', $category->slug) }}/" 
                                       class="text-white text-sm text-theme-orange-hover transition-colors">
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

    <!-- Scroll to Top Button -->
    <button id="scrollToTop" 
            class="fixed bottom-6 right-6 w-12 h-12 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 flex items-center justify-center z-50 opacity-0 pointer-events-none bg-theme-orange"
            style="background: linear-gradient(135deg, #EF620F 0%, #FF7A1F 100%);"
            aria-label="Scroll to top">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
        </svg>
    </button>

    <!-- Scroll to Top Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const scrollToTopButton = document.getElementById('scrollToTop');
            
            // Show/hide button based on scroll position
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    scrollToTopButton.classList.remove('opacity-0', 'pointer-events-none');
                    scrollToTopButton.classList.add('opacity-100', 'pointer-events-auto');
                } else {
                    scrollToTopButton.classList.add('opacity-0', 'pointer-events-none');
                    scrollToTopButton.classList.remove('opacity-100', 'pointer-events-auto');
                }
            });
            
            // Smooth scroll to top on click
            scrollToTopButton.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>

