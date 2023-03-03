<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Lagange Programmation
        DB::table('outils')->insert([
            'name' => 'Python',
            'percent' => 98,
            'competence_id' => 1,
        ]);

        DB::table('outils')->insert([
            'name' => 'R',
            'percent' => 70,
            'competence_id' => 1,
        ]);

        DB::table('outils')->insert([
            'name' => 'Java',
            'percent' => 98,
            'competence_id' => 1,
        ]);

        DB::table('outils')->insert([
            'name' => 'Dart',
            'percent' => 85,
            'competence_id' => 2,
        ]);

        //Data Science et IA
        DB::table('outils')->insert([
            'name' => 'Tensorflow',
            'percent' => 100,
            'competence_id' => 2,
        ]);

        DB::table('outils')->insert([
            'name' => 'Keras',
            'percent' => 100,
            'competence_id' => 2,
        ]);

        DB::table('outils')->insert([
            'name' => 'Scikit-learn',
            'percent' => 100,
            'competence_id' => 2,
        ]);

        DB::table('outils')->insert([
            'name' => 'NLTK',
            'percent' => 100,
            'competence_id' => 2,
        ]);

        //Traitement des données
        DB::table('outils')->insert([
            'name' => 'Pandas',
            'percent' => 100,
            'competence_id' => 3,
        ]);

        DB::table('outils')->insert([
            'name' => 'Numpy',
            'percent' => 100,
            'competence_id' => 3,
        ]);

        DB::table('outils')->insert([
            'name' => 'Excel',
            'percent' => 100,
            'competence_id' => 3,
        ]);

        DB::table('outils')->insert([
            'name' => 'SQL',
            'percent' => 100,
            'competence_id' => 3,
        ]);

        //Web
        DB::table('outils')->insert([
            'name' => 'Laravel Framework',
            'percent' => 90,
            'competence_id' => 4,
        ]);

        DB::table('outils')->insert([
            'name' => 'Bootstrap',
            'percent' => 100,
            'competence_id' => 4,
        ]);

        //Mobile
        DB::table('outils')->insert([
            'name' => 'Flutter Framework',
            'percent' => 85,
            'competence_id' => 5,
        ]);

        //DevOps
        DB::table('outils')->insert([
            'name' => 'Git & Github',
            'percent' => 90,
            'competence_id' => 6,
        ]);

        //Cloud
        DB::table('outils')->insert([
            'name' => 'Microsoft 365',
            'percent' => 100,
            'competence_id' => 7,
        ]);

        //UX/UI Design
        DB::table('outils')->insert([
            'name' => 'Figma',
            'percent' => 100,
            'competence_id' => 8,
        ]);

        DB::table('outils')->insert([
            'name' => 'Adobe XD',
            'percent' => 100,
            'competence_id' => 8,
        ]);

        //Graphisme
        DB::table('outils')->insert([
            'name' => 'Adobe Photoshop',
            'percent' => 100,
            'competence_id' => 9,
        ]);

        DB::table('outils')->insert([
            'name' => 'Adobe illustrator',
            'percent' => 100,
            'competence_id' => 9,
        ]);

        DB::table('outils')->insert([
            'name' => 'Adobe Indesign',
            'percent' => 100,
            'competence_id' => 9,
        ]);

        //Bureautique
        DB::table('outils')->insert([
            'name' => 'Suite Office',
            'percent' => 100,
            'competence_id' => 10,
        ]);
    }
}
