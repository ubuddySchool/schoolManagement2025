<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StudentCat;

class StudentCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Admission Details',
            'Personal Details',
            'Document Upload',
            'Current Address',
            'Permanent Address',
            'Bank Details',
            'Academic Details',
            'Father Details',
            'Mother Details',
            'Guardian Details',
        ];

        foreach ($categories as $category) {
            StudentCat::firstOrCreate(['category' => $category]);
        }
    }
}
