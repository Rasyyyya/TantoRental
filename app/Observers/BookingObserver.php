<?php

namespace App\Observers;

use App\Models\Booking;
use App\Services\FonnteService;
use Illuminate\Support\Facades\Log;

class BookingObserver
{
    public function created(Booking $booking): void
    {
        // Pastikan relasi ter-load
        $booking->loadMissing(['car', 'user']);

        $user = $booking->user;
        $car = $booking->car;

        if (!$user) {
            Log::warning("User tidak ditemukan untuk Booking ID: {$booking->id}");
            return;
        }

        if (!$user->phone) {
            Log::warning("Nomor telepon tidak ditemukan untuk User ID: {$user->id} pada Booking ID: {$booking->id}");
            return;
        }

        // Kirim notifikasi WhatsApp
        $data = [
            'target' => $user->phone,
            'message' => "Halo {$user->name}, terimakasih sudah melakukan booking di Tantorental. Admin akan segera menghubungi anda.",
        ];

        try {
            FonnteService::sendMessage($data);
        } catch (\Exception $e) {
            Log::error("Gagal mengirim pesan ke {$user->phone}: " . $e->getMessage());
        }
    }

    public function updated(Booking $booking): void
    {
        // Check if status was changed
        if ($booking->isDirty('status')) {
            switch ($booking->status) {
                case 'confirmed':
                    $booking->car->update(['status' => 'rented']);
                    break;
                case 'done':
                case 'canceled':
                    $booking->car->update(['status' => 'available']);
                    break;
            }
        }
    }

    public function deleted(Booking $booking): void
    {
        $booking->car->update(['status' => 'available']);
    }

    public function restored(Booking $booking): void
    {
        //
    }

    public function forceDeleted(Booking $booking): void
    {
        //
    }
}
