<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of published blog posts.
     */
    public function index()
    {
        $posts = Post::with('category')
            ->where('is_published', true)
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        $categories = Category::where('is_active', true)->get();

        // Process content for all posts to fix image URLs
        $posts->getCollection()->transform(function ($post) {
            $post->content = $this->processContentImages($post->content);
            return $post;
        });

        return view('blog.index', compact('posts', 'categories'));
    }

    /**
     * Display the specified blog post or category.
     */
    public function show($slug, $post_slug = null)
    {
        if ($post_slug !== null) {
            // It's a nested route: /category-slug/post-slug
            // First, find the category
            $category = Category::where('slug', $slug)
                ->where('is_active', true)
                ->firstOrFail();

            // Then find the post within that category
            $post = Post::with('category')
                ->where('slug', $post_slug)
                ->where('category_id', $category->id)
                ->where('is_published', true)
                ->firstOrFail();

            $relatedPosts = Post::with('category')
                ->where('is_published', true)
                ->where('id', '!=', $post->id)
                ->where('category_id', $post->category_id)
                ->limit(3)
                ->get();

            $categories = Category::where('is_active', true)->get();

            // Set meta data
            $metaTitle = $post->meta_title ?: $post->title;
            $metaDescription = $post->meta_description ?: $post->excerpt ?: Str::limit(strip_tags($post->content), 160);

            // Process content to fix image URLs
            $processedContent = $this->processContentImages($post->content);

            return view('blog.show', compact('post', 'relatedPosts', 'categories', 'metaTitle', 'metaDescription', 'processedContent'));
        } else {
            // It's a single slug route: /slug
            // First, try to find a category with this slug
            $category = Category::where('slug', $slug)
                ->where('is_active', true)
                ->first();

            if ($category) {
                // It's a category, show the category page
                $posts = Post::with('category')
                    ->where('is_published', true)
                    ->where('category_id', $category->id)
                    ->orderBy('published_at', 'desc')
                    ->paginate(10);

                $categories = Category::where('is_active', true)->get();

                // Process content for all posts to fix image URLs
                $posts->getCollection()->transform(function ($post) {
                    $post->content = $this->processContentImages($post->content);
                    return $post;
                });

                return view('blog.category', compact('posts', 'category', 'categories'));
            }

            // If not a category, try to find a post with this slug
            $post = Post::with('category')
                ->where('slug', $slug)
                ->where('is_published', true)
                ->first();

            if ($post) {
                // It's a post, show the post
                $relatedPosts = Post::with('category')
                    ->where('is_published', true)
                    ->where('id', '!=', $post->id)
                    ->where('category_id', $post->category_id)
                    ->limit(3)
                    ->get();

                $categories = Category::where('is_active', true)->get();

                // Set meta data
                $metaTitle = $post->meta_title ?: $post->title;
                $metaDescription = $post->meta_description ?: $post->excerpt ?: Str::limit(strip_tags($post->content), 160);

                // Process content to fix image URLs
                $processedContent = $this->processContentImages($post->content);

                return view('blog.show', compact('post', 'relatedPosts', 'categories', 'metaTitle', 'metaDescription', 'processedContent'));
            }

            // If neither category nor post found, return 404
            abort(404);
        }
    }

    /**
     * Display posts by category.
     */
    public function category($slug)
    {
        $category = Category::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $posts = Post::with('category')
            ->where('is_published', true)
            ->where('category_id', $category->id)
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        $categories = Category::where('is_active', true)->get();

        // Process content for all posts to fix image URLs
        $posts->getCollection()->transform(function ($post) {
            $post->content = $this->processContentImages($post->content);
            return $post;
        });

        return view('blog.category', compact('posts', 'category', 'categories'));
    }

    /**
     * Display the About Us page.
     */
    public function about()
    {
        return view('blog.about');
    }

    /**
     * Process content to fix image URLs for file attachments
     */
    public function processContentImages($content)
    {
        // Fix all img tags with storage URLs
        $content = preg_replace_callback(
            '/<img([^>]*?)src="([^"]*)"([^>]*?)>/i',
            function ($matches) {
                $beforeSrc = $matches[1];
                $src = $matches[2];
                $afterSrc = $matches[3];
                
                // Fix localhost URLs to use 127.0.0.1:8000
                if (strpos($src, 'http://localhost/') === 0) {
                    $src = str_replace('http://localhost/', 'http://127.0.0.1:8000/', $src);
                    return '<img' . $beforeSrc . 'src="' . $src . '"' . $afterSrc . '>';
                }
                
                // Skip if already a full URL with correct host
                if (strpos($src, 'http://127.0.0.1:8000') === 0) {
                    return $matches[0];
                }
                
                // Convert relative storage URLs to full URLs using Storage::url()
                if (strpos($src, '/storage/') === 0) {
                    $src = url($src);
                } elseif (strpos($src, 'storage/') === 0) {
                    $src = url('/' . $src);
                } elseif (strpos($src, 'app/public/') === 0) {
                    // Handle direct app/public paths
                    $src = url('/storage/' . str_replace('app/public/', '', $src));
                }
                
                return '<img' . $beforeSrc . 'src="' . $src . '"' . $afterSrc . '>';
            },
            $content
        );

        return $content;
    }
}
