<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(AdminSeeder::class); 
    
        $subjectNames = [
            'English',
            'Hindi',
            'Maths',
            'E.V.S.',
            'G.K.',
            'Science',
            'S. Science',
            'Sanskrit',
            'Drawing',
            'Art & Crafts',
            'Physics',
            'Chemistry',
            'Bio',
            'History',
            'Economics',
            'Accounts',
            'B. Studies',
        ];
    
        $subjects = [];
    
        foreach ($subjectNames as $name) {
            $subjects[] = [
                'name' => $name,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
    
        DB::table('master_subjects')->insert($subjects);
    }
}
