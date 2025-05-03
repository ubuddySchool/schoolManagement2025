<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {    

        $sessionName = [
            '2023-24',
            '2024-25',
            '2025-26',
        ];
        foreach ($sessionName as $name) {
            $sessions[] = [
                'session_name' => $name,
            ];
        }

        DB::table('master_sessions')->insert($sessions);
    }
}
