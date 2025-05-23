<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CourseSeeder;
use Database\Seeders\TeacherSeeder;
use Database\Seeders\SubscriptionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call([
            TeacherSeeder::class,
            CourseSeeder::class,
            StudentSeeder::class,
            SubscriptionSeeder::class,
        ]);
    }
}
