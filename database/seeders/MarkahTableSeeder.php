<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarkahTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('markah')->delete();
        
        DB::table('markah')->insert(array (
            0 => 
            array (
                'markah' => 2.0,
                'markahid' => 1,
            ),
            1 => 
            array (
                'markah' => 2.33,
                'markahid' => 2,
            ),
            2 => 
            array (
                'markah' => 2.67,
                'markahid' => 3,
            ),
            3 => 
            array (
                'markah' => 3.0,
                'markahid' => 4,
            ),
            4 => 
            array (
                'markah' => 3.33,
                'markahid' => 5,
            ),
            5 => 
            array (
                'markah' => 3.67,
                'markahid' => 6,
            ),
            6 => 
            array (
                'markah' => 4.0,
                'markahid' => 7,
            ),
            7 => 
            array (
                'markah' => 1.67,
                'markahid' => 8,
            ),
        ));
        
        
    }
}