@extends('admin.layout')

@section('title', 'Edit Post')
@section('page-title', 'Edit Post')

@section('content')
<div class="max-w-7xl mx-auto">
    <!-- Progress Steps -->
    <div class="mb-8">
        <div class="flex items-center justify-center space-x-4">
            <div class="flex items-center">
                <div class="w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center text-sm font-medium">1</div>
                <span class="ml-2 text-sm font-medium text-gray-700">Basic Info</span>
            </div>
            <div class="w-16 h-0.5 bg-gray-300"></div>
            <div class="flex items-center">
                <div class="w-8 h-8 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center text-sm font-medium">2</div>
                <span class="ml-2 text-sm font-medium text-gray-500">Content</span>
            </div>
            <div class="w-16 h-0.5 bg-gray-300"></div>
            <div class="flex items-center">
                <div class="w-8 h-8 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center text-sm font-medium">3</div>
                <span class="ml-2 text-sm font-medium text-gray-500">Settings</span>
            </div>
        </div>
    </div>

    <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data" id="postForm">
        @csrf
        @method('PUT')
        
        <!-- Step 1: Basic Information -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 mb-8" id="step1">
            <div class="px-8 py-6 border-b border-gray-200">
                <h2 class="text-xl font-semibold text-gray-900 flex items-center">
                    <i class="fas fa-info-circle text-primary mr-3"></i>
                    Basic Information
                </h2>
                <p class="text-gray-600 mt-1">Update the essential details for your post</p>
            </div>
            
            <div class="px-8 py-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Title -->
                    <div class="lg:col-span-2">
                        <label for="title" class="block text-sm font-semibold text-gray-700 mb-3">
                            Post Title <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               id="title" 
                               name="title" 
                               value="{{ old('title', $post->title) }}" 
                               class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-200 @error('title') border-red-400 @enderror"
                               placeholder="Enter an engaging post title..."
                               required>
                        @error('title')
                            <p class="mt-2 text-sm text-red-600 flex items-center">
                                <i class="fas fa-exclamation-circle mr-1"></i>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Slug -->
                    <div>
                        <label for="slug" class="block text-sm font-semibold text-gray-700 mb-3">
                            URL Slug <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 text-sm">/category-slug/</span>
                            </div>
                            <input type="text" 
                                   id="slug" 
                                   name="slug" 
                                   value="{{ old('slug', $post->slug) }}" 
                                   class="w-full pl-24 pr-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-200 @error('slug') border-red-400 @enderror"
                                   placeholder="post-slug"
                                   required>
                        </div>
                        <p class="mt-2 text-sm text-gray-500 flex items-center">
                            <i class="fas fa-info-circle mr-1"></i>
                            Auto-generated from title, but you can customize it
                        </p>
                        @error('slug')
                            <p class="mt-2 text-sm text-red-600 flex items-center">
                                <i class="fas fa-exclamation-circle mr-1"></i>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Category -->
                    <div>
                        <label for="category_id" class="block text-sm font-semibold text-gray-700 mb-3">
                            Category <span class="text-red-500">*</span>
                        </label>
                        <select name="category_id" 
                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-200 @error('category_id') border-red-400 @enderror"
                                required>
                            <option value="">Choose a category...</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="mt-2 text-sm text-red-600 flex items-center">
                                <i class="fas fa-exclamation-circle mr-1"></i>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 2: Content -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 mb-8" id="step2">
            <div class="px-8 py-6 border-b border-gray-200">
                <h2 class="text-xl font-semibold text-gray-900 flex items-center">
                    <i class="fas fa-edit text-primary mr-3"></i>
                    Content
                </h2>
                <p class="text-gray-600 mt-1">Update your post content and excerpt</p>
            </div>
            
            <div class="px-8 py-6">
                <div class="space-y-8">
                    <!-- Excerpt -->
                    <div>
                        <label for="excerpt" class="block text-sm font-semibold text-gray-700 mb-3">
                            Post Excerpt
                        </label>
                        <textarea id="excerpt" 
                                  name="excerpt" 
                                  rows="4" 
                                  class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-200 @error('excerpt') border-red-400 @enderror"
                                  placeholder="Write a compelling excerpt that summarizes your post...">{{ old('excerpt', $post->excerpt) }}</textarea>
                        <div class="mt-2 flex justify-between items-center">
                            <p class="text-sm text-gray-500 flex items-center">
                                <i class="fas fa-info-circle mr-1"></i>
                                Brief summary for search results and social sharing
                            </p>
                            <span class="text-sm text-gray-400" id="excerpt-count">0/500</span>
                        </div>
                        @error('excerpt')
                            <p class="mt-2 text-sm text-red-600 flex items-center">
                                <i class="fas fa-exclamation-circle mr-1"></i>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Content -->
                    <div>
                        <label for="content" class="block text-sm font-semibold text-gray-700 mb-3">
                            Post Content <span class="text-red-500">*</span>
                        </label>
                        <textarea id="content" 
                                  name="content" 
                                  rows="20" 
                                  class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-200 @error('content') border-red-400 @enderror"
                                  placeholder="Write your post content here... Use markdown or HTML formatting."
                                  required>{{ old('content', $post->content) }}</textarea>
                        <p class="mt-2 text-sm text-gray-500 flex items-center">
                            <i class="fas fa-info-circle mr-1"></i>
                            Supports HTML and Markdown formatting
                        </p>
                        @error('content')
                            <p class="mt-2 text-sm text-red-600 flex items-center">
                                <i class="fas fa-exclamation-circle mr-1"></i>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 3: Settings & Media -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 mb-8" id="step3">
            <div class="px-8 py-6 border-b border-gray-200">
                <h2 class="text-xl font-semibold text-gray-900 flex items-center">
                    <i class="fas fa-cog text-primary mr-3"></i>
                    Settings & Media
                </h2>
                <p class="text-gray-600 mt-1">Configure publishing, SEO, and media settings</p>
            </div>
            
            <div class="px-8 py-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Left Column -->
                    <div class="space-y-8">
                        <!-- Featured Image -->
                        <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                <i class="fas fa-image text-primary mr-2"></i>
                                Featured Image
                            </h3>
                            <div class="space-y-4">
                                @if($post->featured_image)
                                    <div class="mb-4">
                                        <div class="relative">
                                            <img src="{{ Storage::url($post->featured_image) }}" 
                                                 alt="{{ $post->title }}" 
                                                 class="w-full h-48 object-cover rounded-lg border-2 border-gray-200">
                                            <div class="absolute top-2 right-2">
                                                <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-1 rounded-full">
                                                    Current Image
                                                </span>
                                            </div>
                                        </div>
                                        <p class="text-sm text-gray-500 mt-2 flex items-center">
                                            <i class="fas fa-info-circle mr-1"></i>
                                            Upload a new image to replace the current one
                                        </p>
                                    </div>
                                @endif
                                
                                <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-primary transition-colors">
                                    <input type="file" 
                                           name="featured_image" 
                                           id="featured_image"
                                           accept="image/*"
                                           class="hidden"
                                           onchange="previewImage(this)">
                                    <label for="featured_image" class="cursor-pointer">
                                        <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-3"></i>
                                        <p class="text-sm text-gray-600 mb-1">
                                            {{ $post->featured_image ? 'Click to replace image' : 'Click to upload image' }}
                                        </p>
                                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 2MB</p>
                                    </label>
                                </div>
                                <div id="image-preview" class="hidden">
                                    <img id="preview-img" class="w-full h-48 object-cover rounded-lg">
                                    <button type="button" onclick="removeImage()" class="mt-2 text-sm text-red-600 hover:text-red-800">
                                        <i class="fas fa-trash mr-1"></i>Remove New Image
                                    </button>
                                </div>
                                @error('featured_image')
                                    <p class="mt-2 text-sm text-red-600 flex items-center">
                                        <i class="fas fa-exclamation-circle mr-1"></i>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <!-- Publish Settings -->
                        <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                <i class="fas fa-calendar-alt text-primary mr-2"></i>
                                Publish Settings
                            </h3>
                            <div class="space-y-4">
                                <div class="flex items-center">
                                    <input type="checkbox" 
                                           name="is_published" 
                                           value="1" 
                                           id="is_published"
                                           {{ old('is_published', $post->is_published) ? 'checked' : '' }}
                                           class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary focus:ring-2">
                                    <label for="is_published" class="ml-3 text-sm font-medium text-gray-700">
                                        Publish immediately
                                    </label>
                                </div>

                                <div id="publish-date" class="{{ old('is_published', $post->is_published) ? '' : 'hidden' }}">
                                    <label for="published_at" class="block text-sm font-medium text-gray-700 mb-2">
                                        Schedule Publish Date
                                    </label>
                                    <input type="datetime-local" 
                                           id="published_at" 
                                           name="published_at" 
                                           value="{{ old('published_at', $post->published_at ? $post->published_at->format('Y-m-d\TH:i') : '') }}" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-8">
                        <!-- SEO Settings -->
                        <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                <i class="fas fa-search text-primary mr-2"></i>
                                SEO Settings
                            </h3>
                            <div class="space-y-6">
                                <div>
                                    <label for="meta_title" class="block text-sm font-medium text-gray-700 mb-2">
                                        Meta Title
                                    </label>
                                    <input type="text" 
                                           id="meta_title" 
                                           name="meta_title" 
                                           value="{{ old('meta_title', $post->meta_title) }}" 
                                           maxlength="60"
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary @error('meta_title') border-red-400 @enderror"
                                           placeholder="SEO title (max 60 chars)">
                                    <div class="mt-1 flex justify-between items-center">
                                        <p class="text-xs text-gray-500">Leave empty to use post title</p>
                                        <span class="text-xs text-gray-400" id="meta-title-count">0/60</span>
                                    </div>
                                    @error('meta_title')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="meta_description" class="block text-sm font-medium text-gray-700 mb-2">
                                        Meta Description
                                    </label>
                                    <textarea id="meta_description" 
                                              name="meta_description" 
                                              rows="3" 
                                              maxlength="160"
                                              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary @error('meta_description') border-red-400 @enderror"
                                              placeholder="SEO description (max 160 chars)">{{ old('meta_description', $post->meta_description) }}</textarea>
                                    <div class="mt-1 flex justify-between items-center">
                                        <p class="text-xs text-gray-500">Leave empty to use excerpt</p>
                                        <span class="text-xs text-gray-400" id="meta-desc-count">0/160</span>
                                    </div>
                                    @error('meta_description')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
            <div class="flex justify-between items-center">
                <a href="{{ route('admin.posts.index') }}" 
                   class="px-6 py-3 border-2 border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 hover:border-gray-400 transition-all duration-200 font-medium">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Cancel
                </a>
                
                <div class="flex space-x-3">
                    <button type="button" 
                            id="saveDraft"
                            class="px-6 py-3 border-2 border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-all duration-200 font-medium">
                        <i class="fas fa-save mr-2"></i>
                        Save Draft
                    </button>
                    <button type="submit" 
                            class="px-8 py-3 bg-primary text-white rounded-lg hover:bg-blue-700 transition-all duration-200 font-medium shadow-lg hover:shadow-xl">
                        <i class="fas fa-save mr-2"></i>
                        Update Post
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const titleInput = document.getElementById('title');
    const slugInput = document.getElementById('slug');
    const publishCheckbox = document.getElementById('is_published');
    const publishDateDiv = document.getElementById('publish-date');
    const excerptTextarea = document.getElementById('excerpt');
    const metaTitleInput = document.getElementById('meta_title');
    const metaDescTextarea = document.getElementById('meta_description');
    const saveDraftBtn = document.getElementById('saveDraft');
    
    // Auto-generate slug from title
    titleInput.addEventListener('blur', function() {
        if (!slugInput.value) {
            const title = this.value;
            const slug = title.toLowerCase()
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-')
                .trim('-');
            slugInput.value = slug;
        }
    });
    
    // Show/hide publish date
    publishCheckbox.addEventListener('change', function() {
        if (this.checked) {
            publishDateDiv.classList.remove('hidden');
            if (!document.getElementById('published_at').value) {
                const now = new Date();
                const localDateTime = new Date(now.getTime() - now.getTimezoneOffset() * 60000).toISOString().slice(0, 16);
                document.getElementById('published_at').value = localDateTime;
            }
        } else {
            publishDateDiv.classList.add('hidden');
        }
    });
    
    // Character counters
    function updateCounter(element, counterId, maxLength) {
        const count = element.value.length;
        document.getElementById(counterId).textContent = `${count}/${maxLength}`;
        
        if (count > maxLength * 0.9) {
            document.getElementById(counterId).classList.add('text-yellow-500');
        } else {
            document.getElementById(counterId).classList.remove('text-yellow-500');
        }
    }
    
    excerptTextarea.addEventListener('input', () => updateCounter(excerptTextarea, 'excerpt-count', 500));
    metaTitleInput.addEventListener('input', () => updateCounter(metaTitleInput, 'meta-title-count', 60));
    metaDescTextarea.addEventListener('input', () => updateCounter(metaDescTextarea, 'meta-desc-count', 160));
    
    // Save draft functionality
    saveDraftBtn.addEventListener('click', function() {
        publishCheckbox.checked = false;
        publishDateDiv.classList.add('hidden');
        document.getElementById('postForm').submit();
    });
    
    // Initialize counters
    updateCounter(excerptTextarea, 'excerpt-count', 500);
    updateCounter(metaTitleInput, 'meta-title-count', 60);
    updateCounter(metaDescTextarea, 'meta-desc-count', 160);
});

// Image preview functionality
function previewImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('preview-img').src = e.target.result;
            document.getElementById('image-preview').classList.remove('hidden');
            document.querySelector('.border-dashed').classList.add('hidden');
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function removeImage() {
    document.getElementById('featured_image').value = '';
    document.getElementById('image-preview').classList.add('hidden');
    document.querySelector('.border-dashed').classList.remove('hidden');
}
</script>
@endsection
