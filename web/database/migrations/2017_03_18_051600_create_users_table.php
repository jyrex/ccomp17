<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('tim');
            $table->string('email')->unique();
            $table->string('id_ketua')->nullable();
            $table->foreign('id_ketua')->references('NIM')->on('peserta')->onUpdate('cascade')->onDelete('set null');
            $table->enum('lomba', ['CP', 'Data Mining', 'Software Dev', 'UI/UX', 'Embedded System', 'Line Follower']);
            $table->string('hp');
            $table->enum('verifikasi', ['terverifikasi', 'belum'])->default('belum');
            $table->string('submission');
            $table->enum('role', ['admin', 'tim'])->default('tim');
            $table->string('password');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
