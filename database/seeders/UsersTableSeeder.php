<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Alimul Islam',
                'email' => 'alimul@gmail.com',
                'phone' => '01781342259',
                'address' => 'Rampura,Dhaka',
                'role_id' => 1,
                'dept_id' => NULL,
                'profile_photo_path' => NULL,
                'password' => '$2y$10$ax3KkK9jJcoN1LXcNuleRukIzjBCoU36Fpg5JZVx29hBp6j5POxZ6',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'email_verified_at' => NULL,
                'remember_token' => NULL,
                'status' => 1,
                'created_at' => '2023-08-13 19:51:36',
                'updated_at' => '2023-08-13 21:46:25',
            ),
            
            1 => 
            array (
                'id' => 2,
                'name' => 'Khairul Islam Emon',
                'email' => 'e.mon143298@gmail.com',
                'phone' => '+8801521437220',
                'address' => NULL,
                'role_id' => 3,
                'dept_id' => 1,
                'profile_photo_path' => NULL,
                'password' => '$2y$10$EyJM5rGKoXVrkoojuYE/xeapcO4n7ZbeVz4n0qMNQlBWRTsE4RXL.',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'email_verified_at' => NULL,
                'remember_token' => NULL,
                'status' => 1,
                'created_at' => '2023-12-12 14:50:49',
                'updated_at' => '2023-12-12 14:50:49',
            ),
        ));     
    }
}