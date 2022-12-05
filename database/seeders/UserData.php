<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserData extends Seeder
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
                'name' => 'Administrator',
                'username'=>'admin',
                'password'=>bcrypt('123456'),
                'level' => '1',
                'email' => 'admin@gmail.com'

            ],
            [
                'name' => 'penjual',
                'username'=>'seller',
                'password'=>bcrypt('246810'),
                'level' => '2',
                'email' => 'seller@gmail.com'

            ],
            [
                'name' => 'Pembeli',
                'username'=>'user',
                'password'=>bcrypt('112233'),
                'level' => '3',
                'email' => 'user@gmail.com'

            ],
            ];

            foreach($user as $key => $value)
            {
                User::create($value);                
            }
    }
}
