<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *- PK UserId

     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('UserId');
            $table->string('Name');
            $table->string('LastName');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('RFC');
            $table->string('Logo');
            $table->string('Direction');
            $table->string('City');
            $table->string('State');
            $table->string('Country');
            $table->string('Cel');
            $table->string('Phone');
            $table->dateTime('CreateDate');
            $table->boolean('Deleted');
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
