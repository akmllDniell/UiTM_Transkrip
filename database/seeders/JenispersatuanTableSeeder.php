<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenispersatuanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('jenispersatuan')->delete();
        
        DB::table('jenispersatuan')->insert(array (
            0 => 
            array (
                'jenispersatuanid' => 3,
                'namapersatuan' => 'SILAT CEKAK',
            ),
        ));
        
        
    }
}