<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *- PK TemplateId
     * @return void
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('TemplateId');
            $table->string('NumTemplate');
            $table->string('Name');
            $table->string('Color1');
            $table->string('Color2');
            $table->string('Color3');
            $table->string('Logo');
            $table->string('TypeTemplate');
            $table->boolean('delete');
            $table->dateTime('CreateDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('templates');
    }
}
