<?php

namespace Database\Seeders;

use App\Models\TblProgramTertentu;
use Illuminate\Database\Seeder;

class TblProgramTertentuSeeder extends Seeder
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
                'programtertentu'=>'HARI KERJAYA',
            ],
            [
                'id' => '2',
                'programtertentu'=>'PESTA KONVO',
            ],
            [
                'id' => '3',
                'programtertentu'=>'BENGKEL',
            ],
            [
                'id' => '4',
                'programtertentu'=>'DEBAT',
            ],
            
        ];
            
            foreach($user as $key => $value)
            {
                TblProgramTertentu::create($value);                
            };
    }
}
