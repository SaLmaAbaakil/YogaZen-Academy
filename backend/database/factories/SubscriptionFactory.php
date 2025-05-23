<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscription>
 */
class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startedAt = $this->faker->dateTimeBetween('-1 year', 'now');
        $expiresAt = Carbon::parse($startedAt)->addMonths($this->faker->numberBetween(1, 12));

        return [
            'student_id' => Student::factory(),
            'type' => $this->faker->randomElement(['monthly', 'yearly', 'premium']),
            'started_at' => $startedAt,
            'expires_at' => $expiresAt,
        ];

    }
     // État pour les abonnements expirés (pour les tests de rappel)
    public function expiredSoon(): static
    {
        return $this->state(fn (array $attributes) => [
            'started_at' => Carbon::now()->subMonths(6),
            'expires_at' => Carbon::now()->addDays($this->faker->numberBetween(1, 3)), // Expire dans 1 à 3 jours
        ]);
    }
}
