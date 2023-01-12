<?php

namespace Database\Seeders;

use App\Models\TblProfilJawatan;
use Illuminate\Database\Seeder;
use KitLoong\MigrationsGenerator\Enum\Migrations\Method\Foreign;
use PhpParser\Node\Stmt\Foreach_;

class TblProfilJawatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id'=>'1',
                'jawatan'=>'Ahli Aktif',
                'singkatan'=>'Ahli Aktif',
            ],
            [
                'id'=>'2',
                'jawatan'=>'Exco',
                'singkatan'=>'Exco',
            ],
            [
                'id'=>'3',
                'jawatan'=>'Bendahari',
                'singkatan'=>'Bend.',
            ],
            [
                'id'=>'4',
                'jawatan'=>'Setiausaha',
                'singkatan'=>'S/Usaha',
            ],
            [
                'id'=>'5',
                'jawatan'=>'Naik Yang Dipertua',
                'singkatan'=>'NYDP',
            ],
            [
                'id'=>'6',
                'jawatan'=>'Yang Di Pertua',
                'singkatan'=>'YDP',          
            ],
            ];


            foreach($data as $key => $value)
            {
                TblProfilJawatan::create($value);
            }
            
    }
}
