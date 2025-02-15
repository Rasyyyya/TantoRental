<!-- resources/views/contact.blade.php -->
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Contact Section -->
                <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Contact Information -->
                    <div class="space-y-6">
                        <h1 class="text-3xl font-semibold text-gray-800">Contact Us</h1>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-4">
                                <i class="fas fa-location-dot mt-1 text-violet-600"></i>
                                <div>
                                    <h3 class="font-medium text-gray-800">Address</h3>
                                    <p class="text-gray-600">Akpol Blok L, No. 2<br>Semarang, Indonesia</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <i class="fas fa-phone mt-1 text-violet-600"></i>
                                <div>
                                    <h3 class="font-medium text-gray-800">Phone</h3>
                                    <p class="text-gray-600">+62 123 456 7890</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <i class="fas fa-envelope mt-1 text-violet-600"></i>
                                <div>
                                    <h3 class="font-medium text-gray-800">Email</h3>
                                    <p class="text-gray-600">info@tantorent.com</p>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Form -->
                        <form class="space-y-4 mt-8">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                <input type="text" id="name" name="name" class="mt-1 block w-full rounded-md border border-violet-300 shadow-sm focus:border-violet-500 focus:ring-violet-500">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" id="email" name="email" class="mt-1 block w-full rounded-md border border-violet-300 shadow-sm focus:border-violet-500 focus:ring-violet-500">
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                                <textarea id="message" name="message" rows="4" class="mt-1 block w-full rounded-md border border-violet-300 shadow-sm focus:border-violet-500 focus:ring-violet-500"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-violet-500 text-white px-4 py-2 rounded-md hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-violet-500 focus:ring-offset-2">
                                Send Message
                            </button>
                        </form>
                    </div>

                    <!-- Map Section -->
                    <div class="h-full min-h-[400px]">
                        <div id="map" class="w-full h-full rounded-lg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Initialization Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize map
            const map = L.map('map').setView([-6.2088, 106.8456], 13); // Jakarta coordinates

            // Add OpenStreetMap tiles
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            // Add marker for office location
            const marker = L.marker([-6.2088, 106.8456]).addTo(map);
            marker.bindPopup("<b>TantoRent Office</b><br>123 TantoRent Street").openPopup();
        });
    </script>
</x-app-layout>