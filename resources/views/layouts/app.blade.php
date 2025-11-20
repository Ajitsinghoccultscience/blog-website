<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Occult Blog')</title>
    <meta name="description" content="@yield('description', 'Exploring the mystical and esoteric world through ancient wisdom and modern insights.')">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Occult Blog')">
    <meta property="og:description" content="@yield('description', 'Exploring the mystical and esoteric world through ancient wisdom and modern insights.')">
    <meta property="og:image" content="@yield('og_image', asset('images/occult-blog-og.jpg'))">
    <meta property="og:site_name" content="Occult Blog">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title', 'Occult Blog')">
    <meta property="twitter:description" content="@yield('description', 'Exploring the mystical and esoteric world through ancient wisdom and modern insights.')">
    <meta property="twitter:image" content="@yield('og_image', asset('images/occult-blog-og.jpg'))">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom Styles -->
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .mystical-shadow {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50">
    <!-- Navigation -->
    <nav class="gradient-bg shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('blog.index') }}/" class="text-white text-xl font-bold">
                        Occult Blog
                    </a>
                </div>
                
                <div class="flex items-center space-x-4">
                    <a href="{{ route('blog.index') }}/" class="text-white hover:text-purple-200 px-3 py-2 rounded-md text-sm font-medium">
                        Home
                    </a>
                    @if(isset($categories))
                        @foreach($categories->take(4) as $category)
                            <a href="{{ route('blog.category', $category->slug) }}/" 
                               class="text-white hover:text-purple-200 px-3 py-2 rounded-md text-sm font-medium">
                                {{ $category->name }}
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="gradient-bg text-white py-8 mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-lg font-semibold mb-2">Occult Blog</p>
                <p class="text-purple-200">Exploring the mystical and esoteric world</p>
                <div class="mt-4">
                    <a href="/admin" class="text-purple-200 hover:text-white text-sm">Admin Panel</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
