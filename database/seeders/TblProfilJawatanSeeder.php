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
                'jawatan'=>'AHLI AKTIF',
                'singkatan'=>'AHLI AKTIF',
            ],
            [
                'id'=>'2',
                'jawatan'=>'EXCO',
                'singkatan'=>'EXCO',
            ],
            [
                'id'=>'3',
                'jawatan'=>'BENDAHARI',
                'singkatan'=>'BEND.',
            ],
            [
                'id'=>'4',
                'jawatan'=>'SETIAUSAHA',
                'singkatan'=>'S/USAHA',
            ],
            [
                'id'=>'5',
                'jawatan'=>'NAIK YANG DIPERTUA',
                'singkatan'=>'NYDP',
            ],
            [
                'id'=>'6',
                'jawatan'=>'YANG DI PERTUA',
                'singkatan'=>'YDP',          
            ],
            [
                'id'=>'7',
                'jawatan'=>'KETUA EDITOR',
                'singkatan'=>'K. EDIT',          
            ],
            [
                'id'=>'8',
                'jawatan'=>'EDITOR',
                'singkatan'=>'EDIT',          
            ],
            [
                'id'=>'9',
                'jawatan'=>'SETIAUSAHA',
                'singkatan'=>'SU',          
            ],
            [
                'id'=>'10',
                'jawatan'=>'PENULIS ARTIKEL',
                'singkatan'=>'P. ARTIKEL',          
            ],
            [
                'id'=>'11',
                'jawatan'=>'AHLI JAWATANKUASA',
                'singkatan'=>'AJK',          
            ],
            ];


            foreach($data as $key => $value)
            {
                TblProfilJawatan::create($value);
            }
            
    }
}
