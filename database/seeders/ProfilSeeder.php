<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profils')->insert([
            'name' => 'KALUSEYIKO DIANSOSA Ben',
            'message' => "Ingénieur informaticien, spécialisé en Science des données et développement des systèmes informatiques répondant aux besoins des utilisateurs.",
            'phone' => "+243 85 016 81 29",
            'address' => "15, Basoko, C/Ngaliema",
            'email' => 'benkal@benkalsoft.com',
        ]);
    }
}
