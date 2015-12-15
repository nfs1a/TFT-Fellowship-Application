<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitDB extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progress',function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('basic');
            $table->integer('work');
            $table->integer('teach');
            $table->integer('essay');
            $table->integer('appendix');
            $table->integer('allpay');
        });

        Schema::create('basic',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');         //姓名
            $table->string('idNumber');     //身分證字號
            $table->integer('sex');         //性別
            $table->dateTime('birthday');   //生日
            $table->string('phone');        //電話
            $table->string('cellPhone');    //手機
            $table->string('skype');        //skype
            $table->string('email')->unique();        //電子郵件
            $table->string('secEmail');     //備用電子郵件
            $table->string('address');      //地址
            $table->integer('status');      //目前就學工作狀態
        });

        Schema::create('eduHistory',function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('basicID');
            $table->string('school');
            $table->integer('degreeLevel');
            $table->integer('majorMainClass');
            $table->integer('majorSubClass');
            $table->integer('eduMainArea');
            $table->integer('eduSubArea');
            $table->integer('eduPeriodStartYear');
            $table->integer('eduPeriodStartMon');
            $table->integer('eduPeriodEndYear');
            $table->integer('eduPeriodEndMon');
            $table->integer('eduStatus');
        });

        Schema::create('work',function(Blueprint $table)
        {
            $table->increments('id');
        });

        Schema::create('expertise',function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('workExperience_id');
            $table->string('expertise');
            $table->text('introduction');
        });

        Schema::create('workExpertise',function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('workExperience_id');
            $table->string('organization');
            $table->string('position');
            $table->dateTime('startDate');
            $table->dateTime('endDate');
            $table->text('description');
        });

        Schema::create('teach',function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('preSchool');
            $table->integer('elementary');
            $table->integer('secondary');
            $table->integer('special');
        });

        Schema::create('teachExperience',function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('teachExperience_id');
            $table->string('organization');
            $table->string('position');
            $table->dateTime('startDate');
            $table->dateTime('endDate');
            $table->text('description');
        });

        Schema::create('essay',function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('motivation');
            $table->text('experience');
            $table->text('impressive');
        });

        Schema::create('appendix',function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('resume');
            $table->string('idCard');
            $table->string('qualification');
            $table->string('soldierProof');
            $table->string('transcript');
            $table->string('teacherCertification');
            $table->string('languageCertification');
            $table->string('otherCertification');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
