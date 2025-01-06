<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Custom;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Custom>
 */
class CustomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => '1',
            'logo' => null,
            'icon_slogan' => 'example-icon',
            'text_slogan_first' => 'Slogan 1',
            'text_slogan_second' => 'Slogan 2',
            'text_slogan_third' => 'Slogan 3',
            'text_slogan_four' => 'Slogan 4',
            'text_slogan_five' => 'Slogan 5',
            'image_background' => null,
            'image_promo_first' => null,
            'image_promo_second' => null,
            'text_promo' => 'Promo text example',
            'icon_head_first' => 'example-icon-1',
            'text_icon_first' => 'Example Text Icon 1',
            'icon_head_second' => 'example-icon-2',
            'text_icon_second' => 'Example Text Icon 2',
            'icon_head_third' => 'example-icon-3',
            'text_icon_third' => 'Example Text Icon 3',
            'icon_head_four' => 'example-icon-4',
            'text_icon_four' => 'Example Text Icon 4',
        ];
    }
}
