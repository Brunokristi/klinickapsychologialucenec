<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Dopravná psychológia'],
            ['name' => 'ONLINE terapia a poradenstvo'],
            ['name' => 'Terapeutická a konzultačná činnosť pre rodičov, deti a adolescentov'],
            ['name' => 'Posúdenie psychickej spôsobilosti'],
            ['name' => 'Psychodiagnostické vyšetrenie detí a dospelých'],
            ['name' => 'HRV Biofeedback'],
            ['name' => 'Neuro-psychologická rehabilitácia COGNI PLUS Tréning']
        ];

        DB::table('categories')->insert($categories);
    }
}
