<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;


class Custom extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'logo',  
        'image_background', 
        'image_promo_first', 
        'image_promo_second', 
        'text_promo',  
        'image_profile_first', 
        'image_profile_second',     
        'location',
        'link_ig', 
        'no_tlpn_first',
        'no_tlpn_second', 
    ];
}
