<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarGenerationLangTable extends Migration
{

    public function up()
    {
        Schema::create('car_generation_langs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_generation_id')->nullable();
            $table->integer('language_id')->nullable();
            $table->string('name')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('car_generation_langs');
    }
}
