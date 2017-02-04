<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->string('customer_gender')->nullable();
            $table->string('customer_fname')->nullable();
            $table->string('customer_lname')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('customer_telephone')->nullable();
            $table->string('customer_address')->nullable();
            $table->string('customer_detail')->nullable();
            $table->string('fb_code')->nullable();
            $table->string('gp_code')->nullable();
            $table->string('password')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
