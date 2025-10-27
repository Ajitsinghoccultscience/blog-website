@extends('admin.layout')

@section('title', 'Edit Category')
@section('page-title', 'Edit Category')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-lg shadow p-6">
        <form action="{{ route('admin.categories.update', $category) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="space-y-6">
                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name *</label>
                    <input type="text" 
                           id="name" 
                           name="name" 
                           value="{{ old('name', $category->name) }}" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent @error('name') border-red-500 @enderror"
                           placeholder="Enter category name"
                           required>
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Slug -->
                <div>
                    <label for="slug" class="block text-sm font-medium text-gray-700 mb-2">Slug *</label>
                    <input type="text" 
                           id="slug" 
                           name="slug" 
                           value="{{ old('slug', $category->slug) }}" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent @error('slug') border-red-500 @enderror"
                           placeholder="category-slug"
                           required>
                    <p class="mt-1 text-sm text-gray-500">URL-friendly version of the name</p>
                    @error('slug')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                    <textarea id="description" 
                              name="description" 
                              rows="3" 
                              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent @error('description') border-red-500 @enderror"
                              placeholder="Enter category description">{{ old('description', $category->description) }}</textarea>
                    @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Color -->
                <div>
                    <label for="color" class="block text-sm font-medium text-gray-700 mb-2">Color</label>
                    <div class="flex items-center space-x-3">
                        <input type="color" 
                               id="color" 
                               name="color" 
                               value="{{ old('color', $category->color) }}" 
                               class="w-12 h-10 border border-gray-300 rounded cursor-pointer">
                        <input type="text" 
                               id="color-text" 
                               value="{{ old('color', $category->color) }}" 
                               class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                               placeholder="#6366f1"
                               readonly>
                    </div>
                    <p class="mt-1 text-sm text-gray-500">Choose a color for this category</p>
                </div>

                <!-- Active Status -->
                <div>
                    <label class="flex items-center">
                        <input type="checkbox" 
                               name="is_active" 
                               value="1" 
                               {{ old('is_active', $category->is_active) ? 'checked' : '' }}
                               class="rounded border-gray-300 text-primary focus:ring-primary">
                        <span class="ml-2 text-sm text-gray-700">Active</span>
                    </label>
                    <p class="mt-1 text-sm text-gray-500">Only active categories will be visible on the website</p>
                </div>
            </div>

            <!-- Actions -->
            <div class="mt-8 flex justify-end space-x-3">
                <a href="{{ route('admin.categories.index') }}" 
                   class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition-colors">
                    Cancel
                </a>
                <button type="submit" 
                        class="px-4 py-2 bg-primary text-white rounded-md hover:bg-blue-700 transition-colors">
                    Update Category
                </button>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const colorPicker = document.getElementById('color');
    const colorText = document.getElementById('color-text');
    
    colorPicker.addEventListener('input', function() {
        colorText.value = this.value;
    });
    
    colorText.addEventListener('input', function() {
        if (this.value.match(/^#[0-9A-F]{6}$/i)) {
            colorPicker.value = this.value;
        }
    });
});
</script>
@endsection
