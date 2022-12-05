<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenerbitanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('penerbitan')->delete();
        
        DB::table('penerbitan')->insert(array (
            0 => 
            array (
                'jawatanid' => 1,
                'markahid' => 1,
                'penerbitanid' => 1,
                'tahapid' => 1,
            ),
            1 => 
            array (
                'jawatanid' => 2,
                'markahid' => 1,
                'penerbitanid' => 2,
                'tahapid' => 5,
            ),
        ));
        
        
    }
}