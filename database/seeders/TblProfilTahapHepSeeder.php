<?php

namespace Database\Seeders;

use App\Models\TblProfilTahapHep;
use Illuminate\Database\Seeder;

class TblProfilTahapHepSeeder extends Seeder
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
                'hep'=>'ASAS DNA UiTM',
            ],
            [
                'id' => '2',
                'hep'=>'CELIK FIKIR',
            ],
            [
                'id' => '3',
                'hep'=>'CELIK PILIHANRAYA',
            ],
            [
                'id' => '4',
                'hep'=>'PENGURUSAN KESELAMATAN KEBANGSAAN',
            ],
            [
                'id' => '5',
                'hep'=>'JIWA UiTM',
            ],
            [
                'id' => '6',
                'hep'=>'KECEMERLANGAN DAN KEMANDIRIAN MAHASISWA',
            ],
        ];
            
            foreach($user as $key => $value)
            {
                TblProfilTahapHep::create($value);                
            };
    }
}
