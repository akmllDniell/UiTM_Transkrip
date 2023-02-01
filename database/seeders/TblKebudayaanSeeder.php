<?php

namespace Database\Seeders;

use App\Models\TblKebudayaan;
use Illuminate\Database\Seeder;

class TblKebudayaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            [
                'id'=>'1',
                'jeniskebudayaan'=>'KELAB SENAMROBIK',
            ],
            [
                'id'=>'2',
                'jeniskebudayaan'=>'KELAB TARIAN TRADISIONAL',
            ],
           
        ];


            foreach($data as $key => $value)
            {
                TblKebudayaan::create($value);
            }
    }
}
