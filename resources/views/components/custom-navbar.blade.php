<!-- Custom Navbar Component -->
<div class="custom-navbar fixed top-0 left-0 right-0 z-50">
    <!-- Top Bar (Dark Grey) -->
    <div class="top-bar">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-10">
                <!-- Left Side - Location -->
                <div class="flex items-center text-white text-sm">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>08 / 20 South Patel Nagar New Delhi - 110008</span>
                </div>
                
                <!-- Right Side - Social Media Icons -->
                <div class="flex items-center space-x-3">
                    <a href="https://www.facebook.com/allindiainstituteofoccultscience/" target="_blank" class="social-icon">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="https://x.com/gurudevsk" target="_blank" class="social-icon">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/occultscience_/" target="_blank" class="social-icon">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="https://www.youtube.com/@official_occultscience" target="_blank" class="social-icon">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar (White) -->
    <div class="main-navbar">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-20">
                <!-- Left Side - Logo -->
                <div class="flex items-center">
                    <div class="logo-section">
                        <div class="logo-image-container">
                            <img src="{{ asset('images/WEBSITE_HEADER.png') }}" 
                                 alt="ALL INDIA INSTITUTE OF OCCULT SCIENCE" 
                                 class="logo-image"
                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <!-- Fallback logo if image doesn't exist -->
                            <div class="fallback-logo" style="display: none;">
                                <div class="emblem-circle">
                                    <div class="emblem-inner">
                                    </div>
                                </div>
                                <div class="logo-text">
                                    <h1 class="institute-name">ALL INDIA INSTITUTE OF OCCULT SCIENCE</h1>
                                    <p class="hindi-slogan">विद्याधनं सर्वधनं प्रधानम्</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Desktop Navigation Links -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="{{ route('blog.index') }}/" class="nav-link {{ request()->routeIs('blog.index') ? 'active' : '' }}">
                        HOME
                    </a>
                    <a href="{{ route('blog.about') }}/" class="nav-link {{ request()->routeIs('blog.about') ? 'active' : '' }}">
                        ABOUT
                    </a>
                    <div class="nav-link dropdown relative group">
                        COURSES
                        <svg class="w-3 h-3 ml-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        
                        <!-- Dropdown Menu -->
                        <div class="dropdown-menu absolute top-full left-0 mt-2 w-64 bg-white rounded-lg shadow-lg border border-gray-200 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2">
                                <a href="https://www.occultscience.in/astrology-course/" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Astrology</div>
                                </a>
                                <a href="https://www.occultscience.in/vastu-course/" target="_blank" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Vastu Shastra</div>
                                </a>
                                <a href="https://www.occultscience.in/numerology-course/" target="_blank" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Numerology</div>
                                </a>
                                <a href="https://www.occultscience.in/palmistry-course/" target="_blank" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Palmistry</div>
                                </a>
                                <a href="https://www.occultscience.in/graphology-course/" target="_blank" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Graphology</div>
                                </a>
                                <a href="https://www.occultscience.in/card-reading-course/" target="_blank" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Tarot Card</div>
                                </a>
                                <a href="https://www.occultscience.in/reiki-course/" target="_blank" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Reiki Healing</div>
                                </a>
                                <a href="https://www.occultscience.in/astrology-course-in-pune/" target="_blank" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Astrology Course Pune</div>
                                </a>
                                <a href="https://www.occultscience.in/astrology-course-in-delhi/" target="_blank" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Astrology Course Delhi</div>
                                </a>
                                <a href="https://www.occultscience.in/learn-vedic-astrology/" target="_blank" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Learn Vedic Astrology</div>
                                </a>
                                <a href="https://www.occultscience.in/astrology-course-in-kolkata/" target="_blank" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Astrology Course Kolkata</div>
                                </a>
                                <a href="https://www.occultscience.in/vastu-course-in-kolkata/" target="_blank" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Vastu Course Kolkata</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="nav-link dropdown relative group">
                        CATEGORIES
                        <svg class="w-3 h-3 ml-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        
                        <!-- Dropdown Menu -->
                        <div class="dropdown-menu absolute top-full left-0 mt-2 w-64 bg-white rounded-lg shadow-lg border border-gray-200 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2">
                                @if(isset($navbarCategories) && $navbarCategories->count() > 0)
                                    @foreach($navbarCategories->take(8) as $category)
                                        <a href="{{ route('blog.category', $category->slug) }}/" 
                                           class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                            <div class="font-medium">{{ $category->name }}</div>
                                        </a>
                                    @endforeach
                                    @if($navbarCategories->count() > 8)
                                        <div class="border-t border-gray-200 mt-2 pt-2">
                                            <a href="#" class="block px-4 py-2 text-sm text-center text-red-600 hover:bg-red-50 font-medium">
                                                View All Categories →
                                            </a>
                                        </div>
                                    @endif
                                @else
                                    <div class="px-4 py-3 text-sm text-gray-500">
                                        No categories available
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="nav-link dropdown relative group">
                        TOOLS
                        <svg class="w-3 h-3 ml-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        
                        <!-- Dropdown Menu -->
                        <div class="dropdown-menu absolute top-full left-0 mt-2 w-64 bg-white rounded-lg shadow-lg border border-gray-200 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2">
                                <a href="https://www.occultscience.in/tools/numerology-calculator/" target="_blank" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Numerology Calculator</div>
                                </a>
                                <a href="https://www.occultscience.in/tools/lo-shu-grid-calculator/" target="_blank" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Lo Shu Grid Calculator</div>
                                </a>
                                <a href="https://www.occultscience.in/tools/mobile-number-numerology-calculator/" target="_blank" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Mobile Number Calculator</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side - Search Icon & Mobile Menu Toggle -->
                <div class="flex items-center space-x-4">
                    <!-- Desktop Search Icon -->
                    <button class="search-icon hidden md:block" id="searchToggle">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                    
                    <!-- Mobile Search Icon -->
                    <button class="mobile-search-icon md:hidden" id="mobileSearchToggle">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                    
                    <!-- Mobile Menu Toggle Button -->
                    <button class="mobile-menu-toggle lg:hidden" id="mobileMenuToggle">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Navigation Menu -->
            <div class="mobile-menu lg:hidden" id="mobileMenu">
                <div class="mobile-menu-content">
                    <a href="{{ route('blog.index') }}/" class="mobile-nav-link {{ request()->routeIs('blog.index') ? 'active' : '' }}">
                        HOME
                    </a>
                    <a href="{{ route('blog.about') }}/" class="mobile-nav-link {{ request()->routeIs('blog.about') ? 'active' : '' }}">
                        ABOUT
                    </a>
                    <div class="mobile-dropdown">
                        <a href="#" class="mobile-nav-link dropdown" id="courses-mobile-toggle">
                            COURSES
                            <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <div id="courses-submenu" class="mobile-submenu hidden">
                            <a href="https://www.occultscience.in/astrology-course/" target="_blank" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Astrology
                            </a>
                            <a href="https://www.occultscience.in/vastu-course/" target="_blank" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Vastu Shastra
                            </a>
                            <a href="https://www.occultscience.in/numerology-course/" target="_blank" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Numerology
                            </a>
                            <a href="https://www.occultscience.in/palmistry-course/" target="_blank" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Palmistry
                            </a>
                            <a href="https://www.occultscience.in/graphology-course/" target="_blank" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Graphology
                            </a>
                            <a href="https://www.occultscience.in/card-reading-course/" target="_blank" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Tarot Card
                            </a>
                            <a href="https://www.occultscience.in/reiki-course/" target="_blank" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Reiki Healing
                            </a>
                            <a href="https://www.occultscience.in/pune-institute/" target="_blank" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Pune Institute
                            </a>
                            <a href="https://www.occultscience.in/delhi-institute/" target="_blank" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Delhi Institute
                            </a>
                            <a href="https://www.occultscience.in/vedic-astrology-course/" target="_blank" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Vedic Astrology
                            </a>
                            <a href="https://www.occultscience.in/kolkata-institute/" target="_blank" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Kolkata Institute
                            </a>
                            <a href="https://www.occultscience.in/astrology-course-in-pune/" target="_blank" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Astrology Course Pune
                            </a>
                            <a href="https://www.occultscience.in/astrology-course-in-delhi/" target="_blank" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Astrology Course Delhi
                            </a>
                            <a href="https://www.occultscience.in/learn-vedic-astrology/" target="_blank" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Learn Vedic Astrology
                            </a>
                            <a href="https://www.occultscience.in/astrology-course-in-kolkata/" target="_blank" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Astrology Course Kolkata
                            </a>
                            <a href="https://www.occultscience.in/vastu-course-in-kolkata/" target="_blank" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Vastu Course Kolkata
                            </a>
                        </div>
                    </div>
                    <div class="mobile-dropdown">
                        <a href="#" class="mobile-nav-link dropdown" id="categories-mobile-toggle">
                            CATEGORIES
                            <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <div id="categories-submenu" class="mobile-submenu hidden">
                            @if(isset($navbarCategories) && $navbarCategories->count() > 0)
                                @foreach($navbarCategories as $category)
                                    <a href="{{ route('blog.category', $category->slug) }}/" 
                                       class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                        {{ $category->name }}
                                    </a>
                                @endforeach
                            @else
                                <div class="px-6 py-3 text-gray-500 text-sm">No categories available</div>
                            @endif
                        </div>
                    </div>
                    <div class="mobile-dropdown">
                        <a href="#" class="mobile-nav-link dropdown" id="tools-mobile-toggle">
                            TOOLS
                            <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <div id="tools-submenu" class="mobile-submenu hidden">
                            <a href="https://www.occultscience.in/tools/numerology-calculator/" target="_blank" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Numerology Calculator
                            </a>
                            <a href="https://www.occultscience.in/tools/lo-shu-grid-calculator/" target="_blank" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Lo Shu Grid Calculator
                            </a>
                            <a href="https://www.occultscience.in/tools/mobile-number-numerology-calculator/" target="_blank" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Mobile Number Calculator
                            </a>
                        </div>
                    </div>
                    
                    <!-- Mobile Search - Hidden on homepage and blog view -->
                    @if(!request()->routeIs('blog.index') && !request()->routeIs('blog.category') && !request()->routeIs('blog.post'))
                    <div class="mobile-search">
                        <button class="mobile-search-btn">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            Search
                        </button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    
    <!-- Search Form (Hidden by default) -->
    <div class="search-form-container hidden" id="searchFormContainer">
        <div class="container mx-auto px-4 py-4 bg-white border-t border-gray-200">
            <form action="{{ route('blog.search') }}" method="GET" class="flex items-center space-x-4">
                <div class="flex-1">
                    <input type="text" 
                           name="q" 
                           placeholder="Search articles, topics, categories..." 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent"
                           value="{{ request('q') }}">
                </div>
                <button type="submit" 
                        class="bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700 transition-colors">
                    Search
                </button>
                <button type="button" 
                        id="closeSearchForm"
                        class="text-gray-500 hover:text-gray-700 px-2 py-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</div>

<style>
.custom-navbar {
    font-family: 'Arial', sans-serif;
}

/* Top Bar Styles */
.top-bar {
    background-color: #4a4a4a;
    color: white;
    font-size: 14px;
}

.social-icon {
    width: 32px;
    height: 32px;
    border: 1px solid #333;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: white;
    color: #333;
    transition: all 0.3s ease;
}

.social-icon:hover {
    background-color: #f0f0f0;
    transform: scale(1.1);
}

/* Main Navbar Styles */
.main-navbar {
    background-color: white;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.logo-section {
    display: flex;
    align-items: center;
}

.logo-image-container {
    position: relative;
}

.logo-image {
    height: 80px;
    width: auto;
    max-width: 400px;
    min-width: 200px;
    object-fit: contain;
    transition: all 0.3s ease;
    filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
}

.logo-image:hover {
    transform: scale(1.02);
    filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.15));
}

/* Fallback logo styles (when image doesn't exist) */
.fallback-logo {
    display: flex;
    align-items: center;
    gap: 15px;
}

.emblem-circle {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(135deg, #dc2626, #ef4444);
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    flex-shrink: 0;
}

.emblem-inner {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: white;
    display: flex;
    align-items: center;
    justify-content: center;
}

.emblem-text {
    font-size: 24px;
}

.logo-text {
    display: flex;
    flex-direction: column;
    gap: 2px;
}

.institute-name {
    font-size: 18px;
    font-weight: bold;
    color: #dc2626;
    margin: 0;
    line-height: 1.2;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.hindi-slogan {
    font-size: 14px;
    color: #dc2626;
    margin: 0;
    font-weight: 500;
}

/* Navigation Links */
.nav-link {
    color: #333;
    text-decoration: none;
    font-weight: 600;
    font-size: 14px;
    letter-spacing: 0.5px;
    padding: 8px 0;
    position: relative;
    display: flex;
    align-items: center;
    transition: color 0.3s ease;
}

.nav-link:hover {
    color: #dc2626;
}

.nav-link.active {
    color: #dc2626;
}

.nav-link.active::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    right: 0;
    height: 2px;
    background-color: #dc2626;
}

.nav-link.dropdown {
    cursor: pointer;
}

/* Dropdown Menu Styles */
.dropdown-menu {
    transform: translateY(-10px);
    transition: all 0.3s ease;
}

.group:hover .dropdown-menu {
    transform: translateY(0);
}

.dropdown-menu a {
    border-left: 4px solid transparent;
    transition: all 0.2s ease;
}

.dropdown-menu a:hover {
    border-left-color: #dc2626;
    background-color: #fef2f2;
}

/* Mobile Submenu Styles */
.mobile-submenu {
    background-color: #f8f9fa;
    border-left: 4px solid #dc2626;
    margin-left: 20px;
    margin-top: 5px;
    margin-bottom: 5px;
}

.mobile-submenu-link {
    display: block;
    padding: 10px 20px;
    color: #333;
    text-decoration: none;
    font-size: 14px;
    border-bottom: 1px solid #e5e5e5;
    transition: all 0.3s ease;
}

.mobile-submenu-link:hover {
    background-color: #f0f0f0;
    color: #dc2626;
    padding-left: 30px;
}

.mobile-submenu-link:last-child {
    border-bottom: none;
}

/* Search Icon */
.search-icon {
    background: none;
    border: none;
    color: #333;
    cursor: pointer;
    padding: 8px;
    border-radius: 4px;
    transition: all 0.3s ease;
}

.search-icon:hover {
    background-color: #f5f5f5;
    color: #dc2626;
}

/* Mobile Search Icon */
.mobile-search-icon {
    background: none;
    border: none;
    color: #333;
    cursor: pointer;
    padding: 8px;
    border-radius: 4px;
    transition: all 0.3s ease;
}

.mobile-search-icon:hover {
    background-color: #f5f5f5;
    color: #dc2626;
}

/* Search Form */
.search-form-container {
    animation: slideDown 0.3s ease-out;
}

@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Mobile Menu Styles */
.mobile-menu-toggle {
    background: none;
    border: none;
    color: #333;
    cursor: pointer;
    padding: 8px;
    border-radius: 4px;
    transition: all 0.3s ease;
}

.mobile-menu-toggle:hover {
    background-color: #f5f5f5;
    color: #dc2626;
}

.mobile-menu {
    display: none;
    background-color: white;
    border-top: 1px solid #e5e5e5;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.mobile-menu.active {
    display: block;
}

.mobile-menu-content {
    padding: 20px 0;
}

.mobile-nav-link {
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: #333;
    text-decoration: none;
    font-weight: 600;
    font-size: 16px;
    letter-spacing: 0.5px;
    padding: 12px 20px;
    border-bottom: 1px solid #f0f0f0;
    transition: all 0.3s ease;
}

.mobile-nav-link:hover {
    background-color: #f8f8f8;
    color: #dc2626;
    padding-left: 30px;
}

.mobile-nav-link.active {
    color: #dc2626;
    background-color: #fef2f2;
    border-left: 4px solid #dc2626;
}

.mobile-nav-link.dropdown {
    cursor: pointer;
}

.mobile-search {
    padding: 20px;
    border-top: 1px solid #e5e5e5;
    margin-top: 10px;
}

.mobile-search-btn {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #dc2626;
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 8px;
    font-weight: 600;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.mobile-search-btn:hover {
    background-color: #b91c1c;
    transform: translateY(-1px);
}

/* Responsive Design */
@media (max-width: 1024px) {
    .logo-image {
        height: 70px;
        max-width: 320px;
        min-width: 180px;
    }
    
    .institute-name {
        font-size: 16px;
    }
    
    .nav-link {
        font-size: 13px;
    }
    
    .emblem-circle {
        width: 50px;
        height: 50px;
    }
    
    .emblem-inner {
        width: 40px;
        height: 40px;
    }
    
    .emblem-text {
        font-size: 20px;
    }
}

@media (max-width: 768px) {
    .top-bar {
        display: none;
    }
    
    .logo-image {
        height: 60px;
        max-width: 250px;
        min-width: 150px;
    }
    
    .institute-name {
        font-size: 14px;
    }
    
    .hindi-slogan {
        font-size: 12px;
    }
}

@media (max-width: 640px) {
    .main-navbar .container {
        padding: 0 16px;
    }
    
    .logo-image {
        height: 50px;
        max-width: 200px;
        min-width: 120px;
    }
    
    .institute-name {
        font-size: 12px;
    }
    
    .hindi-slogan {
        font-size: 10px;
    }
    
    .mobile-nav-link {
        font-size: 14px;
        padding: 10px 16px;
    }
    
    .mobile-search-btn {
        font-size: 14px;
        padding: 10px 16px;
    }
}

@media (max-width: 480px) {
    .logo-image {
        height: 45px;
        max-width: 180px;
        min-width: 100px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenu = document.getElementById('mobileMenu');
    const toggleButton = document.getElementById('mobileMenuToggle');
    
    if (!mobileMenu || !toggleButton) {
        console.error('Mobile menu elements not found');
        return;
    }
    
    // Toggle mobile menu function
    function toggleMobileMenu() {
        if (mobileMenu.classList.contains('active')) {
            mobileMenu.classList.remove('active');
            toggleButton.innerHTML = `
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            `;
        } else {
            mobileMenu.classList.add('active');
            toggleButton.innerHTML = `
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            `;
        }
    }
    
    // Add click event listener to toggle button
    toggleButton.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        toggleMobileMenu();
    });
    
    // Add touch event listener for better mobile support
    toggleButton.addEventListener('touchstart', function(e) {
        e.preventDefault();
        e.stopPropagation();
        toggleMobileMenu();
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        if (!mobileMenu.contains(event.target) && !toggleButton.contains(event.target)) {
            mobileMenu.classList.remove('active');
            toggleButton.innerHTML = `
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            `;
        }
    });

    // Close mobile menu when window is resized to desktop size
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 1024) {
            mobileMenu.classList.remove('active');
            toggleButton.innerHTML = `
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            `;
        }
    });
    
    // Mobile dropdown functionality
    function toggleMobileSubmenu(submenuId) {
        const submenu = document.getElementById(submenuId + '-submenu');
        const toggle = document.getElementById(submenuId + '-mobile-toggle');
        
        if (submenu && toggle) {
            if (submenu.classList.contains('hidden')) {
                submenu.classList.remove('hidden');
                // Rotate arrow icon
                const arrow = toggle.querySelector('svg');
                if (arrow) {
                    arrow.style.transform = 'rotate(180deg)';
                }
            } else {
                submenu.classList.add('hidden');
                // Reset arrow icon
                const arrow = toggle.querySelector('svg');
                if (arrow) {
                    arrow.style.transform = 'rotate(0deg)';
                }
            }
        }
    }
    
    // Add event listeners for mobile dropdowns
    const coursesToggle = document.getElementById('courses-mobile-toggle');
    const categoriesToggle = document.getElementById('categories-mobile-toggle');
    const toolsToggle = document.getElementById('tools-mobile-toggle');
    
    if (coursesToggle) {
        coursesToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            toggleMobileSubmenu('courses');
        });
    }
    
    if (categoriesToggle) {
        categoriesToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            toggleMobileSubmenu('categories');
        });
    }
    
    if (toolsToggle) {
        toolsToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            toggleMobileSubmenu('tools');
        });
    }
    
    // Search form functionality
    const searchToggle = document.getElementById('searchToggle');
    const mobileSearchToggle = document.getElementById('mobileSearchToggle');
    const searchFormContainer = document.getElementById('searchFormContainer');
    const closeSearchForm = document.getElementById('closeSearchForm');
    
    function toggleSearchForm() {
        if (searchFormContainer) {
            searchFormContainer.classList.remove('hidden');
            // Focus on search input
            const searchInput = searchFormContainer.querySelector('input[name="search"]');
            if (searchInput) {
                setTimeout(() => searchInput.focus(), 100);
            }
        }
    }
    
    if (searchToggle && searchFormContainer) {
        searchToggle.addEventListener('click', toggleSearchForm);
    }
    
    if (mobileSearchToggle && searchFormContainer) {
        mobileSearchToggle.addEventListener('click', toggleSearchForm);
    }
    
    if (closeSearchForm && searchFormContainer) {
        closeSearchForm.addEventListener('click', function() {
            searchFormContainer.classList.add('hidden');
        });
    }
    
    // Close search form when clicking outside
    if (searchFormContainer) {
        document.addEventListener('click', function(event) {
            const isSearchToggle = searchToggle && searchToggle.contains(event.target);
            const isMobileSearchToggle = mobileSearchToggle && mobileSearchToggle.contains(event.target);
            const isSearchForm = searchFormContainer.contains(event.target);
            
            if (!isSearchForm && !isSearchToggle && !isMobileSearchToggle) {
                searchFormContainer.classList.add('hidden');
            }
        });
    }
});
</script>
