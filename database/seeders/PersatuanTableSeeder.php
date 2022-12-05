<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersatuanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('persatuan')->delete();
        
        DB::table('persatuan')->insert(array (
            0 => 
            array (
                'jawatanid' => 1,
                'markahid' => 1,
                'persatuan' => NULL,
                'persatuanid' => 1,
                'tahapid' => 1,
            ),
            1 => 
            array (
                'jawatanid' => 2,
                'markahid' => 8,
                'persatuan' => NULL,
                'persatuanid' => 2,
                'tahapid' => 1,
            ),
            2 => 
            array (
                'jawatanid' => 3,
                'markahid' => 8,
                'persatuan' => NULL,
                'persatuanid' => 3,
                'tahapid' => 1,
            ),
            3 => 
            array (
                'jawatanid' => 1,
                'markahid' => 5,
                'persatuan' => NULL,
                'persatuanid' => 4,
                'tahapid' => 5,
            ),
            4 => 
            array (
                'jawatanid' => 1,
                'markahid' => 1,
                'persatuan' => NULL,
                'persatuanid' => 5,
                'tahapid' => 2,
            ),
            5 => 
            array (
                'jawatanid' => 3,
                'markahid' => 1,
                'persatuan' => NULL,
                'persatuanid' => 6,
                'tahapid' => 1,
            ),
            6 => 
            array (
                'jawatanid' => 1,
                'markahid' => 1,
                'persatuan' => NULL,
                'persatuanid' => 7,
                'tahapid' => 2,
            ),
            7 => 
            array (
                'jawatanid' => 1,
                'markahid' => 6,
                'persatuan' => NULL,
                'persatuanid' => 8,
                'tahapid' => 1,
            ),
            8 => 
            array (
                'jawatanid' => 1,
                'markahid' => 7,
                'persatuan' => NULL,
                'persatuanid' => 9,
                'tahapid' => 3,
            ),
            9 => 
            array (
                'jawatanid' => 1,
                'markahid' => 4,
                'persatuan' => NULL,
                'persatuanid' => 10,
                'tahapid' => 1,
            ),
        ));
        
        
    }
}