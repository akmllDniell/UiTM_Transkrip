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
        Schema::table('sukan', function (Blueprint $table) {
            $table->foreign(['markahid'], 'FK_sukan_markah')->references(['markahid'])->on('markah')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['tahapid'], 'FK_sukan_tahap')->references(['tahapid'])->on('tahap')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sukan', function (Blueprint $table) {
            $table->dropForeign('FK_sukan_markah');
            $table->dropForeign('FK_sukan_tahap');
        });
    }
};
