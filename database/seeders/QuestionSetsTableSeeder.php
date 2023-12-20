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
                'description' => 'This Set Is For Something',
                'created_at' => '2023-12-20 18:56:21',
                'updated_at' => '2023-12-20 18:56:21',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'B',
                'description' => 'This set is for B',
                'created_at' => '2023-12-20 18:56:43',
                'updated_at' => '2023-12-20 18:56:43',
            ),
        ));
        
        
    }
}