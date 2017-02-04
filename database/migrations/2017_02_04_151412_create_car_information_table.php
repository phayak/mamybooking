<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_id')->nullable();
            $table->string('conditions_of_deposit')->nullable();
            $table->string('term_of_age')->nullable();
            $table->string('conditions_car_rental')->nullable();
            $table->string('driving_across_country')->nullable();
            $table->string('kilometer')->nullable();
            $table->string('oil_conditions')->nullable();
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
        Schema::dropIfExists('car_informations');
    }
}
