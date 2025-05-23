<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $admin = DB::table('admins')->where('email', 'admin@ubuddy.com')->first();

        if (!$admin) {
            DB::table('admins')->insert([
                'name' => 'Ubuddy Admin',
                'username' => 'ubuddyadmin_123',
                'email' => 'admin@ubuddy.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Ubuddy1234!'), 
                'remember_token' => Str::random(60),
                'created_at' => now(),
                'updated_at' => now(),
                'role' => 1,
            ]);
        }

        $supportAdmin = DB::table('admins')->where('email', 'support@ubuddy.com')->first();

        if (!$supportAdmin) {
            DB::table('admins')->insert([
                'name' => 'Support Admin',
                'username' => 'supportadmin_123',
                'email' => 'support@ubuddy.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Support@Ubuddy2025'),
                'remember_token' => Str::random(60),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
