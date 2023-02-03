<?php

namespace Database\Seeders;

use App\Models\TblUniform;
use Illuminate\Database\Seeder;

class TblUniformSeeder extends Seeder
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
                'idmarkah'=>'8',
                'bdnuni'=>'1',
                'jwtuni'=>'1',
            ],
            [
                'id' => '2',
                'idmarkah'=>'6',
                'bdnuni'=>'1',
                'jwtuni'=>'2',
            ],
            [
                'id' => '3',
                'idmarkah'=>'4',
                'bdnuni'=>'1',
                'jwtuni'=>'3',
            ],
            [
                'id' => '4',
                'idmarkah'=>'4',
                'bdnuni'=>'1',
                'jwtuni'=>'4',
            ],
            [
                'id' => '5',
                'idmarkah'=>'3',
                'bdnuni'=>'1',
                'jwtuni'=>'5',
            ],
            [
                'id' => '6',
                'idmarkah'=>'2',
                'bdnuni'=>'1',
                'jwtuni'=>'6',
            ],
            [
                'id' => '7',
                'idmarkah'=>'8',
                'bdnuni'=>'3',
                'jwtuni'=>'7',
            ],
            [
                'id' => '8',
                'idmarkah'=>'7',
                'bdnuni'=>'3',
                'jwtuni'=>'8',
            ],
            [
                'id' => '9',
                'idmarkah'=>'6',
                'bdnuni'=>'3',
                'jwtuni'=>'9',
            ],
            [
                'id' => '10',
                'idmarkah'=>'5',
                'bdnuni'=>'3',
                'jwtuni'=>'10',
            ],
            [
                'id' => '11',
                'idmarkah'=>'4',
                'bdnuni'=>'3',
                'jwtuni'=>'11',
            ],
            [
                'id' => '12',
                'idmarkah'=>'4',
                'bdnuni'=>'3',
                'jwtuni'=>'12',
            ],
            [
                'id' => '13',
                'idmarkah'=>'3',
                'bdnuni'=>'3',
                'jwtuni'=>'13',
            ],  
            //skip kkadet biasa & junior PALAPES
            [
                'id' => '14',
                'idmarkah'=>'8',
                'bdnuni'=>'2',
                'jwtuni'=>'16',
            ],   
            [
                'id' => '15',
                'idmarkah'=>'7',
                'bdnuni'=>'2',
                'jwtuni'=>'17',
            ], 
            [
                'id' => '16',
                'idmarkah'=>'6',
                'bdnuni'=>'2',
                'jwtuni'=>'18',
            ], 
            [
                'id' => '17',
                'idmarkah'=>'5',
                'bdnuni'=>'2',
                'jwtuni'=>'19',
            ], 
            //skip koperal,lans kop,biasa APM
            [
                'id' => '18',
                'idmarkah'=>'8',
                'bdnuni'=>'4',
                'jwtuni'=>'23',
            ], 
            [
                'id' => '19',
                'idmarkah'=>'6',
                'bdnuni'=>'4',
                'jwtuni'=>'24',
            ], 
            [
                'id' => '20',
                'idmarkah'=>'5',
                'bdnuni'=>'4',
                'jwtuni'=>'25',
            ], 
            [
                'id' => '21',
                'idmarkah'=>'4',
                'bdnuni'=>'4',
                'jwtuni'=>'26',
            ], 
            
        ];
            
            foreach($user as $key => $value)
            {
                TblUniform::create($value);                
            };    
    }
}
