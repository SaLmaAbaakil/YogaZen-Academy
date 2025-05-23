<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(5),
            'description' => $this->faker->paragraph(4),
            'level' => $this->faker->randomElement(['Beginner', 'Intermediate', 'Advanced']),
            'duration' => $this->faker->numberBetween(30, 120), 
            'price' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
