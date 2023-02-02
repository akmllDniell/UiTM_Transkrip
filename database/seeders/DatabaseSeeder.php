<?php

namespace Database\Seeders;

use App\Models\TblSijil;
use App\Models\TblSukan;
use App\Models\TblSukanDt;
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

        //PARAMETER
        $this->call(UserData::class);
        $this->call(TblProfilTahapPencapaianSeeder::class);
        $this->call(TblProfilMarkahSeeder::class);
        $this->call(TblProfilJawatanSeeder::class);
        $this->call(TblProfilTahapHepSeeder::class);
        $this->call(TblProfilBadanBeruniformSeeder::class);
        $this->call(TblProfilJawatanUniformSeeder::class);

        //AKTIVITI
        $this->call(TblSukanSeeder::class);
        $this->call(TblSukanDtSeeder::class);

        $this->call(TblKelabSeeder::class);
        $this->call(TblKelabDTSeeder::class);

        $this->call(TblKebudayaanSeeder::class);
        $this->call(TblKebudayaanDTSeeder::class);

        $this->call(TblSijilSeeder::class);
        $this->call(TblSijilDtSeeder::class);

        $this->call(TblPenerbitanSeeder::class);
        $this->call(TblPenerbitanDtSeeder::class);

        $this->call(TblPaduSeeder::class);
        $this->call(TblPaduDtSeeder::class);

        $this->call(TblProgramTertentuSeeder::class);
        $this->call(TblProgramTertentuDtSeeder::class);
    }
}
