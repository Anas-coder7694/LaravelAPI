<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'title' => fake()->sentence(),
            'content' => fake()->paragraph(),

           
            'author_id' => Author::inRandomOrder()->value('id') ?? Author::factory(),
        ];
    }
}
