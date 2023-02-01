<?php

namespace Database\Seeders;

use App\Models\TblKelabDt;
use Illuminate\Database\Seeder;

class TblKelabDTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [

            //blok
            [
                'id' => '1',
                'idTP'=>'1',
                'jawatanid'=>'1',
                'idmarkah'=>'1',
            ],
            [
                'id' => '2',
                'idTP'=>'1',
                'jawatanid'=>'2',
                'idmarkah'=>'1',
            ],
            [
                'id' => '3',
                'idTP'=>'1',
                'jawatanid'=>'3',
                'idmarkah'=>'1',
            ],
            [
                'id' => '4',
                'idTP'=>'1',
                'jawatanid'=>'4',
                'idmarkah'=>'1',
            ],
            [
                'id' => '5',
                'idTP'=>'1',
                'jawatanid'=>'5',
                'idmarkah'=>'1',
            ],
            [
                'id' => '6',
                'idTP'=>'1',
                'jawatanid'=>'6',
                'idmarkah'=>'2',
            ],


            //jabatan/persatuan
            [
                'id' => '7',
                'idTP'=>'2',
                'jawatanid'=>'1',
                'idmarkah'=>'1',
            ],
            [
                'id' => '8',
                'idTP'=>'2',
                'jawatanid'=>'2',
                'idmarkah'=>'1',
            ],
            [
                'id' => '9',
                'idTP'=>'2',
                'jawatanid'=>'3',
                'idmarkah'=>'2',
            ],
            [
                'id' => '10',
                'idTP'=>'2',
                'jawatanid'=>'4',
                'idmarkah'=>'2',
            ],
            [
                'id' => '11',
                'idTP'=>'2',
                'jawatanid'=>'5',
                'idmarkah'=>'2',
            ],
            [
                'id' => '12',
                'idTP'=>'2',
                'jawatanid'=>'6',
                'idmarkah'=>'3',
            ],
            
            //kolej/fakulti/kelab
            [
                'id' => '13',
                'idTP'=>'3',
                'jawatanid'=>'1',
                'idmarkah'=>'2',
            ],
            [
                'id' => '14',
                'idTP'=>'3',
                'jawatanid'=>'2',
                'idmarkah'=>'2',
            ],
            [
                'id' => '15',
                'idTP'=>'3',
                'jawatanid'=>'3',
                'idmarkah'=>'2'
            ],
            [
                'id' => '16',
                'idTP'=>'3',
                'jawatanid'=>'4',
                'idmarkah'=>'3'
            ],
            [
                'id' => '17',
                'idTP'=>'3',
                'jawatanid'=>'5',
                'idmarkah'=>'3'
            ],
            [
                'id' => '18',
                'idTP'=>'3',
                'jawatanid'=>'6',
                'idmarkah'=>'4'
            ],

            //UNIVERSITI
            [
                'id' => '19',
                'idTP'=>'4',
                'jawatanid'=>'1',
                'idmarkah'=>'2',
            ],
            [
                'id' => '20',
                'idTP'=>'4',
                'jawatanid'=>'2',
                'idmarkah'=>'2',
            ],
            [
                'id' => '21',
                'idTP'=>'4',
                'jawatanid'=>'3',
                'idmarkah'=>'3'
            ],
            [
                'id' => '22',
                'idTP'=>'4',
                'jawatanid'=>'4',
                'idmarkah'=>'4'
            ],
            [
                'id' => '23',
                'idTP'=>'4',
                'jawatanid'=>'5',
                'idmarkah'=>'4'
            ],
            [
                'id' => '24',
                'idTP'=>'4',
                'jawatanid'=>'6',
                'idmarkah'=>'5'
            ],

            //DAERAH
            [
                'id' => '25',
                'idTP'=>'5',
                'jawatanid'=>'1',
                'idmarkah'=>'3',
            ],
            [
                'id' => '26',
                'idTP'=>'5',
                'jawatanid'=>'2',
                'idmarkah'=>'4',
            ],
            [
                'id' => '27',
                'idTP'=>'5',
                'jawatanid'=>'3',
                'idmarkah'=>'4'
            ],
            [
                'id' => '28',
                'idTP'=>'5',
                'jawatanid'=>'4',
                'idmarkah'=>'5'
            ],
            [
                'id' => '29',
                'idTP'=>'5',
                'jawatanid'=>'5',
                'idmarkah'=>'5'
            ],
            [
                'id' => '30',
                'idTP'=>'5',
                'jawatanid'=>'6',
                'idmarkah'=>'6'
            ],

            //NEGERI/IPT
            [
                'id' => '31',
                'idTP'=>'6',
                'jawatanid'=>'1',
                'idmarkah'=>'4'
            ],
            [
                'id' => '32',
                'idTP'=>'6',
                'jawatanid'=>'2',
                'idmarkah'=>'5'
            ],
            [
                'id' => '33',
                'idTP'=>'6',
                'jawatanid'=>'3',
                'idmarkah'=>'5'
            ],
            [
                'id' => '34',
                'idTP'=>'6',
                'jawatanid'=>'4',
                'idmarkah'=>'6'
            ],
            [
                'id' => '35',
                'idTP'=>'6',
                'jawatanid'=>'5',
                'idmarkah'=>'6'
            ],
            [
                'id' => '36',
                'idTP'=>'6',
                'jawatanid'=>'6',
                'idmarkah'=>'7'
            ],

            //NEGARA
            [
                'id' => '37',
                'idTP'=>'7',
                'jawatanid'=>'1',
                'idmarkah'=>'6'
            ],
            [
                'id' => '38',
                'idTP'=>'7',
                'jawatanid'=>'2',
                'idmarkah'=>'6'
            ],
            [
                'id' => '39',
                'idTP'=>'7',
                'jawatanid'=>'3',
                'idmarkah'=>'7'
            ],
            [
                'id' => '40',
                'idTP'=>'7',
                'jawatanid'=>'4',
                'idmarkah'=>'7'
            ],
            [
                'id' => '41',
                'idTP'=>'7',
                'jawatanid'=>'5',
                'idmarkah'=>'7'
            ],
            [
                'id' => '42',
                'idTP'=>'7',
                'jawatanid'=>'6',
                'idmarkah'=>'8'
            ],

        ];
            
            foreach($user as $key => $value)
            {
                TblKelabDt::create($value);                
            };
    }
}
