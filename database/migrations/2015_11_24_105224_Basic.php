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
            $table->increments('id');                   //流水號
            $table->string('name',50);                  //姓名
            $table->string('sex');                      //性別
            $table->string('phone',50);                 //室內電話
            $table->string('cell_phone',50);            //手機
            $table->string('skype',50);
            $table->string('email',50)->unique();       //信箱
            $table->string('sec_email',50);             //備用信箱
            $table->date('birthday')->change();         //生日
            $table->string('address',100);              //地址
            $table->boolean('finish')->default(false);  //是否完成basic
            $table->boolean('fee')->default(false);     //是否繳費(預設沒繳費)
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
