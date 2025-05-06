<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Master_session;

class MasterSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {    
        $sessionNames = [
            '2023-24',
            '2024-25',
            '2025-26',
        ];

        foreach ($sessionNames as $name) {
            Master_session::firstOrCreate(
                ['session_name' => $name],
                ['session_name' => $name]  
            );
        }
    }
}
