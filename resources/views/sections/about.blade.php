<!-- filepath: /d:/Projects/TantoRental/resources/views/sections/about.blade.php -->
<section id="about" class="bg-violet-500 text-white py-16">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h1 class="text-3xl font-bold mb-4">Pilihan Anda untuk rental mobil yang mudah</h1>
            <p class="text-lg opacity-90">
                Merasakan kenyamanan terbaik bersama TantoRental, menyewa mobil dengan sekali click.
            </p>
        </div>

        <div class="flex justify-center gap-8 flex-wrap">
            @foreach ($features as $feature)
                @include('components.feature-card', $feature)
            @endforeach
        </div>
    </div>
</section>
