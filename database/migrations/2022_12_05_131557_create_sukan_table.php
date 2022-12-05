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
        Schema::create('sukan', function (Blueprint $table) {
            $table->integer('sukanid', true);
            $table->integer('tahapid')->nullable()->index('FK_sukan_tahap');
            $table->integer('markahid')->nullable()->index('FK_sukan_markah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sukan');
    }
};
