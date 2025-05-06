<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Master_subjects; 

class MasterSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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

        foreach ($subjectNames as $name) {
            Master_subjects::firstOrCreate(
                ['subject_name' => $name],  
                ['subject_name' => $name]  
            );
        }
    }
}
