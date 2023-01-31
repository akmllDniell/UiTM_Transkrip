<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTrysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_trys', function (Blueprint $table) 
        {
            $table->id();

            //student
            $table->unsignedBigInteger('userid');             
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');  
            //end student
            
            //1.sukan
            $table->unsignedBigInteger('idsukandt');             
            $table->foreign('idsukandt')->references('id')->on('tbl_sukan_dts')->onDelete('cascade');            
            
            $table->unsignedBigInteger('idsukan');             
            $table->foreign('idsukan')->references('id')->on('tbl_sukans')->onDelete('cascade');
            //1.sukan

            //2.persatuan
            $table->unsignedBigInteger('idkelabdt');             
            $table->foreign('idkelabdt')->references('id')->on('tbl_kelab_dts')->onDelete('cascade');            
            
            $table->unsignedBigInteger('idkelab');             
            $table->foreign('idkelab')->references('id')->on('tbl_kelabs')->onDelete('cascade');
            //2.persatuan

            //3.kebudayaan
            $table->unsignedBigInteger('idkebudayaandt');             
            $table->foreign('idkebudayaandt')->references('id')->on('tbl_kebudayaan_dts')->onDelete('cascade');            
            
            $table->unsignedBigInteger('idkebudayaan');             
            $table->foreign('idkebudayaan')->references('id')->on('tbl_kebudayaans')->onDelete('cascade');
            //3.kebudayaan

            //4.beruniform
            $table->unsignedBigInteger('idberuniform');             
            $table->foreign('idberuniform')->references('id')->on('tbl_uniforms')->onDelete('cascade');            
            //4.beruniform

            //5.sijil
            $table->unsignedBigInteger('idsijildt');             
            $table->foreign('idsijildt')->references('id')->on('tbl_sijil_dts')->onDelete('cascade');            
             
            $table->unsignedBigInteger('idsijil');             
            $table->foreign('idsijil')->references('id')->on('tbl_sijils')->onDelete('cascade');
            //5.sijil

            //6.penerbitan
            $table->unsignedBigInteger('idpenerbitandt');             
            $table->foreign('idpenerbitandt')->references('id')->on('tbl_penerbitan_dts')->onDelete('cascade');            
             
            $table->unsignedBigInteger('idpenerbitan');             
            $table->foreign('idpenerbitan')->references('id')->on('tbl_penerbitans')->onDelete('cascade');
            //6.penerbitan

            //7.padu
            $table->unsignedBigInteger('idpadudt');             
            $table->foreign('idpadudt')->references('id')->on('tbl_padu_dts')->onDelete('cascade');            
             
            $table->unsignedBigInteger('idpadu');             
            $table->foreign('idpadu')->references('id')->on('tbl_padus')->onDelete('cascade');
            //7.padu

            //8.program tertentu
            $table->unsignedBigInteger('idprogramtertentudt');             
            $table->foreign('idprogramtertentudt')->references('id')->on('tbl_program_tertentu_dts')->onDelete('cascade');            
             
            $table->unsignedBigInteger('idprogramtertentu');             
            $table->foreign('idprogramtertentu')->references('id')->on('tbl_program_tertentus')->onDelete('cascade');
            //8.program tertentu

            $table->timestamps();
        
            $table->string('status')->default("ongoing");
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_trys');
    }
}