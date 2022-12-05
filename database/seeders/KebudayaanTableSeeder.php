<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KebudayaanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('kebudayaan')->delete();
        
        DB::table('kebudayaan')->insert(array (
            0 => 
            array (
                'kebudayaanid' => 1,
                'markahid' => 1,
                'tahapid' => 1,
            ),
            1 => 
            array (
                'kebudayaanid' => 2,
                'markahid' => 1,
                'tahapid' => 7,
            ),
            2 => 
            array (
                'kebudayaanid' => 3,
                'markahid' => 1,
                'tahapid' => 6,
            ),
        ));
        
        
    }
}