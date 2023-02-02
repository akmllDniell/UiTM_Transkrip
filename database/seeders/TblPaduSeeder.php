<?php

namespace Database\Seeders;

use App\Models\TblPadu;
use Illuminate\Database\Seeder;

class TblPaduSeeder extends Seeder
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
                'padu'=>'PADU',
            ],
           
            
        ];
            
            foreach($user as $key => $value)
            {
                TblPadu::create($value);                
            };

    }
}
