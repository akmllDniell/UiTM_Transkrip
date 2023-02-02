<?php

namespace Database\Seeders;

use App\Models\TblPenerbitanDt;
use Illuminate\Database\Seeder;

class TblPenerbitanDtSeeder extends Seeder
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
                'jawatanid'=>'11',
                'idmarkah'=>'1',
            ],
            [
                'id' => '2',
                'idTP'=>'1',
                'jawatanid'=>'10',
                'idmarkah'=>'2',
            ],
            [
                'id' => '3',
                'idTP'=>'1',
                'jawatanid'=>'9',
                'idmarkah'=>'1',
            ],
            [
                'id' => '4',
                'idTP'=>'1',
                'jawatanid'=>'8',
                'idmarkah'=>'1',
            ],
            [
                'id' => '5',
                'idTP'=>'1',
                'jawatanid'=>'7',
                'idmarkah'=>'2',
            ],

            //jabatan/persatuan
            [
                'id' => '6',
                'idTP'=>'2',
                'jawatanid'=>'11',
                'idmarkah'=>'1',
            ],
            [
                'id' => '7',
                'idTP'=>'2',
                'jawatanid'=>'10',
                'idmarkah'=>'2',
            ],
            [
                'id' => '8',
                'idTP'=>'2',
                'jawatanid'=>'9',
                'idmarkah'=>'2',
            ],
            [
                'id' => '9',
                'idTP'=>'2',
                'jawatanid'=>'8',
                'idmarkah'=>'2',
            ],
            [
                'id' => '10',
                'idTP'=>'2',
                'jawatanid'=>'7',
                'idmarkah'=>'3',
            ],
            
            //kolej/fakulti/kelab
            [
                'id' => '11',
                'idTP'=>'3',
                'jawatanid'=>'11',
                'idmarkah'=>'2',
            ],
            [
                'id' => '12',
                'idTP'=>'3',
                'jawatanid'=>'10',
                'idmarkah'=>'3',
            ],
            [
                'id' => '13',
                'idTP'=>'3',
                'jawatanid'=>'9',
                'idmarkah'=>'3',
            ],
            [
                'id' => '14',
                'idTP'=>'3',
                'jawatanid'=>'8',
                'idmarkah'=>'3',
            ],
            [
                'id' => '15',
                'idTP'=>'3',
                'jawatanid'=>'7',
                'idmarkah'=>'4',
            ],

            //UNIVERSITI
            [
                'id' => '16',
                'idTP'=>'4',
                'jawatanid'=>'11',
                'idmarkah'=>'2',
            ],
            [
                'id' => '17',
                'idTP'=>'4',
                'jawatanid'=>'10',
                'idmarkah'=>'4',
            ],
            [
                'id' => '18',
                'idTP'=>'4',
                'jawatanid'=>'9',
                'idmarkah'=>'4',
            ],
            [
                'id' => '19',
                'idTP'=>'4',
                'jawatanid'=>'8',
                'idmarkah'=>'4',
            ],
            [
                'id' => '20',
                'idTP'=>'4',
                'jawatanid'=>'7',
                'idmarkah'=>'5',
            ],

            //DAERAH
            [
                'id' => '21',
                'idTP'=>'5',
                'jawatanid'=>'11',
                'idmarkah'=>'4',
            ],
            [
                'id' => '22',
                'idTP'=>'5',
                'jawatanid'=>'10',
                'idmarkah'=>'5',
            ],
            [
                'id' => '23',
                'idTP'=>'5',
                'jawatanid'=>'9',
                'idmarkah'=>'5',
            ],
            [
                'id' => '24',
                'idTP'=>'5',
                'jawatanid'=>'8',
                'idmarkah'=>'5',
            ],
            [
                'id' => '25',
                'idTP'=>'5',
                'jawatanid'=>'7',
                'idmarkah'=>'6',
            ],

            //NEGERI/IPT
            [
                'id' => '26',
                'idTP'=>'6',
                'jawatanid'=>'11',
                'idmarkah'=>'5',
            ],
            [
                'id' => '27',
                'idTP'=>'6',
                'jawatanid'=>'10',
                'idmarkah'=>'6',
            ],
            [
                'id' => '28',
                'idTP'=>'6',
                'jawatanid'=>'9',
                'idmarkah'=>'6',
            ],
            [
                'id' => '29',
                'idTP'=>'6',
                'jawatanid'=>'8',
                'idmarkah'=>'6',
            ],
            [
                'id' => '30',
                'idTP'=>'6',
                'jawatanid'=>'7',
                'idmarkah'=>'7',
            ],

            //NEGARA
            [
                'id' => '31',
                'idTP'=>'7',
                'jawatanid'=>'11',
                'idmarkah'=>'6',
            ],
            [
                'id' => '32',
                'idTP'=>'7',
                'jawatanid'=>'10',
                'idmarkah'=>'7',
            ],
            [
                'id' => '33',
                'idTP'=>'7',
                'jawatanid'=>'9',
                'idmarkah'=>'7',
            ],
            [
                'id' => '34',
                'idTP'=>'7',
                'jawatanid'=>'8',
                'idmarkah'=>'7',
            ],
            [
                'id' => '35',
                'idTP'=>'7',
                'jawatanid'=>'7',
                'idmarkah'=>'8',
            ],

        ];
            
            foreach($user as $key => $value)
            {
                TblPenerbitanDt::create($value);                
            };

    }
}
