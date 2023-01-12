<?php

namespace Database\Seeders;

use App\Models\TblProfilMarkah;
use Illuminate\Database\Seeder;

class TblProfilMarkahSeeder extends Seeder
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
                'markah'=>'2.0',
            ],
            [
                'id' => '2',
                'markah'=>'2.33',
            ],
            [
                'id' => '3',
                'markah'=>'2.67',
            ],
            [
                'id' => '4',
                'markah'=>'3.0',
            ],
            [
                'id' => '5',
                'markah'=>'3.33',
            ],
            [
                'id' => '6',
                'markah'=>'3.67',
            ],
            [
                'id' => '7',
                'markah'=>'4.0',
            ],
        ];
            
            foreach($user as $key => $value)
            {
                TblProfilMarkah::create($value);                
            };
    }
}
