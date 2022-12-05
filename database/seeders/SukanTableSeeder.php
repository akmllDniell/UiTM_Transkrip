<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SukanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('sukan')->delete();
        
        DB::table('sukan')->insert(array (
            0 => 
            array (
                'markahid' => 1,
                'sukanid' => 1,
                'tahapid' => 1,
            ),
            1 => 
            array (
                'markahid' => 1,
                'sukanid' => 8,
                'tahapid' => 4,
            ),
            2 => 
            array (
                'markahid' => 1,
                'sukanid' => 9,
                'tahapid' => 1,
            ),
            3 => 
            array (
                'markahid' => 1,
                'sukanid' => 10,
                'tahapid' => 1,
            ),
            4 => 
            array (
                'markahid' => 1,
                'sukanid' => 11,
                'tahapid' => 8,
            ),
            5 => 
            array (
                'markahid' => 3,
                'sukanid' => 12,
                'tahapid' => 8,
            ),
        ));
        
        
    }
}