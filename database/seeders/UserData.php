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
                'role' => '1', //1 for admin 2 for student
                'email' => 'admin@gmail.com'

            ],
            [
                'name' => 'penjual',
                'username'=>'seller',
                'password'=>bcrypt('246810'),
                'role' => '2',
                'email' => 'seller@gmail.com'

            ],
            [
                'name' => 'Pembeli',
                'username'=>'user',
                'password'=>bcrypt('112233'),
                'role' => '2',
                'email' => 'user@gmail.com'

            ],
            [                
                'name' => 'Akmal Daniel',
                'username'=>'2020478518',
                'password'=>bcrypt('222333'),
                'role' => '2',
                'email' => 'daniel@gmail.com'

            ],           
            ];

            foreach($user as $key => $value)
            {
                User::create($value);                
            }
    }
}
