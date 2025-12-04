<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

    {{-- Homepage --}}
    <url>
        <loc>{{ url('/') }}/</loc>
      
    </url>

    {{-- About Page --}}
    <url>
        <loc>{{ route('blog.about') }}/</loc>
        
    </url>

    {{-- All Published Blog Posts --}}
    @foreach ($posts as $post)
    <url>
        <loc>{{ route('blog.post', $post->slug) }}/</loc>
        
    </url>
    @endforeach

    
</urlset>

