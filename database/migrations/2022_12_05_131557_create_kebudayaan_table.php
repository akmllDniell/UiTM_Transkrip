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
        Schema::create('kebudayaan', function (Blueprint $table) {
            $table->integer('kebudayaanid', true);
            $table->integer('tahapid')->nullable()->index('FK_kebudayaan_tahap');
            $table->integer('markahid')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kebudayaan');
    }
};
