<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenissukanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('jenissukan')->delete();
        
        DB::table('jenissukan')->insert(array (
            0 => 
            array (
                'jenissukan' => 'Badminton',
                'jenissukanid' => 1,
            ),
            1 => 
            array (
                'jenissukan' => 'Frisbee',
                'jenissukanid' => 2,
            ),
            2 => 
            array (
                'jenissukan' => 'Netball',
                'jenissukanid' => 7,
            ),
            3 => 
            array (
                'jenissukan' => 'Bendahari',
                'jenissukanid' => 8,
            ),
        ));
        
        
    }
}