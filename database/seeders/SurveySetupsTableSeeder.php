<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SurveySetupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('survey_setups')->delete();
        
        \DB::table('survey_setups')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Madeson Ellis',
                'description' => 'Aut praesentium magn',
                'questions' => '["1","6"]',
                'status' => 'inactive',
                'created_at' => '2023-12-12 18:14:44',
                'updated_at' => '2023-12-12 18:14:44',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Kaye Pittman',
                'description' => 'Ullam anim ullamco m',
                'questions' => '["1","4","6"]',
                'status' => 'active',
                'created_at' => '2023-12-12 18:26:02',
                'updated_at' => '2023-12-12 18:26:02',
            ),
            2 => 
            array (
                'id' => 4,
                'title' => 'Hyacinth Odom',
                'description' => 'Et ut dolore ullam m',
                'questions' => '["2","4","5","6"]',
                'status' => 'completed',
                'created_at' => '2023-12-12 18:49:53',
                'updated_at' => '2023-12-12 18:49:53',
            ),
        ));
        
        
    }
}