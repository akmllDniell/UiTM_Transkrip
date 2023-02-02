<?php

namespace Database\Seeders;

use App\Models\TblPenerbitan;
use Illuminate\Database\Seeder;

class TblPenerbitanSeeder extends Seeder
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
                'jenispenerbitan'=>'MAJALAH HARIAN UiTM',
            ],
            [
                'id' => '2',
                'jenispenerbitan'=>'PENERBIT BUKU USAHAWAN',
            ],
            [
                'id' => '3',
                'jenispenerbitan'=>'MAJALAH SUKAN UiTM',
            ],
            [
                'id' => '4',
                'jenispenerbitan'=>'PENERBIT E-BOOK HTML',
            ],
            [
                'id' => '5',
                'jenispenerbitan'=>'MAJALAH EKONOMI MALAYSIA',
            ],
            
        ];
            
            foreach($user as $key => $value)
            {
                TblPenerbitan::create($value);                
            };

    }
}
