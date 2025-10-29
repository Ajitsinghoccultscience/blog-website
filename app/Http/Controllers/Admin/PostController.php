<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of posts.
     */
    public function index(Request $request)
    {
        $query = Post::on('mysql')->with('category');

        // Search by title only
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where('title', 'like', "%{$search}%");
        }

        $posts = $query->orderBy('created_at', 'desc')->paginate(15);

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new post.
     */
    public function create()
    {
        $categories = Category::on('mysql')->where('is_active', true)->get();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created post in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:posts,slug',
            'excerpt' => 'nullable|string|max:500',
            'tags' => 'nullable|string',
            'content' => 'required|string',
            'meta_title' => 'nullable|string|max:60',
            'meta_description' => 'nullable|string|max:160',
            'category_id' => 'required|exists:categories,id',
            'featured_image' => 'nullable|image|mimes:jpeg,png,gif,webp|max:2048',
            'is_published' => 'boolean',
            'published_at' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = [
            'title' => $request->title,
            'slug' => $request->slug,
            'excerpt' => $request->excerpt,
            'tags' => $request->tags,
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'category_id' => $request->category_id,
            'is_published' => $request->has('is_published'),
            'published_at' => $request->is_published ? ($request->published_at ?: now()) : null,
        ];

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $filename = time() . '_' . Str::slug($request->title) . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('posts', $filename, 'public');
            $data['featured_image'] = $path;
        }

        $post = Post::create($data);

        return redirect()->route('admin.posts.index')
            ->with('success', 'Post created successfully.');
    }

    

    /**
     * Show the form for editing the specified post.
     */
    public function edit(Post $post)
    {
        $categories = Category::on('mysql')->where('is_active', true)->get();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified post in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:posts,slug,' . $post->id,
            'excerpt' => 'nullable|string|max:500',
            'tags' => 'nullable|string',
            'content' => 'required|string',
            'meta_title' => 'nullable|string|max:60',
            'meta_description' => 'nullable|string|max:160',
            'category_id' => 'required|exists:categories,id',
            'featured_image' => 'nullable|image|mimes:jpeg,png,gif,webp|max:2048',
            'is_published' => 'boolean',
            'published_at' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = [
            'title' => $request->title,
            'slug' => $request->slug,
            'excerpt' => $request->excerpt,
            'tags' => $request->tags,
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'category_id' => $request->category_id,
            'is_published' => $request->has('is_published'),
            'published_at' => $request->is_published ? ($request->published_at ?: now()) : null,
        ];

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            // Delete old image if exists
            if ($post->featured_image && Storage::disk('public')->exists($post->featured_image)) {
                Storage::disk('public')->delete($post->featured_image);
            }

            $image = $request->file('featured_image');
            $filename = time() . '_' . Str::slug($request->title) . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('posts', $filename, 'public');
            $data['featured_image'] = $path;
        }

        $post->update($data);

        return redirect()->route('admin.posts.index')
            ->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified post from storage.
     */
    public function destroy(Post $post)
    {
        // Delete featured image if exists
        if ($post->featured_image && Storage::disk('public')->exists($post->featured_image)) {
            Storage::disk('public')->delete($post->featured_image);
        }

        $post->delete();

        return redirect()->route('admin.posts.index')
            ->with('success', 'Post deleted successfully.');
    }

    /**
     * Toggle post publication status
     */
    public function toggleStatus(Post $post)
    {
        $post->update([
            'is_published' => !$post->is_published,
            'published_at' => !$post->is_published ? now() : null,
        ]);

        $status = $post->is_published ? 'published' : 'unpublished';
        return redirect()->back()
            ->with('success', "Post {$status} successfully.");
    }

    /**
     * Generate slug from title
     */
    public function generateSlug(Request $request)
    {
        $title = $request->input('title');
        $slug = Str::slug($title);
        
        // Check if slug already exists
        $count = Post::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . ($count + 1);
        }
        
        return response()->json(['slug' => $slug]);
    }

    /**
     * Upload image for TinyMCE editor
     */
    public function uploadImage(Request $request)
    {
        \Log::info('Upload attempt started', ['request' => $request->all()]);
        
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            
            // Try storing in public directory directly
            $publicPath = public_path('uploads/posts');
            if (!file_exists($publicPath)) {
                mkdir($publicPath, 0755, true);
            }
            
            // Move file to public directory
            $file->move($publicPath, $filename);
            
            \Log::info('File uploaded successfully', ['filename' => $filename, 'path' => $publicPath]);
            
            $url = url('uploads/posts/' . $filename);
            
            \Log::info('Generated URL', ['url' => $url]);
            
            return response()->json([
                'location' => $url
            ]);
        }

        \Log::error('No file uploaded');
        return response()->json(['error' => 'No file uploaded'], 400);
    }
}
