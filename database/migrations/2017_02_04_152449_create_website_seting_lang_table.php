<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsiteSetingLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_seting_langs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('language_id')->nullable();
            $table->string('website_name')->nullable();
            $table->string('policy')->nullable();
            $table->string('cancellation_policy')->nullable();
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
        Schema::dropIfExists('website_seting_langs');
    }
}
