<footer class="bg-gray-900 text-white pt-12 pb-8">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div class="space-y-4">
                <h3 class="font-bold text-xl">
                    Tanto<span class="text-violet-500">Rental</span>
                </h3>
                <p class="text-gray-400 text-sm">
                    Providing reliable car rental services since 2024. Your trusted partner for all your transportation
                    needs.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-violet-500 transition-colors">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-violet-500 transition-colors">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-violet-500 transition-colors">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="font-semibold text-lg mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('home') }}"
                            class="text-gray-400 hover:text-violet-500 transition-colors">Home</a>
                    </li>
                    <li>
                        <a href="#about" class="text-gray-400 hover:text-violet-500 transition-colors">About Us</a>
                    </li>
                    <li>
                        <a href="#cars" class="text-gray-400 hover:text-violet-500 transition-colors">Our Cars</a>
                    </li>
                    <li>
                        <a href="#contact" class="text-gray-400 hover:text-violet-500 transition-colors">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="font-semibold text-lg mb-4">Contact Info</h4>
                <ul class="space-y-2">
                    <li class="flex items-center space-x-2 text-gray-400">
                        <i class="fas fa-map-marker-alt text-violet-500"></i>
                        <span>123 Main Street, City, Country</span>
                    </li>
                    <li class="flex items-center space-x-2 text-gray-400">
                        <i class="fas fa-phone text-violet-500"></i>
                        <span>+1 234 567 890</span>
                    </li>
                    <li class="flex items-center space-x-2 text-gray-400">
                        <i class="fas fa-envelope text-violet-500"></i>
                        <span>info@tantorental.com</span>
                    </li>
                </ul>
            </div>

            <!-- Business Hours -->
            <div>
                <h4 class="font-semibold text-lg mb-4">Business Hours</h4>
                <ul class="space-y-2">
                    <li class="text-gray-400">Monday - Friday: 9am - 6pm</li>
                    <li class="text-gray-400">Saturday: 9am - 4pm</li>
                    <li class="text-gray-400">Sunday: Closed</li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-800 mt-8 pt-8">
            <div class="text-center text-gray-400 text-sm">
                © {{ date('Y') }} TantoRental. All rights reserved.
            </div>
        </div>
    </div>
</footer>
