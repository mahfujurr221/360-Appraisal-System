<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('employees')->delete();
        
        \DB::table('employees')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 9,
                'name' => 'Ishraq Ahmed',
                'email' => 'ishraq@gmail.com',
                'phone' => '01516760531',
                'dept_id' => 1,
                'designation_id' => 1,
                'image' => 'avatar.jpg',
                'status' => 1,
                'survey_setup_status' => 0,
                'created_at' => '2023-12-21 22:40:02',
                'updated_at' => '2023-12-21 22:40:02',
            ),
        ));
        
        
    }
}