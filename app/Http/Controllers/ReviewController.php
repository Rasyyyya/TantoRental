<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Booking;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request, Booking $booking)
    {
        try {
            // Validasi request
            $request->validate([
                'rating' => 'required|integer|min:1|max:5',
                'comment' => 'nullable|string|max:1000'
            ]);

            // Buat review
            Review::create([
                'user_id' => auth()->id(),
                'booking_id' => $booking->id,
                'rating' => $request->rating,
                'comment' => $request->comment
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Review berhasil ditambahkan'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500);
        }
    }

    public function update(Request $request, Review $review)
    {
        // Validasi request
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:1000'
        ]);

        // Cek apakah review milik user yang sedang login
        if ($review->user_id !== auth()->id()) {
            return back()->with('error', 'Unauthorized action.');
        }

        // Update review
        $review->update([
            'rating' => $request->rating,
            'comment' => $request->comment
        ]);

        return back()->with('success', 'Review has been updated!');
    }

    public function destroy(Review $review)
    {
        // Cek apakah review milik user yang sedang login
        if ($review->user_id !== auth()->id()) {
            return back()->with('error', 'Unauthorized action.');
        }

        $review->delete();

        return back()->with('success', 'Review has been deleted!');
    }
}
