<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::factory()->count(40)->create();
        // Crée quelques étudiants avec un abonnement expiré
        Student::factory()->count(10)->expiredSubscription()->create();
        // Crée quelques étudiants inactifs pour l'archivage
        Student::factory()->count(10)->inactiveForArchiving()->create();
    }
}
