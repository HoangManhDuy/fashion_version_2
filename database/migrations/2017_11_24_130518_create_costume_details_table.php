<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostumeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costume_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('costume_id')->unsigned();
            $table->foreign('costume_id')->references('id')->on('costumes');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('favorite_id')->unsigned();
            $table->foreign('favorite_id')->references('id')->on('favorite_products');
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
        Schema::dropIfExists('costume_details');
    }
}
