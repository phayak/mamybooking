<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_agency_id')->nullable();
            $table->integer('car_generation_id')->nullable();
            $table->integer('car_category_id')->nullable();
            $table->string('seat')->nullable();
            $table->string('door')->nullable();
            $table->string('bag_loadable')->nullable();
            $table->string('air_condition')->nullable();
            $table->string('automatic')->nullable();
            $table->string('net_rate')->nullable();
            $table->string('credit_card_fees')->nullable();
            $table->string('return_slowly')->nullable();
            $table->string('cancellation_before')->nullable();
            $table->integer('active')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
