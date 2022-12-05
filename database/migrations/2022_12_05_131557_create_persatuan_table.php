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
        Schema::create('persatuan', function (Blueprint $table) {
            $table->integer('persatuanid', true);
            $table->string('persatuan', 50)->nullable();
            $table->integer('tahapid')->nullable();
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
        Schema::dropIfExists('persatuan');
    }
};
