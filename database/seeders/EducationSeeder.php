<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('education')->insert([
            'title' => "Apprenant en Master 2 (DEA), Domaine : Intelligence Artificielle et Data",
            'time' => "2022 à ce jour",
            'location' => "Université de Kinshasa",
            'message' => " Formation basée sur l'acquisition des compétences et des outils techniques spécialisés pour construire des systèmes informatiques intelligents et pour traiter des données et des informations volumineuses et détaillées en vue de résoudre des problèmes complexes de la société.",
        ]);
        
        DB::table('education')->insert([
            'title' => "Licencié en Informatique (Sciences Math-Info)",
            'time' => "2020",
            'location' => "Université de Kinshasa",
            'message' => " Formation basée sur la conception, le développement et la maintenance des solutions informatiques.",
        ]);
        
        DB::table('education')->insert([
            'title' => "Diplômé d’Etat en Math-Physique",
            'time' => "2014",
            'location' => "Institut Mgr BOKELEALE",
            'message' => "Etudes humanitaires orientées en bases scientifiques, particulièrement en Mathématiques et Physique",
        ]);
    }
}
