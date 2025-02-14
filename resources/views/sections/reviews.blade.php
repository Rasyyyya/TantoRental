<section id="reviews" class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-4">What Our Customers Say</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Discover why customers choose TantoRental for their car rental needs
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($reviews as $review)
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="flex items-center mb-4">
                        <img src="{{ $review['image'] }}" alt="{{ $review['name'] }}"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold">{{ $review['name'] }}</h4>
                            <div class="flex text-yellow-400">
                                @for ($i = 0; $i < $review['rating']; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">{{ $review['comment'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
