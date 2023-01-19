<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserData::class);
        $this->call(TblProfilTahapPencapaianSeeder::class);
        $this->call(TblProfilMarkahSeeder::class);
        $this->call(TblProfilJawatanSeeder::class);
        $this->call(TblProfilBadanBeruniformSeeder::class);
        $this->call(TblProfilJawatanUniformSeeder::class);
    }
}
