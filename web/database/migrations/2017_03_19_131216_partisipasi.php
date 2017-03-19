<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Partisipasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partisipasi', function (Blueprint $table) {
            $table->string('NIM');
            $table->foreign('NIM')->references('NIM')->on('peserta')->onUpdate('cascade')->onDelete('NO ACTION');
            $table->integer('id_tim')->unsigned();
            $table->foreign('id_tim')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
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
        Schema::drop('partisipasi');
    }
}
