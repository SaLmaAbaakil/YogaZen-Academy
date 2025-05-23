<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
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
            'email' => $this->faker->unique()->safeEmail(),
            'subscription_expires_at' => $this->faker->optional(0.7)->dateTimeBetween('now', '+1 year'),
            'status' => $this->faker->randomElement(['active', 'inactive', 'archived']),
            'last_login_at' => $this->faker->optional(0.8)->dateTimeBetween('-18 months', 'now'),
        ];
    }

    // Un état pour les étudiants avec abonnement expiré
    public function expiredSubscription(): static
    {
        return $this->state(fn (array $attributes) => [
            'subscription_expires_at' => Carbon::now()->subDays($this->faker->numberBetween(1, 30)),
            'status' => 'inactive',
        ]);
    }

    // Un état pour les étudiants inactifs depuis longtemps
    public function inactiveForArchiving(): static
    {
        return $this->state(fn (array $attributes) => [
            'last_login_at' => Carbon::now()->subMonths($this->faker->numberBetween(13, 24)), 
            'status' => 'inactive',
        ]);
    }
}
