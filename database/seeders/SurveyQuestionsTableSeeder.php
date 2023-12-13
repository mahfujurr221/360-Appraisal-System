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
            2 => 
            array (
                'id' => 3,
                'question' => 'Quidem fugit ab sus',
                'option1' => 'Repudiandae ullamco',
                'point1' => 89,
                'option2' => 'Labore excepturi con',
                'point2' => 66,
                'option3' => 'Et omnis sunt aliqu',
                'point3' => 33,
                'option4' => 'Odio Nam fugiat volu',
                'point4' => 36,
                'created_at' => '2023-12-13 08:05:08',
                'updated_at' => '2023-12-13 08:05:08',
            ),
            3 => 
            array (
                'id' => 4,
                'question' => 'Ut maiores autem ull',
                'option1' => 'Consequuntur irure e',
                'point1' => 96,
                'option2' => 'Veritatis exercitati',
                'point2' => 71,
                'option3' => 'Sequi mollitia sit q',
                'point3' => 59,
                'option4' => 'Mollitia qui eveniet',
                'point4' => 98,
                'created_at' => '2023-12-13 08:05:13',
                'updated_at' => '2023-12-13 08:05:13',
            ),
            4 => 
            array (
                'id' => 5,
                'question' => 'Est non soluta nisi',
                'option1' => 'Officia eos sunt om',
                'point1' => 59,
                'option2' => 'Exercitationem delec',
                'point2' => 74,
                'option3' => 'Nobis iste eos ad l',
                'point3' => 16,
                'option4' => 'Dolor aliquid ducimu',
                'point4' => 49,
                'created_at' => '2023-12-13 08:05:49',
                'updated_at' => '2023-12-13 08:05:49',
            ),
            5 => 
            array (
                'id' => 6,
                'question' => 'Duis adipisicing con',
                'option1' => 'Praesentium culpa a',
                'point1' => 77,
                'option2' => 'Id quod saepe ea rem',
                'point2' => 74,
                'option3' => 'Suscipit obcaecati c',
                'point3' => 16,
                'option4' => 'Ab ut animi iure ob',
                'point4' => 38,
                'created_at' => '2023-12-13 08:06:04',
                'updated_at' => '2023-12-13 08:06:04',
            ),
        ));
        
        
    }
}