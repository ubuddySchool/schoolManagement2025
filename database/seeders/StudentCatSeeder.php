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
            'admission details',
            'basic details',
            'current address*',
            'permanent address*',
            'bank details',
            'academic details',
            'father details',
            'mother details',
            'guardian details',
        ];

        foreach ($categories as $category) {
            StudentCat::firstOrCreate(['category' => $category]);
        }
    }
}
