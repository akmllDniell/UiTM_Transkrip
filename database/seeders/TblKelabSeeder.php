<?php

namespace Database\Seeders;

use App\Models\TblKelab;
use Illuminate\Database\Seeder;

class TblKelabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'id' => '1',
                'jeniskelab'=>'MYTECC',
            ],
            [
                'id' => '2',
                'jeniskelab'=>'SILAT ',
            ],
            [
                'id' => '3',
                'jeniskelab'=>'ITECC',
            ],
            [
                'id' => '4',
                'jeniskelab'=>'ENGLISH CLUB',
            ],
            [
                'id' => '5',
                'jeniskelab'=>'RAUBOTIC',
            ],
            
        ];
            
            foreach($user as $key => $value)
            {
                TblKelab::create($value);                
            };
    }
}
