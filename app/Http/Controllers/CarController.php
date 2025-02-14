<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $features = [
        [
            'title' => 'Efficiency',
            'description' => 'TantoRental menonjol karena proses penyewaannya yang efisien, memastikan pelanggan dapat memesan kendaraan yang mereka inginkan dengan cepat dan mudah',
            'image' => asset('http://localhost:8000/image/about-info-item-1.png')
        ],
        [
            'title' => 'Diserve Fleet',
            'description' => 'TantoRental terkenal karena proses penyewaannya yang efisien, memastikan pelanggan dapat dengan cepat dan mudah memesan/rental kendaraan yang mereka inginkan',
            'image' => asset('http://localhost:8000/image/about-info-item-2.png')
        ],
        [
            'title' => 'Exceptional Service',
            'description' => 'Lebih dari sekedar menyediakan kendaraan, TantoRental berkomitmen untuk memberikan layanan pelanggan yang luar biasa di titik tempat layanan',
            'image' => 'http://localhost:8000/image/about-info-item-3.png'
        ]
    ];
        $cars = [
            [
                'name' => 'Innova Reborn',
                'price' => '550000',
                'location' => 'AKPOL',
                'image' => asset('http://localhost:8000/image/innova-reborn.png')
            ],
            [
                'name' => 'Xpander Ultimate',
                'price' => '500000',
                'location' => 'AKPOL',
                'image' => asset('http://localhost:8000/image/xpander.png')
            ],
            [
                'name' => 'Fortuner VRZ',
                'price' => '600000',
                'location' => 'AKPOL',
                'image' => asset('http://localhost:8000/image/New-fortuner.png')
            ],
            [
                'name' => 'Alphard Hybrid',
                'price' => '700000',
                'location' => 'AKPOL',
                'image' => asset('http://localhost:8000/image/alphard-hybrid.png')
            ],
            [
                'name' => 'Xenia R',
                'price' => '400000',
                'location' => 'AKPOL',
                'image' => asset('http://localhost:8000/image/new-xenia.png')
            ],
            [
                'name' => 'Ertiga Hybrid Sport',
                'price' => '450000',
                'location' => 'AKPOL',
                'image' => asset('http://localhost:8000/image/ertiga-hybrid.png')
            ],
            [
                'name' => 'Honda HR-V',
                'price' => '400000',
                'location' => 'AKPOL',
                'image' => asset('http://localhost:8000/image/hrvvv.png')
            ],
            [
                'name' => 'Honda Jazz-GK5',
                'price' => '300000',
                'location' => 'AKPOL',
                'image' => asset('http://localhost:8000/image/hondajazz.png')
            ],
            [
                'name' => 'Calya',
                'price' => '300000',
                'location' => 'AKPOL',
                'image' => asset('http://localhost:8000/image/new-calya.png')
            ]
        ];

        $reviews = [
            [
                'content' => 'Menyewa mobil disini sangatlah efisien dan mudah, saya juga puas. Mulai dari pemesanan online hingga pengambilan mobil, semuanya lancar dan efisien.',
                'name' => 'Hendro',
                'image' => asset('http://localhost:8000/image/profilecow.png')
            ],
            [
                'content' => 'Saya sangat puas menyewa mobil di sini. Armada bersih dan terawat, harga terjangkau, serta pengambilan dan pengembalian mobil sangat fleksibel. Pasti akan sewa lagi!',
                'name' => 'Suroso',
                'image' => asset('http://localhost:8000/image/profilecow.png')
            ],
            [
                'content' => 'Sewa mobil di sini sangat memuaskan! Banyak pilihan kendaraan, semua dalam kondisi prima, dan harganya kompetitif. Sangat direkomendasikan bagi yang mencari rental mobil terpercaya!',
                'name' => 'Budi',
                'image' => asset('http://localhost:8000/image/profilecow.png')
            ]
        ];
        return view('components.index', compact('features', 'cars', 'reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
