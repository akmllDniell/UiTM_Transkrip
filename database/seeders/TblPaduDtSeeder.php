<?php

namespace Database\Seeders;

use App\Models\TblPadu;
use App\Models\TblPaduDt;
use Illuminate\Database\Seeder;

class TblPaduDtSeeder extends Seeder
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
                'idTH'=>'1',
                'idmarkah'=>'1',
            ],
            [
                'id' => '2',
                'idTH'=>'2',
                'idmarkah'=>'2',
            ],
            [
                'id' => '3',
                'idTH'=>'3',
                'idmarkah'=>'3',
            ],
            [
                'id' => '4',
                'idTH'=>'4',
                'idmarkah'=>'4',
            ],
            [
                'id' => '5',
                'idTH'=>'5',
                'idmarkah'=>'5',
            ],
        ];

        foreach($user as $key => $value)
        {
            TblPaduDt::create($value);                
        };
    }
}
