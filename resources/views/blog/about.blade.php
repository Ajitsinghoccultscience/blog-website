@extends('layouts.homepage')

@section('title', 'About Us - Occult Science Blog')
@section('description', 'Learn about the fascinating world of occult science, our institute, and our mission to explore the hidden aspects of reality.')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <!-- Page Header -->
    <div class="text-center mb-12">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">
            <span class="text-gray-900">About</span>
            <span class="text-orange-600">Us</span>
        </h1>
    </div>

    <!-- Content Sections -->
    <div class="prose prose-lg max-w-none">
        <!-- Introduction Section -->
        <div class="mb-8">
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Welcome to the fascinating world of occult science! This is a place where we explore the hidden aspects of reality and delve into the mysteries of the universe.
            </p>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Occult science is a discipline that seeks to uncover the secrets of the unseen world, using a combination of ancient wisdom and modern knowledge.
            </p>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                It encompasses a range of subjects, including astrology, divination, tarot, numerology, alchemy, and many others.
            </p>
        </div>

        <!-- Benefits Section -->
        <div class="mb-8">
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                The study of occult science can offer a unique perspective on the world and help us gain a deeper understanding of ourselves and our place in the universe.
            </p>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                It can also be a powerful tool for personal growth and transformation, helping us to unlock our hidden potential and discover our true purpose in life.
            </p>
        </div>

        <!-- Online Classes Section -->
        <div class="mb-8">
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Unlock the power of Occult Studies with the convenience of Online Live Interactive Classes at the All India Institute of Occult Science.
            </p>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                With our classes, you can gain knowledge in occult subjects, like Astrology, Vastu, Numerology, Palmistry, Tarot Card Reading, Reiki, and more – all from the comfort of your own home. Take control of your Occult Studies education and explore a world of occult knowledge in our interactive and engaging Online Live classes.
            </p>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                <a href="https://www.occultscience.in/" target="_blank" class="text-orange-600 hover:text-orange-800 underline font-medium">
                    For More Details visit https://www.occultscience.in/
                </a>
            </p>
        </div>

        <!-- Blog Website Section -->
        <div class="mb-8">
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                In this blog website, we will explore the many facets of occult science, from its rich history and traditions to its practical applications in modern life.
            </p>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                We will also examine the latest research and discoveries in this field, as well as share practical tips and advice for those looking to deepen their understanding of occult science.
            </p>
        </div>

        <!-- Expert Section -->
        <div class="mb-8">
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Become an expert in Occult Studies with All India Institute of Occult Science's online live interactive classes! With our interactive online platform, you can learn from the comfort of your own home and gain knowledge in Astrology, Vastu, Numerology, Palmistry, Tarot Card Reading, Reiki, and more. Learn at your own pace, increase your occult knowledge, and develop your skills with our interactive classes.
            </p>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="mt-12 text-center">
        <a href="{{ route('blog.index') }}" 
           class="inline-flex items-center px-8 py-3 bg-orange-600 text-yellow-100 font-semibold rounded-lg hover:bg-orange-700 transition-colors shadow-lg">
            Explore Our Blog
        </a>
        <a href="https://www.occultscience.in/courses/" target="_blank"
           class="inline-flex items-center px-8 py-3 bg-gray-600 text-white font-semibold rounded-lg hover:bg-gray-700 transition-colors ml-4">
            View Courses
        </a>
    </div>
</div>
@endsection
