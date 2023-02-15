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
                'name' => 'Ismi Aiman',
                'username'=>'2020493849',
                'password'=>bcrypt('246810'),
                'role' => '2',
                'email' => 'ismiaiman@gmail.com'

            ],
            [
                'name' => 'Fared Syahmi',
                'username'=>'20220',
                'password'=>bcrypt('112233'),
                'role' => '2',
                'email' => 'fared@gmail.com'

            ],
            [                
                'name' => 'Arif Asyraf',
                'username'=>'202029328',
                'password'=>bcrypt('222333'),
                'role' => '2',
                'email' => 'arif@gmail.com'

            ],           
            ];

            foreach($user as $key => $value)
            {
                User::create($value);                
            }
    }
}
