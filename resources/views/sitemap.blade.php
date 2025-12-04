<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

    {{-- Homepage --}}
    <url>
        <loc>{{ url('/') }}/</loc>
        <lastmod>{{ now()->toAtomString() }}</lastmod>
    </url>

    {{-- About Page --}}
    <url>
        <loc>{{ route('blog.about') }}/</loc>
        <lastmod>{{ now()->toAtomString() }}</lastmod>
    </url>

    {{-- All Published Blog Posts --}}
    @foreach ($posts as $post)
    <url>
        <loc>{{ route('blog.post', $post->slug) }}/</loc>
        <lastmod>{{ $post->updated_at->toAtomString() }}</lastmod>
    </url>
    @endforeach

    {{-- All Active Categories --}}
    @foreach ($categories as $category)
    <url>
        <loc>{{ route('blog.category', $category->slug) }}/</loc>
        <lastmod>{{ $category->updated_at->toAtomString() }}</lastmod>
    </url>
    @endforeach

</urlset>

