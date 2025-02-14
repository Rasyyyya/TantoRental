<!-- filepath: /d:/Projects/TantoRental/resources/views/booking/create.blade.php -->
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-6">Book {{ $car->name }}</h2>
                    
                    <form action="{{ route('booking.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="car_id" value="{{ $car->id }}">
                        
                        <div class="grid grid-cols-1 gap-6 mt-4">
                            <div>
                                <label class="text-gray-700" for="start_date">Start Date</label>
                                <input type="date" class="form-input mt-1 block w-full rounded-md border-gray-300" 
                                       name="start_date" required min="{{ date('Y-m-d') }}">
                            </div>

                            <div>
                                <label class="text-gray-700" for="end_date">End Date</label>
                                <input type="date" class="form-input mt-1 block w-full rounded-md border-gray-300" 
                                       name="end_date" required min="{{ date('Y-m-d') }}">
                            </div>

                            <div class="mt-4">
                                <h3 class="text-lg font-semibold">Car Details:</h3>
                                <div class="mt-2">
                                    <p><span class="font-medium">Name:</span> {{ $car->name }}</p>
                                    <p><span class="font-medium">Price per day:</span> Rp{{ number_format($car->price_per_day, 0, ',', '.') }}</p>
                                </div>
                            </div>

                            <div class="flex items-center justify-end mt-6">
                                <button type="submit" 
                                        class="bg-violet-500 text-white py-2 px-4 rounded-lg hover:bg-violet-600 transition">
                                    Confirm Booking
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>