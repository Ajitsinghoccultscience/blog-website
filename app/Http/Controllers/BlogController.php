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
            ->limit(6)
            ->get();

        $categories = Category::where('is_active', true)->get();

        // Process content for all posts to fix image URLs
        $posts->transform(function ($post) {
            $post->content = $this->processContentImages($post->content);
            return $post;
        });

        return view('blog.index', compact('posts', 'categories'));
    }

    /**
     * Search blog posts by query.
     */
    public function search(Request $request)
    {
        $query = $request->get('q');
        
        if (empty($query)) {
            return redirect()->route('blog.index');
        }

        $posts = Post::with('category')
            ->where('is_published', true)
            ->where(function ($q) use ($query) {
                $q->where('title', 'LIKE', "%{$query}%")
                  ->orWhere('excerpt', 'LIKE', "%{$query}%")
                  ->orWhereHas('category', function ($categoryQuery) use ($query) {
                      $categoryQuery->where('name', 'LIKE', "%{$query}%");
                  });
            })
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        $categories = Category::where('is_active', true)->get();

        // Process content for all posts to fix image URLs
        $posts->getCollection()->transform(function ($post) {
            $post->content = $this->processContentImages($post->content);
            return $post;
        });

        return view('blog.search', compact('posts', 'categories', 'query'));
    }

    /**
     * Display the specified blog post.
     */
    public function show($slug)
    {
        // Find post by slug (categories use /category/{slug})
        $post = Post::with('category')
            ->where('slug', $slug)
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
        // Remove "Occult Science Blog" or " - Occult Science Blog" from title
        $metaTitle = preg_replace('/\s*-\s*Occult Science Blog\s*/i', '', $metaTitle);
        $metaTitle = preg_replace('/\s*Occult Science Blog\s*-\s*/i', '', $metaTitle);
        $metaTitle = trim($metaTitle);
        $metaDescription = $post->meta_description ?: $post->excerpt ?: Str::limit(strip_tags($post->content), 160);

        // Process content to fix image URLs
        $processedContent = $this->processContentImages($post->content);

        return view('blog.show', compact('post', 'relatedPosts', 'categories', 'metaTitle', 'metaDescription', 'processedContent'));
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
            ->paginate(10
        );

        // Append the category slug to pagination links
        $posts->appends(['category' => $category->slug]);

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
