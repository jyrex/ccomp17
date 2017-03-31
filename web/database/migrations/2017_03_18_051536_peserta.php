<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Peserta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta', function (Blueprint $table) {
            $table->string('NIM')->unique();
            $table->text('nama_lengkap');
            $table->integer('id_prodi')->unsigned();
            $table->foreign('id_prodi')->references('id_prodi')->on('program_studi')->onUpdate('cascade')->onDelete('NO ACTION');
            $table->string('link_ktm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('peserta');
    }
}
