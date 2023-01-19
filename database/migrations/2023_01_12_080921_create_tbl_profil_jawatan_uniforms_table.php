<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProfilJawatanUniformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_profil_jawatan_uniforms', function (Blueprint $table) {
            $table->id();
            $table->string('jawatanuniform',100);
            $table->unsignedBigInteger('idBadanUniform');  
            $table->foreign('idBadanUniform')->references('id')->on('tbl_profil_badan_beruniforms')->onDelete('cascade');            
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
        Schema::dropIfExists('tbl_profil_jawatan_uniforms');
    }
}
