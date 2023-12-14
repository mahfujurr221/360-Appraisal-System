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

        \DB::table('users')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Alimul Islam',
                'email' => 'alimul@gmail.com',
                'phone' => '01781342259',
                'address' => 'Rampura,Dhaka',
                'role_id' => 1,
                'dept_id' => NULL,
                'image' => 'avatar.jpg',
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
            array(
                'id' => 4,
                'name' => 'Zachery Guthrie',
                'email' => 'nerehilaci@mailinator.com',
                'phone' => '+1 (173) 549-9849',
                'address' => NULL,
                'role_id' => 3,
                'dept_id' => 1,
                'image' => 'avatar.jpg',
                'password' => '$2y$10$1aWswCRPj8uIHY5YyKMZO.KWNqXTqbAD/pSuc3E1/ecBdmIci2CJ6',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'email_verified_at' => NULL,
                'remember_token' => NULL,
                'status' => 0,
                'created_at' => '2023-12-13 08:04:02',
                'updated_at' => '2023-12-13 08:04:02',
            ),
            2 =>
            array(
                'id' => 5,
                'name' => 'Khairul Islam Emon',
                'email' => 'e.mon143298@gmail.com',
                'phone' => '+8801521437220',
                'address' => NULL,
                'role_id' => 3,
                'dept_id' => 1,
                'image' => 'avatar.jpg',
                'password' => '$2y$10$B6UK/7XcOepIoTjtL7SH5.YcjISR6fc1cUXz7pE1u9D1t/T.dQY0O',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'email_verified_at' => NULL,
                'remember_token' => NULL,
                'status' => 0,
                'created_at' => '2023-12-13 08:04:32',
                'updated_at' => '2023-12-13 08:04:32',
            ),
            3 =>
            array(
                'id' => 6,
                'name' => 'Chastity Lane',
                'email' => 'ticuram@mailinator.com',
                'phone' => '+1 (983) 638-8764',
                'address' => NULL,
                'role_id' => 3,
                'dept_id' => 1,
                'image' => 'avatar.jpg',
                'password' => '$2y$10$4r6pvtoTteMHIkU003ZuNePcRKi2OvPYrcg8BJDB/HVEEslphx1k6',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'email_verified_at' => NULL,
                'remember_token' => NULL,
                'status' => 0,
                'created_at' => '2023-12-13 08:04:40',
                'updated_at' => '2023-12-13 08:04:40',
            ),
            4 =>
            array(
                'id' => 7,
                'name' => 'Barrett Powers',
                'email' => 'tyqeta@mailinator.com',
                'phone' => '+1 (341) 935-1536',
                'address' => NULL,
                'role_id' => 3,
                'dept_id' => 1,
                'image' => 'avatar.jpg',
                'password' => '$2y$10$vDnImBHiyhGVfqv1o..FducGcstzOyUCYDw.JowTCnfks0/HqqwPu',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'email_verified_at' => NULL,
                'remember_token' => NULL,
                'status' => 0,
                'created_at' => '2023-12-13 08:04:49',
                'updated_at' => '2023-12-13 08:04:49',
            ),
            5 =>
            array(
                'id' => 8,
                'name' => 'Leigh Booker',
                'email' => 'bijeworid@mailinator.com',
                'phone' => '+1 (241) 174-2863',
                'address' => NULL,
                'role_id' => 3,
                'dept_id' => 1,
                'image' => 'avatar.jpg',
                'password' => '$2y$10$cFDZGVwnqIjjFbIxTobSJO4Cn1yr5tpYEGD4i9qmBcaUL.FMcRwua',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'email_verified_at' => NULL,
                'remember_token' => NULL,
                'status' => 0,
                'created_at' => '2023-12-13 08:04:58',
                'updated_at' => '2023-12-13 08:04:58',
            ),
        ));
    }
}
