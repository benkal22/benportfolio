<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('portfolios')->insert([
            'name' => 'Portfolio web 1',
            'category' => "Site_Internet",
            'image' => 'portfolio-si1',
        ]);

        DB::table('portfolios')->insert([
            'name' => 'Branding 1',
            'category' => "Graphisme",
            'image' => 'portfolio-gr1',
        ]);

        DB::table('portfolios')->insert([
            'name' => 'Présentation professionnelle 1',
            'category' => "Bureautique",
            'image' => 'portfolio-bu1',
        ]);

        
        DB::table('portfolios')->insert([
            'name' => 'Maquette web 1',
            'category' => "UX_UI_Design",
            'image' => 'portfolio-ux2',
        ]);


        DB::table('portfolios')->insert([
            'name' => "Analyse de données",
            'category' => "Data_Science",
            'image' => 'portfolio-ds1',
        ]);

    }
}
