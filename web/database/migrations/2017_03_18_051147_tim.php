<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tim extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tim', function (Blueprint $table) {
            $table->integer('id_tim')->unsigned();
            $table->foreign('id_tim')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama_tim');
            $table->enum('lomba_diikuti', ['CP', 'Data Mining', 'Software Dev', 'UI/UX', 'Embedded System', 'Line Follow']);
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
        Schema::drop('tim');
    }
}
