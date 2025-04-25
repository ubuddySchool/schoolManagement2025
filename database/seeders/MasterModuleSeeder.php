<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $this->call(AdminSeeder::class); 
    
        $moduleNames = [
            'Student Enquiry',
            'Student Management',
            'Student',
            'Staff Enquiry',
            'Staff Management',
            'Attendance',
            'Syllabus',
            'Admit Card',
            'Time Table',
            'Result',
            'Sub-Admin',
            'Annual Calendar',
            'Certificate',
            'Fee',
            'Transportation',
            'Settings',
        ];
    
        $modules = [];
    
        foreach ($moduleNames as $name) {
            $modules[] = [
                'name' => $name,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
    
        DB::table('master_modules')->insert($modules);
    }
    
}
