<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('departments')->delete();
        
        \DB::table('departments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Computer Science And Engineering',
                'dept_code' => 'CSE',
                'created_at' => '2023-10-09 20:23:55',
                'updated_at' => '2023-10-09 20:23:55',
            ),
        ));
        
        
    }
}