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
            'Term II',
            'Term III',
            'Hindi',
            'Half Yearly',
            'Annualy',
            'FA I',
            'FA II',
            'FA III',
            'SA I',
            'SA II',
        ];
    
        $terms = [];
    
        foreach ($termNames as $name) {
            $terms[] = [
                'name' => $name,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
    
        DB::table('master_terms')->insert($terms);
    }
}
