<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JawatanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('jawatan')->delete();
        
        DB::table('jawatan')->insert(array (
            0 => 
            array (
                'jawatan' => 'YDP',
                'jawatanid' => 1,
            ),
            1 => 
            array (
                'jawatan' => 'NYDP',
                'jawatanid' => 2,
            ),
            2 => 
            array (
                'jawatan' => 'Setia Usaha',
                'jawatanid' => 3,
            ),
            3 => 
            array (
                'jawatan' => 'Bendahari',
                'jawatanid' => 4,
            ),
            4 => 
            array (
                'jawatan' => 'Exco',
                'jawatanid' => 5,
            ),
            5 => 
            array (
                'jawatan' => 'Ahli Aktif',
                'jawatanid' => 6,
            ),
        ));
        
        
    }
}