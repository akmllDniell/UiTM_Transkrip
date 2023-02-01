<?php

namespace Database\Seeders;

use App\Models\TblSukan;
use Illuminate\Database\Seeder;

class TblSukanSeeder extends Seeder
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
                'jenissukan'=>'BADMINTON',
            ],
            [
                'id' => '2',
                'jenissukan'=>'FRISBEE',
            ],
            [
                'id' => '3',
                'jenissukan'=>'BOLA TAMPAR',
            ],
            [
                'id' => '4',
                'jenissukan'=>'TENNIS',
            ],
            [
                'id' => '5',
                'jenissukan'=>'SEPAK TAKRAW',
            ],
            
        ];
            
            foreach($user as $key => $value)
            {
                TblSukan::create($value);                
            };
    }
}
