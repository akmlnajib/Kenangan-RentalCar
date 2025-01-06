<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Custom;

class CustomSeeder extends Seeder
{
    public function run()
    {
        Custom::create([
            'logo' => 'images/customs/MnvN5e1cW5pohDbOk3PPomSAQhl3vzGEwvuEa1N4.png',
            'image_background' => 'images/customs/epLlg59tU2JAuQLtPu65OAJLogzu1LE0cOmmXfpW.png',
            'image_promo_first' => 'images/customs/tQH6D6RvnkC7qgBnNCMZ6Yd1cH51HfClS9JwHAWh.png',
            'image_promo_second' => 'images/customs/jaiEHUdKTnBJbB0ZmkEG81jiRpHX9HljAv3SGRec.png',
            'text_promo' => '12.000+ Promo text example',
            'image_profile_first' => 'images/customs/about-5.webp',
            'image_profile_second' => 'images/customs/about-2.webp',
            'link_ig' => 'https://www.instagram.com',
            'no_tlpn_first' => '089637445787',
            'no_tlpn_second' => '089637445787',
            'location' => 'Perumahan Mayang Pratama No.14 blok H3, Mustikasari, Mustika Jaya, Bekasi, Jawa Barat.',
        ]);
    }
}
