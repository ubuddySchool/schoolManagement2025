<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Schoolsession;

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
            ['id' => 3, 'session_id' => 3, 'school_id' => 1, 'status' => 1],
        ];

        foreach ($modules as $module) {
            // Only add 'status' if it exists in the module array
            $attributes = [
                'session_id' => $module['session_id'],
                'school_id' => $module['school_id'],
            ];

            if (isset($module['status'])) {
                $attributes['status'] = $module['status'];
            }

            Schoolsession::updateOrCreate(
                ['id' => $module['id']], 
                $attributes
            );
        }
    }
}
