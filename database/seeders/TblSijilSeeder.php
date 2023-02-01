<?php

namespace Database\Seeders;

use App\Models\TblSijil;
use Illuminate\Database\Seeder;

class TblSijilSeeder extends Seeder
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
                'sijil'=>'ANUGERAH KEHADIRAN PENUH',
            ],
            [
                'id' => '2',
                'sijil'=>'SIJIL KECEMRLANGAN AKEDEMIK',
            ],
            [
                'id' => '3',
                'sijil'=>'PINGAT PENGLIBATAN DALAM SUKAN',
            ],
            [
                'id' => '4',
                'sijil'=>'ANUGERAH KEPIMPINAN TERBAIK',
            ],
            
        ];
            
            foreach($user as $key => $value)
            {
                TblSijil::create($value);                
            };

    }
}
