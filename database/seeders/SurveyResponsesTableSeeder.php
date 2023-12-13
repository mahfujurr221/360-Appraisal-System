<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SurveyResponsesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('survey_responses')->delete();
        
        \DB::table('survey_responses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'survey_setup_id' => 5,
                'employee_id' => 1,
                'response_from_user_id' => '[5]',
                'points' => 28,
                'created_at' => '2023-12-13 14:36:54',
                'updated_at' => '2023-12-13 14:37:12',
            ),
            1 => 
            array (
                'id' => 2,
                'survey_setup_id' => 5,
                'employee_id' => 3,
                'response_from_user_id' => '[5,4]',
                'points' => 25,
                'created_at' => '2023-12-13 14:44:25',
                'updated_at' => '2023-12-13 14:45:34',
            ),
        ));
        
        
    }
}