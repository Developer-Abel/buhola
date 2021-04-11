<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConceptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concepts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('conceptId');
            $table->unsignedBigInteger('QuotationId');
            $table->foreign('QuotationId')->references('IdQuotation')->on('quotations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('amount');
            $table->float('price');
            $table->float('subtotal');
            $table->boolean('deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('concepts');
    }
}
