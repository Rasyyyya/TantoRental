<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="">
  <script src="index.js" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script src="https://unpkg.com/scrollreveal"></script>   
  <link
  rel="stylesheet" href="tailwind.css"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
  href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.0/dist/tailwind.min.css" rel="stylesheet"
  src="https://kit.fontawesome.com/43805eeee9.js"
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
  />
  <title>TantoRent</title>
</head>
<body class="bg-gray-100 text-gray-900">
    @include('components.nav')
       <!-- Hero Section -->
       <div class="container mx-auto px-6 mt-32 md:mt-48 flex flex-col md:flex-row items-center justify-between">
        <div class="md:w-1/2 space-y-6 text-center md:text-left">
            <h1 class="text-4xl md:text-5xl font-bold">
                Cara Mudah & Cepat Untuk <b class="text-violet-500">Rental</b> Mobil di TantoRental.
            </h1>
            <p class="text-gray-600 text-lg">
                Kami menawarkan berbagai macam tipe mobil sewaan sesuai kebutuhan Anda. Baik Anda menyewa untuk bepergian, dinas, liburan atau bussines trip
            </p>
            <button onclick="window.location.href='contact.html'" 
                    class="px-8 py-4 bg-violet-500 text-white text-xl rounded-xl hover:bg-gray-900 transition-colors duration-200 shadow-lg">
                Get Started
            </button>
        </div>
        <div class="md:w-1/2 mt-8 md:mt-0">
            <img src="http://localhost:8000/image/hero_img.png" alt="hero" class="w-full h-auto"/>
        </div>
    </div>

 <!-- About Section -->
<section id="about" class="bg-violet-500 text-white py-16">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h1 class="text-3xl font-bold mb-4">Pilihan Anda untuk rental mobil yang mudah</h1>
            <p class="text-lg opacity-90">
                Merasakan kenyamanan terbaik bersama TantoRental, menyewa mobil dengan sekali click.
            </p>
        </div>

        <div class="flex justify-center gap-8 flex-wrap">
            @foreach($features as $feature)
                @include('components.feature-card', $feature)
            @endforeach
        </div>
    </div>
</section>
<!-- Collection Section -->
<section id="collection" class="mt-64 mb-32">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl font-bold text-center mb-16">Our Car Collections</h1>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($cars as $car)
                @include('components.car-card', $car)
            @endforeach
        </div>
        <button class="flex items-center justify-center gap-2 mx-auto mt-12 px-8 py-4 bg-gray-900 text-white text-xl rounded-xl hover:bg-violet-500 transition-colors duration-200">
            <p>See All Cars</p>
            <i class="fa-solid fa-arrow-right-long"></i>
        </button>
    </div>
</section>

    <!-- Review Section -->
<section id="review" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Hear what our clients say</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($reviews as $review)
                @include('components.review-card', $review)
            @endforeach
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 text-white pt-48 pb-8">
    <div class="container mx-auto px-6">
        <!-- Call to Action -->
        <div class="bg-violet-500 rounded-2xl p-12 text-center -mt-64 mb-24">
            <h2 class="text-4xl font-bold mb-6">Let's drive with TantoRental Today!</h2>
            <p class="text-xl mb-12 max-w-3xl mx-auto">
                Butuh bantuan atau siap memesan kendaraan Anda? Hubungi kami sekarang untuk layanan cepat dan pemesanan mudah!
            </p>
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <button onclick="window.location.href='collection.html'" 
                        class="flex items-center justify-center gap-2 px-8 py-4 bg-white text-gray-900 text-xl rounded-xl hover:bg-gray-100 transition-colors duration-200">
                    <p>Check Our Cars</p>
                    <i class="fa-solid fa-arrow-right-long"></i>
                </button>
                <button onclick="window.location.href='contact.html'" 
                        class="flex items-center justify-center gap-2 px-8 py-4 bg-gray-900 text-white text-xl rounded-xl hover:bg-gray-800 transition-colors duration-200">
                    <p>Book Now</p>
                    <i class="fa-solid fa-phone"></i>
                </button>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="flex flex-col md:flex-row justify-between items-center">
            <a href="/" class="text-3xl font-bold mb-8 md:mb-0">
                Tanto<b class="text-violet-500">Rental</b>
            </a>
            <div class="flex gap-4">
                <a href="/" class="w-12 h-12 border-2 border-white rounded-full flex items-center justify-center hover:bg-violet-500 transition-colors duration-200">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="/" class="w-12 h-12 border-2 border-white rounded-full flex items-center justify-center hover:bg-violet-500 transition-colors duration-200">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
</footer>
</body>