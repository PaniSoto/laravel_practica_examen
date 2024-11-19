<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dieta>
 */
class DietaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'description' => fake()->text(10),
            'totalCalories' => fake()->randomNumber(3),
            'date' => fake()->date(),
            'user_id' => fake()->numberBetween(1, 4)
        ];
    }
}
