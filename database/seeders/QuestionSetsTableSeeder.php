<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionSetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('question_sets')->delete();
        
        \DB::table('question_sets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'A',
                'description' => 'Question set is for Supervisor .',
                'created_at' => '2023-12-20 18:56:21',
                'updated_at' => '2023-12-20 21:55:45',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'B',
                'description' => 'Question set for Colleagues.',
                'created_at' => '2023-12-20 18:56:43',
                'updated_at' => '2023-12-20 21:56:25',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'C',
                'description' => 'Question set for Faculty Stuff .',
                'created_at' => '2023-12-20 21:53:55',
                'updated_at' => '2023-12-20 21:56:18',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'D',
                'description' => 'Question Set is For Student',
                'created_at' => '2023-12-20 22:39:19',
                'updated_at' => '2023-12-20 22:39:19',
            ),
        ));
        
        
    }
}