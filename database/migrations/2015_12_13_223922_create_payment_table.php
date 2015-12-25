<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_table', function (Blueprint $table) {
            $table->string('email');
            $table->string('user_id');
            $table->string('trade_no')->unique;
            $table->string('result')->default(0);
            $table->string('payment_type');
            $table->string('payment_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('payment_table');
    }
}
