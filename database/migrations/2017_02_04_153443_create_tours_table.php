<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transport_type_id')->nullable();
            $table->string('transport_start')->nullable();
            $table->string('transport_end')->nullable();
            $table->string('duration')->nullable();
            $table->string('view')->nullable();
            $table->string('company')->nullable();
            $table->string('email')->nullable();
            $table->string('telephone')->nullable();
            $table->string('fax')->nullable();
            $table->string('smoking_status')->nullable();
            $table->integer('active')->nullable();
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
        Schema::dropIfExists('tours');
    }
}
