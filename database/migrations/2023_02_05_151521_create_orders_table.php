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
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('Order_id')->primary();
            $table->integer('user_id');
            $table->integer('product_id');
            $table->string('product_name');
            $table->integer('quantity');
            $table->integer('total_price');
            $table->foreign('product_id')->references('recycling_product_id')->on('recycling_product');
            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
