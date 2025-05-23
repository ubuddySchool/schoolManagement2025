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

        
        if (!User::where('school_username', 'schoolubuddy123')->exists()) {
            User::firstOrCreate(
                ['school_username' => 'schoolubuddy123'],
                [
                    'name' => 'schoolubuddytest',
                    'u_code' => '4105',
                    'email' => 'test@ubuddy.com',
                    'password' => Hash::make('123456'),
                ]
            );
            
        }

        $this->call(AdminSeeder::class); 
        $this->call(MasterSessionSeeder::class); 
        $this->call(MasterClassesSeeder::class); 
        $this->call(MasterSubjectSeeder::class); 
        $this->call(MasterTermsSeeder::class); 
        $this->call(MastermoduleSeeder::class); 
        $this->call(SchoolsessionSeeder::class); 
        $this->call(StudentCatSeeder::class);
        $this->call(StudentformdetailsSeeder::class);
        
        
    }
}
