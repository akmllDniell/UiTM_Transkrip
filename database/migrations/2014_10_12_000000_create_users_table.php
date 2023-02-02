<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username', 50)->unique();
            $table->string('password');
            $table->string('course')->nullable();
            $table->string('faculty')->nullable();
            $table->string('address')->nullable();
            $table->integer('phone')->nullable();
            $table->date('BOD')->nullable();
            $table->string('email')->unique();     
            $table->Integer('role');
            $table->timestamp('email_verified_at')->nullable();                       
            $table->rememberToken();
            $table->timestamps();
            $table->string('passwordbackup')->nullable();
            $table->Integer('countreq')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
