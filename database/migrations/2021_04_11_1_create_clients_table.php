<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**

     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('ClientId');
            $table->string('Name');
            $table->string('LastName');
            $table->string('email')->unique();
            $table->string('RFC');
            $table->string('Direction');
            $table->string('City');
            $table->string('State');
            $table->string('Country');
            $table->string('Cel');
            $table->string('Phone');
            $table->dateTime('createDate');
            $table->boolean('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
