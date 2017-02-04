<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('allocate_id')->nullable();
            $table->integer('currency_id')->nullable();
            $table->integer('agent_id')->nullable();
            $table->integer('individual_id')->nullable();
            $table->integer('customer_id')->nullable();
            $table->string('transaction_code')->nullable();
            $table->string('check_in')->nullable();
            $table->string('check_out')->nullable();
            $table->string('night')->nullable();
            $table->string('grand_total')->nullable();
            $table->string('deposite')->nullable();
            $table->string('balance')->nullable();
            $table->string('status_booking')->nullable();
            $table->string('status_payment')->nullable();
            $table->string('credit_digits')->nullable();
            $table->string('type_payment')->nullable();
            $table->string('arrival_time')->nullable();
            $table->string('flight_no')->nullable();
            $table->string('special_request')->nullable();
            $table->string('comment')->nullable();
            $table->date('date_cancle')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
