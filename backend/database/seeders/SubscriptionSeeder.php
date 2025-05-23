<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subscription::factory()->count(30)->create();

        // Crée 5 abonnements qui expirent bientôt pour tester le job cron
        Subscription::factory()->count(5)->expiredSoon()->create();

        // Ou pour associer à des étudiants existants (si StudentSeeder a déjà été exécuté) :
        // Student::all()->each(function ($student) {
        //     Subscription::factory()->for($student)->create();
        // });
    }
}
