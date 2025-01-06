<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;
use App\Models\CarRental;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Aldan',
            'email' => 'aldan@gmail.com',
            'role' => 'Administator',
        ]);
        
    Car::factory()->count(3)->create();
    
    CarRental::factory()->count(9)->create();

    $this->call(CustomSeeder::class);
    }
}
