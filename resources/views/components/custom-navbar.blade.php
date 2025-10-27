<!-- Custom Navbar Component -->
<div class="custom-navbar">
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
                    <a href="#" class="social-icon">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-icon">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-icon">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.746-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-icon">
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
                    <a href="{{ route('blog.index') }}" class="nav-link {{ request()->routeIs('blog.index') ? 'active' : '' }}">
                        HOME
                    </a>
                    <a href="{{ route('blog.about') }}" class="nav-link {{ request()->routeIs('blog.about') ? 'active' : '' }}">
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
                                <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Astrology</div>
                                </a>
                                <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Vastu Shastra</div>
                                </a>
                                <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Numerology</div>
                                </a>
                                <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Palmistry</div>
                                </a>
                                <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Graphology</div>
                                </a>
                                <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Tarot Card</div>
                                </a>
                                <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Reiki Healing</div>
                                </a>
                                <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Pune Institute</div>
                                </a>
                                <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Delhi Institute</div>
                                </a>
                                <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Vedic Astrology</div>
                                </a>
                                <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Kolkata Institute</div>
                                </a>
                                <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Vastu Kolkata</div>
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
                                        <a href="{{ route('blog.category', $category->slug) }}" 
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
                                <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Palm Reading Tool</div>
                                </a>
                                <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Birth Chart Calculator</div>
                                </a>
                                <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                    <div class="font-medium">Vastu Analyzer</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side - Search Icon & Mobile Menu Toggle -->
                <div class="flex items-center space-x-4">
                    <!-- Desktop Search Icon (Visible on homepage only) -->
                    @if(request()->routeIs('blog.index'))
                    <button class="search-icon hidden md:block" id="searchToggle">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                    @endif
                    
                    <!-- Mobile Search Icon (Visible on mobile, homepage only) -->
                    @if(request()->routeIs('blog.index'))
                    <button class="mobile-search-icon md:hidden" id="mobileSearchToggle">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                    @endif
                    
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
                    <a href="{{ route('blog.index') }}" class="mobile-nav-link {{ request()->routeIs('blog.index') ? 'active' : '' }}">
                        HOME
                    </a>
                    <a href="{{ route('blog.about') }}" class="mobile-nav-link {{ request()->routeIs('blog.about') ? 'active' : '' }}">
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
                            <a href="#" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Astrology
                            </a>
                            <a href="#" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Vastu Shastra
                            </a>
                            <a href="#" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Numerology
                            </a>
                            <a href="#" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Palmistry
                            </a>
                            <a href="#" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Graphology
                            </a>
                            <a href="#" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Tarot Card
                            </a>
                            <a href="#" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Reiki Healing
                            </a>
                            <a href="#" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Pune Institute
                            </a>
                            <a href="#" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Delhi Institute
                            </a>
                            <a href="#" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Vedic Astrology
                            </a>
                            <a href="#" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Kolkata Institute
                            </a>
                            <a href="#" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Vastu Kolkata
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
                                    <a href="{{ route('blog.category', $category->slug) }}" 
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
                            <a href="#" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Palm Reading Tool
                            </a>
                            <a href="#" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Birth Chart Calculator
                            </a>
                            <a href="#" class="block px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                Vastu Analyzer
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
    @if(request()->routeIs('blog.index'))
    <div class="search-form-container hidden" id="searchFormContainer">
        <div class="container mx-auto px-4 py-4 bg-white border-t border-gray-200">
            <form action="{{ route('blog.index') }}" method="GET" class="flex items-center space-x-4">
                <div class="flex-1">
                    <input type="text" 
                           name="search" 
                           placeholder="Search posts..." 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent"
                           value="{{ request('search') }}">
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
    @endif
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
    text-transform: uppercase;
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
    text-transform: uppercase;
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
