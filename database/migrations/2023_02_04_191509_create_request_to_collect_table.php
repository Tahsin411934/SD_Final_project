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
        Schema::create('request_to_collect', function (Blueprint $table) {
            $table->integer('request_id')->primary();
            $table->integer('user_id');
            $table->string('name');
            $table->integer('city');
            $table->string('locality');
            $table->text('road_no');
            $table->string('postal_code');
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
        Schema::dropIfExists('request_to_collect');
    }
};
