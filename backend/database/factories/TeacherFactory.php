<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'bio' => $this->faker->paragraph(2),
            'specialties' => $this->faker->randomElement(['Hatha Yoga', 'Vinyasa Flow', 'Ashtanga', 'Restorative Yoga', 'Meditation']),
        ];
    }
}
