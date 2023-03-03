<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompetenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('competences')->insert([
            'name' => 'Langages de programmation',
        ]);
        
        DB::table('competences')->insert([
            'name' => 'Data Science & AI',
        ]);
        
        DB::table('competences')->insert([
            'name' => 'Traitement des données',
        ]);
        DB::table('competences')->insert([
            'name' => 'Web',
        ]);
        DB::table('competences')->insert([
            'name' => 'Mobile',
        ]);
        DB::table('competences')->insert([
            'name' => 'DevOps',
        ]);
        DB::table('competences')->insert([
            'name' => 'Cloud',
        ]);
        DB::table('competences')->insert([
            'name' => 'Web',
        ]);
        DB::table('competences')->insert([
            'name' => 'UX/UI Design',
        ]);
        DB::table('competences')->insert([
            'name' => 'Graphisme',
        ]);
        DB::table('competences')->insert([
            'name' => 'Bureautique',
        ]);
    }
}
