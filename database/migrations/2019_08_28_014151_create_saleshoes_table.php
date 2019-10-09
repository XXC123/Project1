<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleshoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saleshoes', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('email_id')->unsigned();
            //$table->foreign('email_id')->references('id')->on('users');
            $table->bigInteger('customer_id')->unsigned()->index();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->string('brandname');
            $table->string('color');
            $table->integer('size');
            $table->integer('price');
            $table->integer('year');
            $table->string('series');
            $table->string('img');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saleshoes');
    }
}
