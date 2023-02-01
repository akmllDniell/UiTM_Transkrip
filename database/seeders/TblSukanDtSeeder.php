<?php

namespace Database\Seeders;

use App\Models\TblSukanDt;
use Illuminate\Database\Seeder;

class TblSukanDtSeeder extends Seeder
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
                'idmarkah'=>'2',
            ],
            [
                'id' => '2',
                'idTP'=>'2',
                'idmarkah'=>'3',
            ],
            [
                'id' => '3',
                'idTP'=>'3',
                'idmarkah'=>'4',
            ],
            [
                'id' => '4',
                'idTP'=>'4',
                'idmarkah'=>'5',
            ],
            [
                'id' => '5',
                'idTP'=>'5',
                'idmarkah'=>'6',
            ],
            
        ];
            
            foreach($user as $key => $value)
            {
                TblSukanDt::create($value);                
            };
    }
}
