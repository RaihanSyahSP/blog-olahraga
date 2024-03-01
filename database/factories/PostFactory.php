<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->realText(50);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'thumbnail' => fake()->imageUrl(),
            'body' => fake()->realText(4000),
            'active' => fake()->boolean(),
            'published_at' => fake()->dateTime(),
            'youtube_link' => 'https://www.youtube.com/watch?v=' . Str::random(11),
            'user_id' => 1,
        ];
    }
}
