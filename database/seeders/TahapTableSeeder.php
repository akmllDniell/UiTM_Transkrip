<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TahapTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('tahap')->delete();
        
        DB::table('tahap')->insert(array (
            0 => 
            array (
                'namatahap' => 'Blok',
                'tahapid' => 1,
            ),
            1 => 
            array (
                'namatahap' => 'Jabatan',
                'tahapid' => 2,
            ),
            2 => 
            array (
                'namatahap' => 'Kolej/Fakulti/Kelab',
                'tahapid' => 3,
            ),
            3 => 
            array (
                'namatahap' => 'UNIVERSITI',
                'tahapid' => 4,
            ),
            4 => 
            array (
                'namatahap' => 'Daerah',
                'tahapid' => 5,
            ),
            5 => 
            array (
                'namatahap' => 'Negeri / IPT',
                'tahapid' => 6,
            ),
            6 => 
            array (
                'namatahap' => 'Negara',
                'tahapid' => 7,
            ),
            7 => 
            array (
                'namatahap' => 'dunia',
                'tahapid' => 8,
            ),
        ));
        
        
    }
}