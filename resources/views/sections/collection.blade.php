<section id="collection" class="mt-64 mb-32">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl font-bold text-center mb-16">Our Car Collections</h1>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @if ($cars->isEmpty())
                @for ($i = 0; $i < 3; $i++)
                    <div class="bg-gray-200 rounded-lg p-6 animate-pulse">
                        <div class="h-48 bg-gray-300 rounded-md mb-4"></div>
                        <div class="h-6 bg-gray-400 w-3/4 rounded-md mb-2"></div>
                        <div class="h-4 bg-gray-400 w-1/2 rounded-md"></div>
                    </div>
                @endfor
            @else
                @foreach ($cars as $car)
                    @include('components.car-card', $car)
                @endforeach
            @endif
        </div>
        <a href="{{ route('cars.index') }}"
            class="flex items-center justify-center gap-2 mx-auto mt-12 px-8 py-4 bg-gray-900 text-white text-xl rounded-xl hover:bg-violet-500 transition-colors duration-200">
            <span>See All Cars</span>
            <i class="fa-solid fa-arrow-right-long"></i>
        </a>
    </div>
</section>
