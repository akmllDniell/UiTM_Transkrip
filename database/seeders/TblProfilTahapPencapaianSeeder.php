<?php

namespace Database\Seeders;

use App\Models\TblProfilTahapPencapaian;
use Illuminate\Database\Seeder;

class TblProfilTahapPencapaianSeeder extends Seeder
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
                'pencapaian'=>'Blok',
            ],
            [
                'id' => '2',
                'pencapaian'=>'Jabatan/Persatuan',
            ],
            [
                'id' => '3',
                'pencapaian'=>'Kolej/Fakulti/Kelab',
            ],
            [
                'id' => '4',
                'pencapaian'=>'UNIVERSITI',
            ],
            [
                'id' => '5',
                'pencapaian'=>'Daerah',
            ],
            [
                'id' => '6',
                'pencapaian'=>'Negeri/IPT',
            ],
            [
                'id' => '7',
                'pencapaian'=>'Negara',
            ],
            ];

            foreach($user as $key => $value)
            {
                TblProfilTahapPencapaian::create($value);                
            }
    }
}
