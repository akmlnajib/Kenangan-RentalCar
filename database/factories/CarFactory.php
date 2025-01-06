<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['SUV', 'Sedan', 'Hatchback']),
            'car_type' => $this->faker->randomElement(['Avanza', 'Inova', 'BMW']),
            'transmission_type' => $this->faker->randomElement(['Manual', 'Automatic']),
            'image' => 'https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=USC80HOC011A021001.jpg&width=440&height=262',
            'seat_count' => $this->faker->numberBetween(2, 8),
        ];
    }
}
