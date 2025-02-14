<?php

namespace App\Observers;

use App\Models\Booking;

class BookingObserver
{
    public function created(Booking $booking): void
    {
        // When booking is created initially, car status remains unchanged
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
