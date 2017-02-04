<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->nullable();
            $table->string('agent_group_name')->nullable();
            $table->string('agent_group_desciption')->nullable();
            $table->string('type')->nullable();
            $table->string('commission')->nullable();
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
        Schema::dropIfExists('agent_groups');
    }
}
