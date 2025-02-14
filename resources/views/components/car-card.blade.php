<div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
    <img src="{{ $image }}" alt="{{ $name }}" class="w-full h-48 object-cover"/>
    <div class="p-6">
        <div class="flex justify-between items-center mb-2">
            <div class="flex items-center gap-1">
                <h5 class="text-2xl font-bold">Rp{{ number_format((float)$price, 0, ',', '.') }}</h5>
                <span class="text-gray-500">/Day</span>
            </div>
            <div class="flex items-center gap-2 text-gray-500">
                <i class="fa-solid fa-location-dot"></i>
                <span>{{ $location }}</span>
            </div>
        </div>
        <h2 class="text-xl font-semibold mb-4">{{ $name }}</h2>
        <button class="w-full bg-violet-500 text-white py-2 px-4 rounded-lg hover:bg-violet-600 transition flex items-center justify-center gap-2">
            <span>Book Now</span>
            <i class="fa-solid fa-phone"></i>
        </button>
    </div>
</div>