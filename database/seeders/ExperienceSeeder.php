<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('experiences')->insert([
            'title' => "IT Manager au Bureau d’Études GRADE",
            'time' => "2022 à ce jour",
            'location' => "Kinshasa/Ngaliema",
            'mission' => "Gestion les ressources informatiques ; Maintenance de la connexion réseau et du bon fonctionnement du matériel informatique ; Veille des objectifs fixés par la direction informatique ; Stratégie de développement informatique de l’entreprise ; Organisation des outils informatiques utilisés par le bureau d’études ainsi que suivi de tout le système ; Développement des applications de service.
            ",
        ]);
        DB::table('experiences')->insert([
            'title' => "Ingénieur Informaticien à l’ONG MFA",
            'time' => "2021",
            'location' => "Kinshasa/Gombe",
            'mission' => "",
        ]);
    }
}
