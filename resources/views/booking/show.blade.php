<x-app-layout>
    <div class="container mx-auto p-6">
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-2xl font-semibold text-gray-800">Detail Booking</h2>

            <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <p class="text-gray-600">Tanggal Sewa:</p>
                    <p class="text-lg font-semibold">
                        {{ date('d M Y', strtotime($booking->start_date)) }} - 
                        {{ date('d M Y', strtotime($booking->end_date)) }}
                    </p>
                </div>

                <div>
                    <p class="text-gray-600">Produk yang Disewa:</p>
                    <p class="font-semibold">
                        {{ $booking->car->name }} - Rp{{ number_format($booking->car->price_per_day, 0, ',', '.') }}
                    </p>
                </div>

                <div>
                    <p class="text-gray-600">Total Harga:</p>
                    <p class="text-lg font-semibold text-green-600">
                        Rp{{ number_format($booking->total_price, 0, ',', '.') }}
                    </p>
                </div>

                <div>
                    <p class="text-gray-600">Status Booking:</p>
                    <span class="px-3 py-1 rounded-lg text-white text-sm font-semibold
                        {{ $booking->status === 'Confirmed' ? 'bg-green-500' :
                        ($booking->status === 'Pending' ? 'bg-yellow-500' : 'bg-red-500') }}">
                        {{ ucfirst($booking->status) }}
                    </span>
                </div>
            </div>

            <div class="mt-6 flex space-x-4">
                <a href="{{ route('booking.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-md">Kembali</a>
                
                @if ($booking->status === 'Pending')
                    <form action="{{ route('booking.cancel', $booking->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">Batalkan</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
