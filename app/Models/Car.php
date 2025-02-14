<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'brand', 'type', 'license_product', 'penalty', 'price_per_day', 'image', 'status', 'description'];

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
