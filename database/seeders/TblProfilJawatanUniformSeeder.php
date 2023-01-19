<?php

namespace Database\Seeders;

use App\Models\TblProfilJawatanUniform;
use Illuminate\Database\Seeder;

class TblProfilJawatanUniformSeeder extends Seeder
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
                'jawatanuniform'=>'Pengawai Penjaga',
                'idBadanUniform'=>'1',
            ],
            [
                'id' => '2',
                'jawatanuniform'=>'Bendahari',
                'idBadanUniform'=>'1',
            ],
            [
                'id' => '3',
                'jawatanuniform'=>'Kuarter Master',
                'idBadanUniform'=>'1',
            ],
            [
                'id' => '4',
                'jawatanuniform'=>'Penyelaras',
                'idBadanUniform'=>'1',
            ],
            [
                'id' => '5',
                'jawatanuniform'=>'Komandan Detachment',
                'idBadanUniform'=>'1',
            ],
            [
                'id' => '6',
                'jawatanuniform'=>'Ahli Aktif',
                'idBadanUniform'=>'1',
            ],
            [
                'id' => '7',
                'jawatanuniform'=>'Pengawai Rendah Kanan(SUO)',
                'idBadanUniform'=>'3',
            ],
            [
                'id' => '8',
                'jawatanuniform'=>'Pengawai Rendah Muda(JUO)',
                'idBadanUniform'=>'3',
            ],
            [
                'id' => '9',
                'jawatanuniform'=>'Sarjan (Senior)',
                'idBadanUniform'=>'3',
            ],
            [
                'id' => '10',
                'jawatanuniform'=>'Kopral (Senior)',
                'idBadanUniform'=>'3',
            ],
            [
                'id' => '11',
                'jawatanuniform'=>'Kadet Biasa (Senior)',
                'idBadanUniform'=>'3',
            ],
            [
                'id' => '12',
                'jawatanuniform'=>'Sarjan (intermediate)',
                'idBadanUniform'=>'3',
            ],
            [
                'id' => '13',
                'jawatanuniform'=>'Koperal (intermediate)',
                'idBadanUniform'=>'3',
            ],
            [
                'id' => '14',
                'jawatanuniform'=>'Kader Biase (intermediate)',
                'idBadanUniform'=>'3',
            ],
            [
                'id' => '15',
                'jawatanuniform'=>'Junior',
                'idBadanUniform'=>'3',
            ],
            [
                'id' => '16',
                'jawatanuniform'=>'Kapten',
                'idBadanUniform'=>'2',
            ],
            [
                'id' => '17',
                'jawatanuniform'=>'Leftenan',
                'idBadanUniform'=>'2',
            ],
            [
                'id' => '18',
                'jawatanuniform'=>'Leftenan Muda',
                'idBadanUniform'=>'2',
            ],
            [
                'id' => '19',
                'jawatanuniform'=>'Sarjan',
                'idBadanUniform'=>'2',
            ],
            [
                'id' => '20',
                'jawatanuniform'=>'Koperal',
                'idBadanUniform'=>'2',
            ],
            [
                'id' => '21',
                'jawatanuniform'=>'Lans. Koperal',
                'idBadanUniform'=>'2',
            ],
            [
                'id' => '22',
                'jawatanuniform'=>'Anggota Biasa',
                'idBadanUniform'=>'2',
            ],
            [
                'id' => '23',
                'jawatanuniform'=>'Sub Inspektor',
                'idBadanUniform'=>'4',
            ],
            [
                'id' => '24',
                'jawatanuniform'=>'Sarjan Mejar',
                'idBadanUniform'=>'4',
            ],
            [
                'id' => '25',
                'jawatanuniform'=>'Sarjan',
                'idBadanUniform'=>'4',
            ],
            [
                'id' => '26',
                'jawatanuniform'=>'Koperal',
                'idBadanUniform'=>'4',
            ],
            [
                'id' => '27',
                'jawatanuniform'=>'Lan Koperal',
                'idBadanUniform'=>'4',
            ],
            [
                'id' => '28',
                'jawatanuniform'=>'Konstabel',
                'idBadanUniform'=>'4',
            ],
        ];

        foreach($user as $key => $value)
            {
                TblProfilJawatanUniform::create($value);                
            };
    }
}
