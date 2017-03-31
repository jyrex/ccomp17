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
            $table->enum('lomba', ['CP', 'Data Mining', 'Software Dev', 'UI/UX', 'Embedded System', 'Line Follower']);
            $table->string('hp');
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
