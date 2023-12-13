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
                'user_id' => 4,
                'name' => 'Zachery Guthrie',
                'email' => 'nerehilaci@mailinator.com',
            'phone' => '+1 (173) 549-9849',
                'dept_id' => 1,
                'designation_id' => 2,
                'image' => 'avatar.jpg',
                'status' => 1,
                'survey_setup_status' => 0,
                'created_at' => '2023-12-13 08:04:02',
                'updated_at' => '2023-12-13 08:04:02',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 5,
                'name' => 'Khairul Islam Emon',
                'email' => 'e.mon143298@gmail.com',
                'phone' => '+8801521437220',
                'dept_id' => 1,
                'designation_id' => 1,
                'image' => 'avatar.jpg',
                'status' => 1,
                'survey_setup_status' => 0,
                'created_at' => '2023-12-13 08:04:32',
                'updated_at' => '2023-12-13 08:04:32',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 6,
                'name' => 'Chastity Lane',
                'email' => 'ticuram@mailinator.com',
            'phone' => '+1 (983) 638-8764',
                'dept_id' => 1,
                'designation_id' => 1,
                'image' => 'avatar.jpg',
                'status' => 1,
                'survey_setup_status' => 0,
                'created_at' => '2023-12-13 08:04:40',
                'updated_at' => '2023-12-13 08:04:40',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 7,
                'name' => 'Barrett Powers',
                'email' => 'tyqeta@mailinator.com',
            'phone' => '+1 (341) 935-1536',
                'dept_id' => 1,
                'designation_id' => 1,
                'image' => 'avatar.jpg',
                'status' => 1,
                'survey_setup_status' => 0,
                'created_at' => '2023-12-13 08:04:49',
                'updated_at' => '2023-12-13 08:04:49',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 8,
                'name' => 'Leigh Booker',
                'email' => 'bijeworid@mailinator.com',
            'phone' => '+1 (241) 174-2863',
                'dept_id' => 1,
                'designation_id' => 2,
                'image' => 'avatar.jpg',
                'status' => 1,
                'survey_setup_status' => 0,
                'created_at' => '2023-12-13 08:04:58',
                'updated_at' => '2023-12-13 08:04:58',
            ),
        ));
        
        
    }
}