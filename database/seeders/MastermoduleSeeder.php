<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MastermoduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modules = [
            ['id' => 1, 'name' => 'Student Enquiry'],
            ['id' => 2, 'name' => 'Assign Section'],
            ['id' => 3, 'name' => 'Assign Roll No.'],
            ['id' => 4, 'name' => 'Assign Subject'],
            ['id' => 5, 'name' => 'Assign House'],
            ['id' => 6, 'name' => 'Edit Profile'],
            ['id' => 7, 'name' => 'Promote/Detain'],
            ['id' => 8, 'name' => 'Terminate'],
            ['id' => 9, 'name' => 'Student Archive'],
            ['id' => 10, 'name' => 'Student'],
            ['id' => 11, 'name' => 'Staff Enquiry'],
            ['id' => 12, 'name' => 'Staff Management'],
            ['id' => 13, 'name' => 'Attendance'],
            ['id' => 14, 'name' => 'Syllabus'],
            ['id' => 15, 'name' => 'Admit Card'],
            ['id' => 16, 'name' => 'Time Table'],
            ['id' => 17, 'name' => 'Result'],
            ['id' => 18, 'name' => 'Sub-Admin'],
            ['id' => 19, 'name' => 'Annual Calender'],
            ['id' => 20, 'name' => 'Certificate'],
            ['id' => 21, 'name' => 'Ticket'],
            ['id' => 22, 'name' => 'Fee'],
            ['id' => 23, 'name' => 'Transportaion'],
            ['id' => 24, 'name' => 'Class Group'],
            ['id' => 25, 'name' => 'Subject Group'],
        ];

        foreach ($modules as $module) {
            DB::table('master_modules')->updateOrInsert(
                ['id' => $module['id']],
                ['name' => $module['name']]
            );
        }
    }
}
