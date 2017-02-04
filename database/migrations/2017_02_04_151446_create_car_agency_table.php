<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarAgencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_agencies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->nullable();
            $table->string('company_name')->nullable();
            $table->string('contact_fname')->nullable();
            $table->string('contact_lname')->nullable();
            $table->string('contact_telephone')->nullable();
            $table->string('contact_fax')->nullable();
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
        Schema::dropIfExists('car_agencies');
    }
}
