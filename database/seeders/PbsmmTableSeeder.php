<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PbsmmTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('pbsmm')->delete();
        
        DB::table('pbsmm')->insert(array (
            0 => 
            array (
                'jawatanpbsmmid' => 1,
                'markahid' => 1,
                'pbsmmid' => 1,
            ),
            1 => 
            array (
                'jawatanpbsmmid' => 2,
                'markahid' => 1,
                'pbsmmid' => 2,
            ),
        ));
        
        
    }
}