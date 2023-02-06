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
        Schema::create('waste_details', function (Blueprint $table) {
            $table->integer('waste_id')->primary();
            $table->integer('request_id');
            $table->integer('quantity');
            $table->date('receive_date');
            $table->text('receive_from');
            $table->foreign('request_id')->references('request_id')->on('request_to_collect');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('waste_details');
    }
};
