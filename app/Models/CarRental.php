<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class CarRental extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'car_id',
        'rental_time',
        'rental_car_price',
        'rental_driver_price',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
