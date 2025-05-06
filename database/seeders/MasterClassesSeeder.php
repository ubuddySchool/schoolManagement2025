<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Master_classes; 

class MasterClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(AdminSeeder::class); 

        $classNames = [
            'Play Nursery',
            'Nursery',
            'K.G. I',
            'K.G. II',
            'I',
            'II',
            'III',
            'IV',
            'V',
            'VI',
            'VII',
            'VIII',
            'IX',
            'X',
            'XI PCM',
            'XI PCB',
            'XI COMMERCE',
            'XI ARTS',
            'XI EXTRA',
            'XII PCM',
            'XII PCB',
            'XII COMMERCE',
            'XII ARTS',
            'XII EXTRA',
        ];

        foreach ($classNames as $name) {
            Master_classes::firstOrCreate(
                ['class_name' => $name],  
                ['class_name' => $name]   
            );
        }
    }
}
