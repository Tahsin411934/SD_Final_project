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
        Schema::create('recyclable_products', function (Blueprint $table) {
            $table->integer('recyclable_products_id')->primary();
            $table->string('recyclable_product_name');
            $table->integer('recyclable_from');
            $table->integer('quantity');
            $table->foreign('recyclable_from')->references('waste_id')->on('waste_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recyclable_products');
    }
};
