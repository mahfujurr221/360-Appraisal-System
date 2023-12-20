<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SurveyQuestionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('survey_questions')->delete();
        
        \DB::table('survey_questions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'question_set_id' => 1,
                'question' => 'This Is a Test Question',
                'option1' => 'Excellent A',
                'point1' => 4,
                'option2' => 'Good A',
                'point2' => 3,
                'option3' => 'Average A',
                'point3' => 2,
                'option4' => 'Bad A',
                'point4' => 1,
                'created_at' => '2023-12-20 18:57:26',
                'updated_at' => '2023-12-20 18:58:55',
            ),
            1 => 
            array (
                'id' => 2,
                'question_set_id' => 2,
                'question' => 'This is a B Set Question',
                'option1' => 'Excellent B',
                'point1' => 4,
                'option2' => 'Good B',
                'point2' => 3,
                'option3' => 'Bad B',
                'point3' => 2,
                'option4' => 'Very Bad B',
                'point4' => 1,
                'created_at' => '2023-12-20 18:58:41',
                'updated_at' => '2023-12-20 18:58:41',
            ),
        ));
        
        
    }
}