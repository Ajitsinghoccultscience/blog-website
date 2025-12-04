<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<url>
<loc>{{ url('/') }}/</loc>


</url>
<url>
<loc>{{ url(route('blog.about')) }}/</loc>


</url>
@foreach ($posts as $post)
@if(!empty($post->slug))
<url>
<loc>{{ url(route('blog.post', $post->slug)) }}/</loc>


</url>
@endif
@endforeach
</urlset>

