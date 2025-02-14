<x-app-layout>
    <div class="container mx-auto p-6">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">Daftar Mobil</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($cars as $car)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->name }}"
                        class="w-full aspect-square object-cover rounded-lg">

                    <div class="p-4">
                        <h3 class="text-xl font-semibold">{{ $car->name }}</h3>
                        <p class="text-gray-600">Rp{{ number_format($car->price_per_day, 0, ',', '.') }} / hari</p>

                        <a href="{{ route('cars.show', $car->id) }}"
                            class="mt-4 block bg-violet-500 text-white text-center py-2 rounded-md hover:bg-gray-900 transition">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Custom Pagination -->
        <div class="mt-6 flex justify-center">
            @if ($cars->hasPages())
                <nav class="flex space-x-2">
                    @if ($cars->onFirstPage())
                        <span class="px-4 py-2 bg-gray-300 text-gray-600 rounded-md">Previous</span>
                    @else
                        <a href="{{ $cars->previousPageUrl() }}"
                            class="px-4 py-2 bg-gray-500 text-white rounded-md">Previous</a>
                    @endif

                    @foreach ($cars->links()->elements[0] as $page => $url)
                        <a href="{{ $url }}"
                            class="px-4 py-2 {{ $cars->currentPage() == $page ? 'bg-violet-500 text-white' : 'bg-gray-200 text-gray-800' }} rounded-md">
                            {{ $page }}
                        </a>
                    @endforeach

                    @if ($cars->hasMorePages())
                        <a href="{{ $cars->nextPageUrl() }}"
                            class="px-4 py-2 bg-gray-500 text-white rounded-md">Next</a>
                    @else
                        <span class="px-4 py-2 bg-gray-300 text-gray-600 rounded-md">Next</span>
                    @endif
                </nav>
            @endif
        </div>
    </div>
</x-app-layout>
