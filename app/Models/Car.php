<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;


class Car extends Model
{
    use HasFactory, HasUuids;

    // Tentukan atribut yang bisa diisi
    protected $fillable = [
        'type',
        'car_type',
        'transmission_type',
        'seat_count',
        'image',
    ];

    public function carRental()
    {
        return $this->hasMany(CarRental::class, 'car_id', 'id');
    }
    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'cars_id');
    }
}
