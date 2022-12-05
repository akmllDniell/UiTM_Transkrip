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
        $this->call(AnugerahTableSeeder::class);
        $this->call(ApmTableSeeder::class);
        $this->call(JawatanTableSeeder::class);
        $this->call(JawatanpalapesTableSeeder::class);
        $this->call(JawatanpbsmmTableSeeder::class);
        $this->call(JeniskebudayaanTableSeeder::class);
        $this->call(JenispenerbitanTableSeeder::class);
        $this->call(JenispersatuanTableSeeder::class);
        $this->call(JenisprogramTableSeeder::class);
        $this->call(JenissukanTableSeeder::class);
        $this->call(JenisuniformTableSeeder::class);
        $this->call(KebudayaanTableSeeder::class);
        $this->call(MarkahTableSeeder::class);
        $this->call(ModulTableSeeder::class);
        $this->call(PalapesTableSeeder::class);
        $this->call(PbsmmTableSeeder::class);
        $this->call(PenerbitanTableSeeder::class);
        $this->call(PersatuanTableSeeder::class);
        $this->call(ProgramTableSeeder::class);
        $this->call(SukanTableSeeder::class);
        $this->call(TahapTableSeeder::class);
    }
}
