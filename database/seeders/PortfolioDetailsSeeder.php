<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('portfolio_details')->insert([
            'portfolio_id' => 1,
            'client' => 'Ben',
            'project_date' => "2023.03.20",
            'project_url' => 'benkalsoft.com',
        ]);

        DB::table('portfolio_details')->insert([
            'portfolio_id' => 2,
            'client' => 'GRADE',
            'project_date' => "2023.03.20",
            'project_url' => '',
        ]);

        DB::table('portfolio_details')->insert([
            'portfolio_id' => 3,
            'client' => "Ministère du Budget / RDC",
            'project_date' => "2023.03.20",
            'project_url' => '',
        ]);

        DB::table('portfolio_details')->insert([
            'portfolio_id' => 4,
            'client' => '243 Technolgies',
            'project_date' => "2022.05.12",
            'project_url' => '',
        ]);

        DB::table('portfolio_details')->insert([
            'portfolio_id' => 1,
            'client' => 'Université de Kinshasa',
            'project_date' => "2022.12.25",
            'project_url' => '',
        ]);
    }
}
