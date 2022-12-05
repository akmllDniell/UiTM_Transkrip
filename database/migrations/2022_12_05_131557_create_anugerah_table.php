<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anugerah', function (Blueprint $table) {
            $table->integer('anugerahid')->primary();
            $table->integer('anugerah')->nullable();
            $table->integer('markahid')->nullable();
            $table->integer('jawatanid')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anugerah');
    }
};
