<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConditionsTable extends Migration
{
    /**
     * 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conditions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('conditionId');
            $table->unsignedBigInteger('QuotationId');
            $table->foreign('QuotationId')->references('IdQuotation')->on('quotations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('Condition');
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
        Schema::dropIfExists('conditions');
    }
}
