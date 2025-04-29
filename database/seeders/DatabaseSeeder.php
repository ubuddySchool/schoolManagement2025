<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder; 
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(AdminSeeder::class); 
        $this->call(MastermoduleSeeder::class); 
        $this->call(SchoolsessionSeeder::class); 
        
        
        if (!User::where('school_username', 'schoolududdy123')->exists()) {
            User::create([
                'name' => 'schoolududdy@123',
                'school_username' => 'schoolududdy123',
                'u_code' => '4105',
                'email' => 'test@ubuddy.com',
                'password' => Hash::make('123456'), 
            ]);
        }
        
    }
}
