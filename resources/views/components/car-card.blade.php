<div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
    <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->name }}"
        class="w-full aspect-square object-cover rounded-lg">
    <div class="p-6">
        <div class="flex justify-between items-center mb-2">
            <div class="flex items-center gap-1">
                <h5 class="text-2xl font-bold">Rp{{ number_format((float) $price_per_day, 0, ',', '.') }}</h5>
                <span class="text-gray-500">/Day</span>
            </div>
        </div>
        <h2 class="text-xl font-semibold mb-4">{{ $name }}</h2>
        <a href="{{ auth()->check() ? route('booking.create', ['car' => $id]) : route('login') }}"
            class="w-full bg-violet-500 text-white py-2 px-4 rounded-lg hover:bg-violet-600 transition flex items-center justify-center gap-2">
            <span>Book Now</span>
            <i class="fa-solid fa-calendar"></i>
        </a>
    </div>
</div>
