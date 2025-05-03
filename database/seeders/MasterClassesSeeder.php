<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

    $classes = [];

    foreach ($classNames as $name) {
        $classes[] = [
            'class_name' => $name,
        ];
    }

    DB::table('master_classes')->insert($classes);
    }
}
