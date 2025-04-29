<?php

namespace Database\Seeders;

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
            ['id' => 1, 'school_session' => '2023-24', 'school_id' => 1],
            ['id' => 2, 'school_session' => '2024-25', 'school_id' => 1],
            ['id' => 3, 'school_session' => '2025-26', 'school_id' => 1],
        ];

        foreach ($modules as $module) {
            DB::table('schoolsession')->updateOrInsert(
                ['id' => $module['id']],
                [
                    'school_session' => $module['school_session'],
                    'school_id' => $module['school_id']
                ]
            );
        }
    }
}
