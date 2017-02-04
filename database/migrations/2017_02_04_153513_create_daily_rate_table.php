<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyRateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_rates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('daily_system_id')->nullable();
            $table->integer('daily_system_type')->nullable();
            $table->string('daily_rate')->nullable();
            $table->string('daily_adult_rate')->nullable();
            $table->string('daily_child_rate')->nullable();
            $table->string('daily_promotion_id')->nullable();
            $table->date('date')->nullable();
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
        Schema::dropIfExists('daily_rates');
    }
}
