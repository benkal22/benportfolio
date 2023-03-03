<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemoigangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('temoignages')->insert([
            'author' => "Jean-Claude Lapole",
            'job' => "Expert en Economie",
            'subject' => "Vous proposez des solutions informatiques très innovantes et efficaces.",
            'image' => 'testimonials-1',
        ]);

        DB::table('temoignages')->insert([
            'author' => 'Joel Phanzu',
            'job' => 'Expert en Gestion de Projets',
            'subject' => "Ce que j'apprécie le plus chez vous, c'est la maitrise de l'art de la programmation informatique.",
            'image' => 'testimonials-2',
        ]);

        DB::table('temoignages')->insert([
            'author' => "Rohi Tshimanga",
            'job' => "Expert en Communication visuelle",
            'subject' => "Travaillé avec vous en communication digitale, c'est une nouvelle expérience.",
            'image' => 'testimonials-3',
        ]);
    }
}
