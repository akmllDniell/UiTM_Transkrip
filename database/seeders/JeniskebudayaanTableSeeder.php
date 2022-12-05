<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JeniskebudayaanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('jeniskebudayaan')->delete();
        
        DB::table('jeniskebudayaan')->insert(array (
            0 => 
            array (
                'jeniskebudayaan' => 'contoh',
                'jeniskebudayaanid' => 4,
            ),
        ));
        
        
    }
}