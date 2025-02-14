<x-app-layout>
    <div class="min-h-screen bg-gray-50">
        <div class="container mx-auto px-4 py-8 sm:px-6 lg:px-8">
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <!-- Image Section -->
                <div class="relative h-72 sm:h-96">
                    <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->name }}"
                        class="w-full h-full object-cover">
                </div>

                <!-- Content Section -->
                <div class="p-6 sm:p-8">
                    <!-- Header & Navigation -->
                    <div class="flex justify-between items-start border-b border-gray-200 pb-6">
                        <div>
                            <h1 class="text-2xl sm:text-3xl font-semibold text-gray-900">{{ $car->name }}</h1>
                            <p class="mt-2 text-xl sm:text-2xl font-medium text-violet-600">
                                Rp{{ number_format($car->price_per_day, 0, ',', '.') }} <span
                                    class="text-base font-normal text-gray-600">/ hari</span>
                            </p>
                        </div>
                        <a href="{{ route('cars.index') }}"
                            class="flex items-center gap-2 text-gray-600 hover:text-violet-600 transition-colors duration-200">
                            <i class="fas fa-arrow-left text-sm"></i>
                            <span class="text-sm font-medium">Kembali</span>
                        </a>
                    </div>

                    <!-- Car Details -->
                    <div class="mt-6">
                        <h2 class="text-lg font-semibold text-gray-900 mb-3">Deskripsi Kendaraan</h2>
                        <p class="text-gray-600 leading-relaxed">{{ $car->description }}</p>
                    </div>

                    <!-- Specifications -->
                    <div class="mt-8 grid grid-cols-2 sm:grid-cols-3 gap-4">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-calendar-alt text-violet-500"></i>
                            <span class="text-sm text-gray-600">Tahun: {{ $car->year ?? 'N/A' }}</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-cog text-violet-500"></i>
                            <span class="text-sm text-gray-600">Transmisi: {{ $car->transmission ?? 'Manual' }}</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-gas-pump text-violet-500"></i>
                            <span class="text-sm text-gray-600">Bahan Bakar: {{ $car->fuel_type ?? 'Bensin' }}</span>
                        </div>
                    </div>

                    <!-- Booking Section -->
                    <div class="mt-8">
                        @auth
                            <a href="{{ route('booking.create', $car->id) }}"
                                class="block w-full text-center bg-violet-500 text-white font-medium px-6 py-3 rounded-lg hover:bg-violet-700 transition-colors duration-200"
                                x-data="" @click="window.scrollTo({top: 0, behavior: 'smooth'})">
                                <i class="fas fa-calendar-check mr-2"></i>
                                Booking Sekarang
                            </a>
                        @else
                            <div class="space-y-3">
                                <a href="{{ route('login') }}"
                                    class="block w-full text-center bg-gray-600 text-white font-medium px-6 py-3 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                                    <i class="fas fa-sign-in-alt mr-2"></i>
                                    Login untuk Booking
                                </a>
                                <p class="text-center text-sm text-gray-500">
                                    Silahkan login terlebih dahulu untuk melakukan pemesanan
                                </p>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
