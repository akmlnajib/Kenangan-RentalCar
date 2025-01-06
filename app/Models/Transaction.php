<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Transaction extends Model
{
    use HasFactory, HasUuids;
    
    protected $fillable = [
        'id',
        'cars_id',
        'invoice',
        'nama_penyewa',
        'jaminan',
        'no_identitas',
        'no_tlpn',
        'alamat',
        'nopol',
        'rental_time',
        'rental_hours',
        'rental_car',
        'rental_driver',
        'date_checkin',
        'date_checkout',
        'total_date',
        'total_transaksi',
    ];

    /**
     * Get the car associated with the transaction.
     */
    public function car()
    {
        return $this->belongsTo(Car::class, 'cars_id');
    }
}
