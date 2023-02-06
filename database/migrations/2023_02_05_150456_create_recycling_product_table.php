<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recycling_product', function (Blueprint $table) {
            $table->integer('recycling_product_id')->primary();
            $table->string('recycling_product_name');
            $table->integer('recycling_from');
            $table->integer('quantity');
            $table->integer('base_price');
            $table->foreign('recycling_from')->references('recyclable_products_id')->on('recyclable_products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recycling_product');
    }
};
