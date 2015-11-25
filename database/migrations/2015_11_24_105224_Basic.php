<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Basic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basics', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name',50);
            $table->integer('sex')->unsigned();
            $table->string('phone',12);
            $table->string('cell_phone',16);
            $table->string('skype',30);
            $table->string('email',500)->unique();
            $table->string('sec_email',500)->unique();
            $table->date('birthday')->change();
            $table->string('address',100);
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
        Schema::drop('basics');
    }
}
