<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUniformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_uniforms', function (Blueprint $table) {
            $table->id();   
            $table->unsignedBigInteger('idmarkah');             
            // $table->foreign(['idmarkah'], 'FK_sukan_markah')->references(['id'])->on('tbl_profil_markahs')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            // $table->foreign(['idTP'], 'FK_sukan_tahap')->references(['id'])->on('tbl_profil_tahap_pencapaians')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('idmarkah')->references('id')->on('tbl_profil_markahs')->onDelete('cascade');            
            $table->unsignedBigInteger('bdnuni');             
            $table->foreign('bdnuni')->references('id')->on('tbl_profil_badan_beruniforms')->onDelete('cascade');
            $table->unsignedBigInteger('jwtuni');             
            $table->foreign('jwtuni')->references('id')->on('tbl_profil_jawatan_uniforms')->onDelete('cascade');
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
        Schema::dropIfExists('tbl_uniforms');
    }
}
