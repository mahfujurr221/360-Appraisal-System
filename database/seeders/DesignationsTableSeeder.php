<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DesignationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('designations')->delete();
        
        \DB::table('designations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'BSC',
                'created_at' => '2023-10-09 20:24:28',
                'updated_at' => '2023-10-09 20:24:28',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'MSC',
                'created_at' => '2023-10-09 20:24:42',
                'updated_at' => '2023-10-09 20:24:42',
            ),
        ));
        
        
    }
}