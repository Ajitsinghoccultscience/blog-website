@extends('admin.layout')

@section('title', 'View Category')
@section('page-title', 'Category Details')

@section('content')
<div class="max-w-7xl mx-auto">
    <div class="mb-6 flex justify-between items-center">
            <div>
                <h2 class="text-xl font-semibold text-gray-800">{{ $category->name }}</h2>
                <p class="text-sm text-gray-500 mt-1">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $category->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                        {{ $category->is_active ? 'Active' : 'Inactive' }}
                    </span>
                    <span class="ml-3">{{ $category->posts_count }} {{ Str::plural('post', $category->posts_count) }}</span>
                </p>
            </div>
            <div class="flex space-x-3">
                <a href="{{ route('admin.categories.edit', $category) }}" 
                   class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                    <i class="fas fa-edit mr-2"></i>Edit Category
                </a>
                <a href="{{ route('admin.categories.index') }}" 
                   class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition-colors">
                    <i class="fas fa-arrow-left mr-2"></i>Back
                </a>
            </div>
        </div>

        <!-- Posts in this category -->
        <div class="mb-6 flex justify-between items-center">
            <h3 class="text-lg font-semibold text-gray-900">Posts in this Category</h3>
            <a href="{{ route('blog.category', $category->slug) }}/" 
               target="_blank"
               class="text-sm text-primary hover:text-blue-700">
                <i class="fas fa-external-link-alt mr-1"></i>View on website
            </a>
        </div>
        
        <div class="bg-white rounded-lg shadow overflow-hidden">
            @if($category->posts_count > 0)
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-16">#</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider min-w-[300px]">Post</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Published</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($posts as $post)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ ($posts->currentPage() - 1) * $posts->perPage() + $loop->iteration }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">{{ $post->title }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if($post->is_published)
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                <i class="fas fa-check-circle mr-1"></i>Published
                                            </span>
                                        @else
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                                <i class="fas fa-edit mr-1"></i>Draft
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        @if($post->published_at)
                                            {{ $post->published_at->format('M d, Y') }}
                                        @else
                                            <span class="text-gray-400">Not published</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $post->created_at->format('M d, Y') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="flex space-x-2">
                                            <a href="{{ route('blog.post', $post->slug) }}/" 
                                               target="_blank"
                                               class="text-gray-600 hover:text-gray-800" title="View on Website">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.posts.edit', $post) }}" 
                                               class="text-primary hover:text-blue-700" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                @if($posts->hasPages())
                    <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
                        <div class="d-flex justify-content-center">
                            {{ $posts->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                @endif
            @else
                <div class="px-6 py-12 text-center text-gray-500">
                    <i class="fas fa-file-alt text-4xl mb-4"></i>
                    <p class="text-lg">No posts in this category</p>
                </div>
            @endif
        </div>

        <!-- Actions -->
        <div class="mt-8 pt-6 border-t border-gray-200">
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
@endsection

