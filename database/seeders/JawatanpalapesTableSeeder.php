<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JawatanpalapesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('jawatanpalapes')->delete();
        
        DB::table('jawatanpalapes')->insert(array (
            0 => 
            array (
                'jawatanpalapes' => 'Pengawai Rendah Kanan (SUO)',
                'jawatanpalapesid' => 1,
            ),
        ));
        
        
    }
}