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
                'question' => 'What about his coding style?',
                'option1' => 'Excellent',
                'point1' => 4,
                'option2' => 'Good',
                'point2' => 3,
                'option3' => 'Average',
                'point3' => 2,
                'option4' => 'Noob',
                'point4' => 1,
                'created_at' => '2023-12-12 16:20:57',
                'updated_at' => '2023-12-12 16:20:57',
            ),
            1 => 
            array (
                'id' => 2,
                'question' => 'What about his typing speed?',
                'option1' => 'Excellent',
                'point1' => 4,
                'option2' => 'Good',
                'point2' => 3,
                'option3' => 'Average',
                'point3' => 2,
                'option4' => 'Noob',
                'point4' => 1,
                'created_at' => '2023-12-12 15:47:52',
                'updated_at' => '2023-12-12 15:47:52',
            ),
        ));
        
        
    }
}