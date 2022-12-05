<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisprogramTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('jenisprogram')->delete();
        
        DB::table('jenisprogram')->insert(array (
            0 => 
            array (
                'jenisprogram' => 'tertentu',
                'jenisprogramid' => 6,
            ),
        ));
        
        
    }
}