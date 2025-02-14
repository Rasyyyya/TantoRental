<!-- filepath: /d:/Projects/TantoRental/resources/views/landing.blade.php -->
<x-app-layout>
    <!-- Hero Section -->
    <section id="hero" class="container mx-auto px-6 mt-32 md:mt-48">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="md:w-1/2 space-y-6 text-center md:text-left">
                <h1 class="text-4xl md:text-5xl font-bold">
                    Cara Mudah & Cepat Untuk <b class="text-violet-500">Rental</b> Mobil di TantoRental.
                </h1>
                <p class="text-gray-600 text-lg">
                    Kami menawarkan berbagai macam tipe mobil sewaan sesuai kebutuhan Anda. Baik Anda menyewa untuk
                    bepergian, dinas, liburan atau bussines trip
                </p>
                <a href="{{ auth()->check() ? route('cars.index') : route('login') }}"
                    class="inline-block px-8 py-4 bg-violet-500 text-white text-xl rounded-xl hover:bg-gray-900 transition-colors duration-200 shadow-lg">
                    Book Now
                </a>

            </div>
            <div class="md:w-1/2 mt-8 md:mt-0">
                <img src="{{ asset('image/hero_img.png') }}" alt="hero" class="w-full h-auto" />
            </div>
        </div>
    </section>

    <!-- About Section -->
    @include('sections.about', ['features' => $features])

    <!-- Collection Section -->
    @include('sections.collection', ['cars' => $cars])

    <!-- Review Section -->
    @include('sections.reviews', ['reviews' => $reviews])

    <!-- CTA Section -->
    @include('sections.cta')
</x-app-layout>
