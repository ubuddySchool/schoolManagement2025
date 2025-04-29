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
            ['id' => 1, 'school_session' => '2023-24'],
            ['id' => 2, 'school_session' => '2024-25'],
            ['id' => 3, 'school_session' => '2025-26'],
        ];

        foreach ($modules as $module) {
            DB::table('schoolsession')->updateOrInsert(
                ['id' => $module['id']],
                ['school_session' => $module['school_session']]
            );
        }
    }
}
