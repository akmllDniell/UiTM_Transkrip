<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('program')->delete();
        
        DB::table('program')->insert(array (
            0 => 
            array (
                'markahid' => 1,
                'programid' => 1,
                'tahapid' => 1,
            ),
            1 => 
            array (
                'markahid' => 1,
                'programid' => 2,
                'tahapid' => 8,
            ),
        ));
        
        
    }
}