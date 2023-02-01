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
                'jenispenerbitan'=>'Majalah Harian UiTM',
            ],
            [
                'id' => '2',
                'jenispenerbitan'=>'penerbit buku usahawan',
            ],
            [
                'id' => '3',
                'jenispenerbitan'=>'Majalah Sukan UiTM',
            ],
            [
                'id' => '4',
                'jenispenerbitan'=>'penerbit E-Book HTML',
            ],
            [
                'id' => '5',
                'jenispenerbitan'=>'Majalah Ekonomi Malaysia',
            ],
            
        ];
            
            foreach($user as $key => $value)
            {
                TblPenerbitan::create($value);                
            };

    }
}
