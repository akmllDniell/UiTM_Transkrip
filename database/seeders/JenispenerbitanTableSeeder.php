<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenispenerbitanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('jenispenerbitan')->delete();
        
        DB::table('jenispenerbitan')->insert(array (
            0 => 
            array (
                'jenispenerbitan' => 'test',
                'jenispenerbitanid' => 3,
            ),
        ));
        
        
    }
}