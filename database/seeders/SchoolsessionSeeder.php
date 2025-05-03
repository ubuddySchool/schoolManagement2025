<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolsessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modules = [
            ['id' => 1, 'session_id' => 1, 'school_id' => 1],
            ['id' => 2, 'session_id' => 2, 'school_id' => 1],
            ['id' => 3, 'session_id' => 3, 'school_id' => 1],
        ];

        foreach ($modules as $module) {
            DB::table('schoolsessions')->updateOrInsert(
                ['id' => $module['id']],
                [
                    'session_id' => $module['session_id'],
                    'school_id' => $module['school_id']
                ]
            );
        }
    }
}
