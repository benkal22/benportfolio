<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'name' => "Science des Données",
            'icon' => 'service_ds',
            'href' => 'service_ds',
            'resume' => "Resumé Service Data Science",
            'image_hero' => "service_hero_ds",
            'detail' => "Détails du service Data Science",
        ]);

        DB::table('services')->insert([
            'name' => "Ingénierie logicielle",
            'icon' => 'service_il',
            'href' => 'service_il',
            'resume' => "Resumé Service Ingénierie logicielle",
            'image_hero' => "service_hero_il",
            'detail' => "Détails du service Ingénierie logicielle",
        ]);

        DB::table('services')->insert([
            'name' => "Programmation web et mobile",
            'icon' => 'service_wm',
            'href' => 'service_wm',
            'resume' => "Resumé Programmation web et mobile",
            'image_hero' => "service_hero_wm",
            'detail' => "Détails du service Programmation web et mobile",
        ]);

        DB::table('services')->insert([
            'name' => "Graphisme",
            'icon' => 'service_gr',
            'href' => 'service_gr',
            'resume' => "Resumé Graphisme",
            'image_hero' => "service_hero_gr",
            'detail' => "Détails du service Graphisme",
        ]);

        DB::table('services')->insert([
            'name' => "Formations",
            'icon' => 'service_fo',
            'href' => 'service_fo',
            'resume' => "Resumé Formations",
            'image_hero' => "service_hero_fo",
            'detail' => "Détails du service Formations",
        ]);
    }
}
