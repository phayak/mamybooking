<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsiteSetingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_setings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('currency_id')->nullable();
            $table->integer('merchant_id')->nullable();
            $table->integer('terminal_id')->nullable();
            $table->string('type_deposit')->nullable();
            $table->string('deposit')->nullable();
            $table->string('modify_lead')->nullable();
            $table->string('mail_receiver')->nullable();
            $table->string('mail_from')->nullable();
            $table->string('mail_header')->nullable();
            $table->string('respurl')->nullable();
            $table->string('secretkey')->nullable();
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
        Schema::dropIfExists('website_setings');
    }
}
