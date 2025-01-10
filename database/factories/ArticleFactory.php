<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(10),
            'slug' => fake()->slug(),
            'content' => fake()->text(),
            'status' => fake()->word(),
            'published_at' => fake()->date(),
            'deleted_at' => fake()->dateTime(),
            'category_id' => \App\Models\Category::factory(),
        ];
    }
}
