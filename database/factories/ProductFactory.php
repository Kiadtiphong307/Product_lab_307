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
            'product_code' =>fake()->unique()->regexify('[A-Z]{3}[0-9]{10}'),
            'product_name' =>fake()->word(),
            'description' => fake()->text(),
            'price' => fake()->numberBetween(10, 1000000),
            'quantity' => fake()->numberBetween(1, 1000),
            'created_at' => fake()->dateTime(),
            'updated_at' => fake()->dateTime(),
        ];
    }
}
