<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $cars = Car::take(6)->get();
        
        $features = [
            [
                'icon' => 'fa-solid fa-car',
                'title' => 'Berbagai Pilihan Mobil',
                'description' => 'Tersedia berbagai pilihan mobil yang siap untuk disewa'
            ],
            [
                'icon' => 'fa-solid fa-money-bill-wave',
                'title' => 'Harga Terjangkau',
                'description' => 'Harga sewa yang kompetitif dan terjangkau'
            ],
            [
                'icon' => 'fa-solid fa-headset',
                'title' => 'Pelayanan 24/7',
                'description' => 'Layanan pelanggan 24/7 siap membantu Anda'
            ],
        ];

        $reviews = [
            [
                'name' => 'John Doe',
                'rating' => 5,
                'comment' => 'Pelayanan sangat memuaskan dan mobil dalam kondisi prima',
                'image' => 'https://ui-avatars.com/api/?name=John+Doe'
            ],
            [
                'name' => 'Jane Smith',
                'rating' => 5,
                'comment' => 'Proses rental yang mudah dan cepat',
                'image' => 'https://ui-avatars.com/api/?name=Jane+Smith'
            ],
            [
                'name' => 'Mike Johnson',
                'rating' => 5,
                'comment' => 'Harga terjangkau dengan kualitas terbaik',
                'image' => 'https://ui-avatars.com/api/?name=Mike+Johnson'
            ],
        ];

        return view('landing', compact('cars', 'features', 'reviews'));
    }
}