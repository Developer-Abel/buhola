<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotationsTable extends Migration
{
    /**
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('IdQuotation');
            $table->unsignedBigInteger('ClientId');
            $table->foreign('ClientId')->references('ClientId')->on('clients')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('TemplateId');
            $table->foreign('TemplateId')->references('TemplateId')->on('templates')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('UserId');
                $table->foreign('UserId')->references('UserId')->on('users')
                    ->onUpdate('cascade')->onDelete('cascade');
            $table->string('NoQuotation');
            $table->string('Name');
            $table->dateTime('CreateDate');
            $table->dateTime('ExpirationDate');
            $table->float('Subtotal');
            $table->float('Discount');
            $table->float('IVA');
            $table->float('Total');
            $table->string('status');
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
        Schema::dropIfExists('quotations');
    }
}
