<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Images_Portfolio;
use App\Models\Profil;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UserSeeder::class,
            CompetenceSeeder::class,
            OutilSeeder::class,
            TemoigangeSeeder::class,
            ProfilSeeder::class,
            EducationSeeder::class,
            ExperienceSeeder::class,
            PortfolioSeeder::class,
            PortfolioDetailsSeeder::class,
            ImagesPortfolioSeeder::class,
            ServiceSeeder::class,
        ]);
    }
}
