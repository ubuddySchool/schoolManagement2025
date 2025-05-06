<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Master_terms; 

class MasterTermsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $termNames = [
            'Term I',
            'Term II',
            'Half Yearly',
            'Annualy',
            'SA I',
            'SA II',
            'FA I',
            'FA II',
            'FA III',
        ];

        foreach ($termNames as $name) {
            Master_terms::firstOrCreate(
                ['term_name' => $name],  
                ['term_name' => $name]  
            );
        }
    }
}
