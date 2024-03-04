<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->sentence(3),
            'price' => fake()->randomFloat(2),
            'imageUrl' => fake()->imageUrl(640, 480, 'food', true),
            'amount' => fake()->randomDigit(),
            'availability' => fake()->boolean()
        ];
    }
}
