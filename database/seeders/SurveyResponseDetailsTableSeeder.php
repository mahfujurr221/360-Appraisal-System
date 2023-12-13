<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SurveyResponseDetailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('survey_response_details')->delete();
        
        \DB::table('survey_response_details')->insert(array (
            0 => 
            array (
                'id' => 1,
                'survey_response_id' => 1,
                'survey_question_id' => 1,
                'option1' => 2,
                'option2' => 0,
                'option3' => 0,
                'option4' => 0,
                'created_at' => '2023-12-13 14:36:54',
                'updated_at' => '2023-12-13 14:37:12',
            ),
            1 => 
            array (
                'id' => 2,
                'survey_response_id' => 1,
                'survey_question_id' => 2,
                'option1' => 0,
                'option2' => 2,
                'option3' => 0,
                'option4' => 0,
                'created_at' => '2023-12-13 14:36:54',
                'updated_at' => '2023-12-13 14:37:12',
            ),
            2 => 
            array (
                'id' => 3,
                'survey_response_id' => 1,
                'survey_question_id' => 3,
                'option1' => 0,
                'option2' => 0,
                'option3' => 2,
                'option4' => 0,
                'created_at' => '2023-12-13 14:36:54',
                'updated_at' => '2023-12-13 14:37:12',
            ),
            3 => 
            array (
                'id' => 4,
                'survey_response_id' => 1,
                'survey_question_id' => 4,
                'option1' => 0,
                'option2' => 0,
                'option3' => 0,
                'option4' => 2,
                'created_at' => '2023-12-13 14:36:54',
                'updated_at' => '2023-12-13 14:37:12',
            ),
            4 => 
            array (
                'id' => 5,
                'survey_response_id' => 1,
                'survey_question_id' => 5,
                'option1' => 2,
                'option2' => 0,
                'option3' => 0,
                'option4' => 0,
                'created_at' => '2023-12-13 14:36:54',
                'updated_at' => '2023-12-13 14:37:12',
            ),
            5 => 
            array (
                'id' => 6,
                'survey_response_id' => 2,
                'survey_question_id' => 1,
                'option1' => 2,
                'option2' => 0,
                'option3' => 0,
                'option4' => 0,
                'created_at' => '2023-12-13 14:44:25',
                'updated_at' => '2023-12-13 14:45:34',
            ),
            6 => 
            array (
                'id' => 7,
                'survey_response_id' => 2,
                'survey_question_id' => 2,
                'option1' => 0,
                'option2' => 2,
                'option3' => 0,
                'option4' => 0,
                'created_at' => '2023-12-13 14:44:25',
                'updated_at' => '2023-12-13 14:45:34',
            ),
            7 => 
            array (
                'id' => 8,
                'survey_response_id' => 2,
                'survey_question_id' => 3,
                'option1' => 0,
                'option2' => 0,
                'option3' => 2,
                'option4' => 0,
                'created_at' => '2023-12-13 14:44:25',
                'updated_at' => '2023-12-13 14:45:34',
            ),
            8 => 
            array (
                'id' => 9,
                'survey_response_id' => 2,
                'survey_question_id' => 4,
                'option1' => 0,
                'option2' => 0,
                'option3' => 0,
                'option4' => 2,
                'created_at' => '2023-12-13 14:44:25',
                'updated_at' => '2023-12-13 14:45:34',
            ),
            9 => 
            array (
                'id' => 10,
                'survey_response_id' => 2,
                'survey_question_id' => 5,
                'option1' => 1,
                'option2' => 0,
                'option3' => 0,
                'option4' => 1,
                'created_at' => '2023-12-13 14:44:25',
                'updated_at' => '2023-12-13 14:45:34',
            ),
        ));
        
        
    }
}