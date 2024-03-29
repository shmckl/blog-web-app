<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comment_content' => $this->faker->paragraph,
            'user_id' => random_int(1,10),
            'post_id' => random_int(1,10),

            //dont hard code numbers, instead:
            // 'author_id' => fake()->numberBetween(1, \App\Models\User::count())

            //dont hard code numbers, instead:
            // 'post_id' => fake()->numberBetween(1, \App\Models\Post::count())
        ];
    }
}
