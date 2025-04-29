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
            'English',
            'Hindi',
            'Maths',
            'G.K.',
            'E.V.S.',
            'Science',
            'S. Studies',
            'Physics',
            'Chemistry',
            'Account',
            'Economics',
            'B. Studies',
            'History',
            'Geography',
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
