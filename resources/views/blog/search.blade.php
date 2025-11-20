@extends('layouts.homepage')

@section('title', 'Search Results')
@section('description', 'Search results for: ' . $query)

@php
use Illuminate\Support\Facades\Storage;
@endphp

@section('content')
    <!-- Search Results Header -->
    <div class="bg-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-900 mb-4">Search Results</h1>
                <p class="text-lg text-gray-600 mb-2">
                    @if($posts->count() > 0)
                        Found {{ $posts->total() }} result{{ $posts->total() > 1 ? 's' : '' }} for "<span class="font-semibold text-red-600">{{ $query }}</span>"
                    @else
                        No results found for "<span class="font-semibold text-red-600">{{ $query }}</span>"
                    @endif
                </p>
            </div>

            @if($posts->count() > 0)
                <!-- Search Results -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                    @foreach($posts as $post)
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                            <!-- Post Image -->
                            <div class="relative">
                                <a href="{{ route('blog.post', $post->slug) }}" class="block">
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
                                    <div class="absolute top-3 left-3">
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
                                
                                <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2">
                                    <a href="{{ route('blog.post', $post->slug) }}" 
                                       class="hover:text-red-600 transition-colors">
                                        {{ $post->title }}
                                    </a>
                                </h3>
                                
                                <p class="text-gray-600 mb-4 line-clamp-3">
                                    {{ $post->excerpt ?: Str::limit(strip_tags($post->content), 120) }}
                                </p>
                                
                                <a href="{{ route('blog.post', $post->slug) }}" 
                                   class="inline-flex items-center text-red-600 hover:text-red-700 font-medium">
                                    Read More
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="flex justify-center">
                    {{ $posts->appends(['q' => $query])->links() }}
                </div>
            @else
                <!-- No Results -->
                <div class="text-center py-12">
                    <div class="max-w-md mx-auto">
                        <svg class="w-16 h-16 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">No results found</h3>
                        <p class="text-gray-600 mb-6">
                            Try searching with different keywords or check the spelling of your search term.
                        </p>
                        
                        <!-- Popular Categories -->
                        @if($categories->count() > 0)
                            <div class="mt-8">
                                <h4 class="text-sm font-medium text-gray-900 mb-4">Browse by Category</h4>
                                <div class="flex flex-wrap justify-center gap-2">
                                    @foreach($categories->take(6) as $category)
                                        <a href="{{ route('blog.category', $category->slug) }}" 
                                           class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-gray-100 text-gray-700 hover:bg-red-100 hover:text-red-700 transition-colors">
                                            {{ $category->name }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </div>

    <!-- Categories Sidebar -->
    @if($categories->count() > 0)
        <div class="bg-gray-50 py-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-2">Browse Categories</h2>
                    <p class="text-gray-600">Explore our content by category</p>
                </div>
                
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                    @foreach($categories as $category)
                        <a href="{{ route('blog.category', $category->slug) }}" 
                           class="bg-white rounded-lg p-4 text-center hover:shadow-md transition-shadow border border-gray-200">
                            <div class="text-red-600 font-semibold text-sm">{{ $category->name }}</div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endsection

@push('styles')
<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@endpush
