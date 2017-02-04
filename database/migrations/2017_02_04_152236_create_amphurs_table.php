<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmphursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amphurs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('geo_id')->nullable();
            $table->integer('province_id')->nullable();
            $table->string('amphur_code')->nullable();
            $table->string('amphur_name')->nullable();
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
        Schema::dropIfExists('amphurs');
    }
}
