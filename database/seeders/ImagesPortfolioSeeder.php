<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesPortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images_portfolios')->insert([
            'image' => 'portfolio-si1',
            'portfolio_details_id' => 1,
        ]);

        DB::table('images_portfolios')->insert([
            'image' => 'portfolio-gr1',
            'portfolio_details_id' => 2,
        ]);

        DB::table('images_portfolios')->insert([
            'image' => 'portfolio-bu1',
            'portfolio_details_id' => 3,
        ]);

        DB::table('images_portfolios')->insert([
            'image' => 'portfolio-bu2',
            'portfolio_details_id' => 3,
        ]);

        DB::table('images_portfolios')->insert([
            'image' => 'portfolio-ux1',
            'portfolio_details_id' => 4,
        ]);

        DB::table('images_portfolios')->insert([
            'image' => 'portfolio-ux2',
            'portfolio_details_id' => 4,
        ]);

        DB::table('images_portfolios')->insert([
            'image' => 'portfolio-ds1',
            'portfolio_details_id' => 5,
        ]);

        DB::table('images_portfolios')->insert([
            'image' => 'portfolio-ds2',
            'portfolio_details_id' => 5,
        ]);
    }
}
