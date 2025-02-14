<section id="cta" class="bg-violet-500 py-20">
    <div class="container mx-auto px-6">
        <div class="flex flex-col items-center text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Ready to Rent Your Perfect Car?
            </h2>
            <p class="text-white/90 mb-8 max-w-2xl">
                Join thousands of satisfied customers who choose TantoRental for their car rental needs.
                Book your car today and experience hassle-free rental service.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('register') }}"
                    class="px-8 py-4 bg-white text-violet-500 text-xl rounded-xl hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                    Register Now
                </a>
                <a href="{{ route('cars.index') }}"
                    class="px-8 py-4 bg-gray-900 text-white text-xl rounded-xl hover:bg-gray-800 transition-colors duration-200 shadow-lg">
                    Browse Cars
                </a>
            </div>
        </div>
    </div>
</section>
