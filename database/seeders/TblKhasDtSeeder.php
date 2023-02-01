<?php

namespace Database\Seeders;

use App\Models\TblKelabDt;
use Illuminate\Database\Seeder;

class TblKhasDtSeeder extends Seeder
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
            
        ];
            
            foreach($user as $key => $value)
            {
                TblKelabDt::create($value);                
            };
    }
}
