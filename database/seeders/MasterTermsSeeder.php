<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterTermsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $this->call(AdminSeeder::class); 

        $termNames = [
            'Term I',
            'Trem II',
            'Haly Yearly',
            'Annualy',
            'SA I',
            'SA II',
            'FA I',
            'FA II',
            'FA III',
        ];

        $terms = [];

        foreach ($termNames as $name) {
            $terms[] = [
                'term_name' => $name,
            ];
        }

        DB::table('master_terms')->insert($terms);
    }
}
