<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_langs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('language_id')->nullable();
            $table->integer('tour_id')->nullable();
            $table->string('tour_name')->nullable();
            $table->string('tour_title')->nullable();
            $table->text('tour_description')->nullable();
            $table->string('highlight')->nullable();
            $table->string('activities')->nullable();
            $table->string('price_include_detail')->nullable();
            $table->string('what_to_bring')->nullable();
            $table->string('remark')->nullable();
            $table->string('payment')->nullable();
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
        Schema::dropIfExists('tour_langs');
    }
}
