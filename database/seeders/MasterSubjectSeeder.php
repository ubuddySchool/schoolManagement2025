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

        $subjects = [];

        foreach ($subjectNames as $name) {
            $subjects[] = [
                'subject_name' => $name,
            ];
        }

        DB::table('master_subjects')->insert($subjects);
    }
}
