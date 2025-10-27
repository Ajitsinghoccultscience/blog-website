@extends('admin.layout')

@section('title', 'View Category')
@section('page-title', 'Category Details')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex justify-between items-start mb-6">
            <div>
                <h2 class="text-2xl font-bold text-gray-900">{{ $category->name }}</h2>
                <p class="text-gray-600 mt-1">{{ $category->slug }}</p>
            </div>
            <div class="flex space-x-3">
                <a href="{{ route('admin.categories.edit', $category) }}" 
                   class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                    <i class="fas fa-edit mr-2"></i>Edit
                </a>
                <a href="{{ route('admin.categories.index') }}" 
                   class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition-colors">
                    <i class="fas fa-arrow-left mr-2"></i>Back
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Category Info -->
            <div class="space-y-4">
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Category Information</h3>
                    
                    <div class="space-y-3">
                        <div class="flex items-center">
                            <span class="w-20 text-sm font-medium text-gray-500">Name:</span>
                            <span class="text-gray-900">{{ $category->name }}</span>
                        </div>
                        
                        <div class="flex items-center">
                            <span class="w-20 text-sm font-medium text-gray-500">Slug:</span>
                            <code class="bg-gray-100 px-2 py-1 rounded text-sm">{{ $category->slug }}</code>
                        </div>
                        
                        <div class="flex items-center">
                            <span class="w-20 text-sm font-medium text-gray-500">Color:</span>
                            <div class="flex items-center">
                                <div class="w-4 h-4 rounded-full mr-2" style="background-color: {{ $category->color }}"></div>
                                <span class="text-gray-900">{{ $category->color }}</span>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <span class="w-20 text-sm font-medium text-gray-500">Status:</span>
                            @if($category->is_active)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    <i class="fas fa-check-circle mr-1"></i>Active
                                </span>
                            @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                    <i class="fas fa-times-circle mr-1"></i>Inactive
                                </span>
                            @endif
                        </div>
                        
                        <div class="flex items-center">
                            <span class="w-20 text-sm font-medium text-gray-500">Posts:</span>
                            <span class="text-gray-900">{{ $category->posts_count }}</span>
                        </div>
                        
                        <div class="flex items-center">
                            <span class="w-20 text-sm font-medium text-gray-500">Created:</span>
                            <span class="text-gray-900">{{ $category->created_at->format('M d, Y g:i A') }}</span>
                        </div>
                        
                        <div class="flex items-center">
                            <span class="w-20 text-sm font-medium text-gray-500">Updated:</span>
                            <span class="text-gray-900">{{ $category->updated_at->format('M d, Y g:i A') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Description -->
            <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Description</h3>
                @if($category->description)
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="text-gray-700">{{ $category->description }}</p>
                    </div>
                @else
                    <div class="bg-gray-50 p-4 rounded-lg text-gray-500 italic">
                        No description provided
                    </div>
                @endif
            </div>
        </div>

        <!-- Posts in this category -->
        @if($category->posts_count > 0)
        <div class="mt-8">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Posts in this Category</h3>
            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-gray-600">
                    This category has {{ $category->posts_count }} {{ Str::plural('post', $category->posts_count) }}.
                    <a href="{{ route('blog.category', $category->slug) }}" 
                       class="text-primary hover:text-blue-700 ml-1">
                        View posts →
                    </a>
                </p>
            </div>
        </div>
        @endif

        <!-- Danger Zone -->
        <div class="mt-8 pt-6 border-t border-gray-200">
            <h3 class="text-lg font-semibold text-red-600 mb-4">Danger Zone</h3>
            <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                <div class="flex items-center justify-between">
                    <div>
                        <h4 class="text-sm font-medium text-red-800">Delete Category</h4>
                        <p class="text-sm text-red-600 mt-1">
                            @if($category->posts_count > 0)
                                Cannot delete category with existing posts. Please move or delete the posts first.
                            @else
                                Once deleted, this category cannot be recovered.
                            @endif
                        </p>
                    </div>
                    <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" 
                          onsubmit="return confirm('Are you sure you want to delete this category? This action cannot be undone.')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition-colors {{ $category->posts_count > 0 ? 'opacity-50 cursor-not-allowed' : '' }}"
                                {{ $category->posts_count > 0 ? 'disabled' : '' }}>
                            <i class="fas fa-trash mr-2"></i>Delete Category
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
