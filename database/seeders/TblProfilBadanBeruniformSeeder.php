<?php

namespace Database\Seeders;

use App\Models\TblProfilBadanBeruniform;
use Illuminate\Database\Seeder;

class TblProfilBadanBeruniformSeeder extends Seeder
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
                'badanuniform'=>'Persatuan Bulan Sabit Merah Malaysia',
                'singkatan'=>'PBSMM',
            ],
            [
                'id'=>'2',
                'badanuniform'=>'Angkatan Pertahanan Awam',
                'singkatan'=>'APM',
            ],
            [
                'id'=>'3',
                'badanuniform'=>'Palapes',
                'singkatan'=>'Palapes',
            ],
            [
                'id'=>'4',
                'badanuniform'=>'Suksis',
                'singkatan'=>'Suksis',
            ],
            [
                'id'=>'5',
                'badanuniform'=>'Bomba',
                'singkatan'=>'Bomba',
            ],            
            ];


            foreach($data as $key => $value)
            {
                TblProfilBadanBeruniform::create($value);
            }
    }
}
