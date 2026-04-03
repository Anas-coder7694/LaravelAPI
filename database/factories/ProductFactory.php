<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
        'description' => fake()->sentence(),
        'stock' => fake()->numberBetween(10, 500),
        'price' => fake()->randomFloat(2, 5, 500),

                                //Category::Factory;
        'category_id' => Category::inRandomOrder()->value('id'),
    ];
    }
}
