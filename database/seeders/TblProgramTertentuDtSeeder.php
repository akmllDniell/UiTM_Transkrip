<?php

namespace Database\Seeders;

use App\Models\TblProgramTertentuDt;
use Illuminate\Database\Seeder;

class TblProgramTertentuDtSeeder extends Seeder
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
                'idmarkah'=>'5',
            ],
            [
                'id' => '2',
                'idTP'=>'2',
                'idmarkah'=>'6',
            ],
            [
                'id' => '3',
                'idTP'=>'3',
                'idmarkah'=>'7',
            ],
            [
                'id' => '4',
                'idTP'=>'4',
                'idmarkah'=>'8',
            ],

        ];
            
            foreach($user as $key => $value)
            {
                TblProgramTertentuDt::create($value);                
            };
    }
}
