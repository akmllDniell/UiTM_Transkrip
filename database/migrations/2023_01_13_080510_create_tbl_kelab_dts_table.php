<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblKelabDTSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_kelab_dts', function (Blueprint $table) {
            $table->id();

            
            $table->unsignedBigInteger('idmarkah');
            $table->unsignedBigInteger('idTP');  
            $table->unsignedBigInteger('jawatanid'); 
            
            $table->foreign('idmarkah')->references('id')->on('tbl_profil_markahs')->onDelete('cascade');
            $table->foreign('idTP')->references('id')->on('tbl_profil_tahap_pencapaians')->onDelete('cascade');
            $table->foreign('jawatanid')->references('id')->on('tbl_profil_jawatans')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_kelab_dts');
    }
}
