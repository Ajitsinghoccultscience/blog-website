@extends('admin.layout')

@section('title', 'Create Post')
@section('page-title', 'Create New Post')

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

    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data" id="postForm">
        @csrf
        
        <!-- Step 1: Basic Information -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 mb-8" id="step1">
            <div class="px-8 py-6 border-b border-gray-200">
                <h2 class="text-xl font-semibold text-gray-900 flex items-center">
                    <i class="fas fa-info-circle text-primary mr-3"></i>
                    Basic Information
                </h2>
                <p class="text-gray-600 mt-1">Provide the essential details for your post</p>
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
                               value="{{ old('title') }}" 
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
                                <!-- <span class="text-gray-600 text-sm font-medium">/category-slug/</span> -->
                            </div>
                            <input type="text" 
                                   id="slug" 
                                   name="slug" 
                                   value="{{ old('slug') }}" 
                                   class="w-full pl-5 pr-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-200 @error('slug') border-red-400 @enderror placeholder-gray-400"
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
                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
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
                <p class="text-gray-600 mt-1">Write your post content and excerpt</p>
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
                                  placeholder="Write a compelling excerpt that summarizes your post...">{{ old('excerpt') }}</textarea>
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

                    <!-- Tags -->
                    <div>
                        <label for="tags" class="block text-sm font-semibold text-gray-700 mb-3">
                            Tags
                        </label>
                        <input type="text" 
                               id="tags" 
                               name="tags" 
                               value="{{ old('tags') }}"
                               class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-200 @error('tags') border-red-400 @enderror"
                               placeholder="Enter tags separated by commas (e.g., astrology, zodiac, mysticism)">
                        <p class="mt-2 text-sm text-gray-500 flex items-center">
                            <i class="fas fa-info-circle mr-1"></i>
                            Separate multiple tags with commas
                        </p>
                        @error('tags')
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
                                  class="w-full @error('content') border-red-400 @enderror"
                                  required>{{ old('content') }}</textarea>
                        <p class="mt-2 text-sm text-gray-500 flex items-center">
                            <i class="fas fa-info-circle mr-1"></i>
                            Rich text editor with HTML source editing capability
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
                                <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-primary transition-colors">
                                    <input type="file" 
                                           name="featured_image" 
                                           id="featured_image"
                                           accept="image/*"
                                           class="hidden"
                                           onchange="previewImage(this)">
                                    <label for="featured_image" class="cursor-pointer">
                                        <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-3"></i>
                                        <p class="text-sm text-gray-600 mb-1">Click to upload image</p>
                                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 2MB</p>
                                    </label>
                                </div>
                                <div id="image-preview" class="hidden">
                                    <img id="preview-img" class="w-full h-48 object-cover rounded-lg">
                                    <button type="button" onclick="removeImage()" class="mt-2 text-sm text-red-600 hover:text-red-800">
                                        <i class="fas fa-trash mr-1"></i>Remove Image
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
                                           {{ old('is_published') ? 'checked' : '' }}
                                           class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary focus:ring-2">
                                    <label for="is_published" class="ml-3 text-sm font-medium text-gray-700">
                                        Publish immediately
                                    </label>
                                </div>

                                <div id="publish-date" class="hidden">
                                    <label for="published_at" class="block text-sm font-medium text-gray-700 mb-2">
                                        Schedule Publish Date
                                    </label>
                                    <input type="datetime-local" 
                                           id="published_at" 
                                           name="published_at" 
                                           value="{{ old('published_at') }}" 
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
                                           value="{{ old('meta_title') }}" 
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
                                              placeholder="SEO description (max 160 chars)">{{ old('meta_description') }}</textarea>
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
                        <i class="fas fa-rocket mr-2"></i>
                        Create Post
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
                .replace(/[^a-z0-9\s\/-]/g, '')
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
            const now = new Date();
            const localDateTime = new Date(now.getTime() - now.getTimezoneOffset() * 60000).toISOString().slice(0, 16);
            document.getElementById('published_at').value = localDateTime;
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

// Initialize TinyMCE
tinymce.init({
    selector: '#content',
    height: 500,
    base_url: '{{ asset("tinymce/js/tinymce") }}',
    suffix: '.min',
    license_key: 'gpl',
    plugins: [
        'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
        'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
        'insertdatetime', 'media', 'table', 'help', 'wordcount'
    ],
    toolbar: 'undo redo | blocks | ' +
        'bold italic forecolor | alignleft aligncenter ' +
        'alignright alignjustify | bullist numlist outdent indent | ' +
        'removeformat | help | code | image | link | table',
    menubar: 'file edit view insert format tools table help',
    content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; margin: 0; padding: 0; } h1, h2, h3, h4, h5, h6 { margin-top: 2em; margin-bottom: 1em; line-height: 1.3; } p { margin-bottom: 1.2em; line-height: 1.7; } a { color: #ef4444; text-decoration: underline; } ul, ol { margin: 1rem 0; padding-left: 2rem; list-style-position: outside; } ul { list-style-type: disc; } ol { list-style-type: decimal; } li { margin: 0.5rem 0; display: list-item; }',
    branding: false,
    promotion: false,
    images_upload_url: '{{ route("admin.posts.upload-image") }}',
    automatic_uploads: true,
    images_upload_handler: function (blobInfo, progress) {
        return new Promise(function (resolve, reject) {
            var xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', '{{ route("admin.posts.upload-image") }}');
            
            xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
            
            xhr.upload.onprogress = function (e) {
                progress(e.loaded / e.total * 100);
            };
            
            xhr.onload = function() {
                console.log('Upload response:', xhr.responseText);
                if (xhr.status === 200) {
                    var json = JSON.parse(xhr.responseText);
                    if (json && json.location) {
                        console.log('Image URL:', json.location);
                        resolve(json.location);
                    } else {
                        console.error('Invalid JSON response:', json);
                        reject('Invalid JSON: ' + xhr.responseText);
                    }
                } else {
                    console.error('HTTP Error:', xhr.status, xhr.responseText);
                    reject('HTTP Error: ' + xhr.status);
                }
            };
            
            xhr.onerror = function() {
                console.error('Upload failed');
                reject('Upload failed');
            };
            
            var formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());
            xhr.send(formData);
        });
    },
    setup: function (editor) {
        editor.on('change', function () {
            editor.save();
        });
    }
});
</script>
@endsection
