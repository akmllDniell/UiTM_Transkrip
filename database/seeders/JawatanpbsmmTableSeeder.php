<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JawatanpbsmmTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('jawatanpbsmm')->delete();
        
        DB::table('jawatanpbsmm')->insert(array (
            0 => 
            array (
                'jawatanpbsmm' => 'Pengawai penjaga',
                'jawatanpbsmmid' => 1,
            ),
            1 => 
            array (
                'jawatanpbsmm' => 'Bendahari',
                'jawatanpbsmmid' => 2,
            ),
        ));
        
        
    }
}