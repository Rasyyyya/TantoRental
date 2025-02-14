<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Car;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::where('user_id', auth()->id())
            ->with('car')
            ->latest()
            ->paginate(5); // Menampilkan 5 booking per halaman

        return view('booking.index', compact('bookings'));
    }


    public function create(Car $car)
    {
        return view('booking.create', compact('car'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $car = Car::findOrFail($request->car_id);
        $startDate = Carbon::parse($request->start_date);
        $endDate = Carbon::parse($request->end_date);
        $days = $endDate->diffInDays($startDate) + 1;

        $booking = Booking::create([
            'user_id' => auth()->id(),
            'car_id' => $request->car_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'total_price' => $car->price_per_day * $days,
            'status' => 'pending'
        ]);

        return redirect()->route('booking.show', $booking->id)
            ->with('success', 'Booking berhasil dibuat! Silakan cek detail booking.');
    }

    public function show($id)
    {
        $booking = Booking::with('car', 'user')->findOrFail($id);
        return view('booking.show', compact('booking'));
    }
}
