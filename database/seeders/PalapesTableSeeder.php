<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PalapesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('palapes')->delete();
        
        DB::table('palapes')->insert(array (
            0 => 
            array (
                'jawatanpalapesid' => 1,
                'markahid' => 1,
                'palapesid' => 1,
            ),
            1 => 
            array (
                'jawatanpalapesid' => 2,
                'markahid' => 1,
                'palapesid' => 2,
            ),
        ));
        
        
    }
}