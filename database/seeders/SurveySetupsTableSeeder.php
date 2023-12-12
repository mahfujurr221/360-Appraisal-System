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
                'started_at' => '1999-09-28 11:38:00',
                'ended_at' => '1989-09-21 14:40:00',
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
                'started_at' => '1979-01-06 17:37:00',
                'ended_at' => '1989-03-11 05:09:00',
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
                'started_at' => NULL,
                'ended_at' => NULL,
                'status' => 'completed',
                'created_at' => '2023-12-12 18:49:53',
                'updated_at' => '2023-12-12 18:49:53',
            ),
        ));
        
        
    }
}