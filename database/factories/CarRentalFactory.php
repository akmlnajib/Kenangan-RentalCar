<?php

namespace Database\Factories;
use App\Models\Car;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarRental>
 */
class CarRentalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'car_id' => Car::inRandomOrder()->first()?->id,
            'rental_time' => $this->faker->randomElement(['6 Jam', '12 Jam', '1 hari']),
            'rental_car_price'   => $this->faker->randomFloat( 250000, 600000),
            'rental_driver_price'   => $this->faker->randomElement([100000, 150000]),
        ];
    }
}
