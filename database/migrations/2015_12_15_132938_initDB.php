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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('progresses',function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('basic')->default(0);
            $table->integer('work')->default(0);
            $table->integer('teach')->default(0);
            $table->integer('essay')->default(0);
            $table->integer('appendix')->default(0);
            $table->integer('allpay')->default(0);
            $table->timestamps();
        });

        Schema::create('basics',function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id');
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
            $table->timestamps();
        });

        Schema::create('eduHistories',function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('basic_id');
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
            $table->timestamps();
        });

        Schema::create('works',function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('expertises',function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('work_id');
            $table->string('expertise');
            $table->text('introduction');
            $table->timestamps();
        });

        Schema::create('workExperiences',function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('work_id');
            $table->string('organization');
            $table->string('position');
            $table->dateTime('startDate');
            $table->dateTime('endDate');
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('teaches',function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('preSchool');
            $table->integer('elementary');
            $table->integer('secondary');
            $table->integer('special');
            $table->timestamps();
        });

        Schema::create('teachExperiences',function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('teach_id');
            $table->string('organization');
            $table->string('position');
            $table->dateTime('startDate');
            $table->dateTime('endDate');
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('essays',function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('essay0');
            $table->text('essay1');
            $table->text('essay2');
            $table->timestamps();
        });

        Schema::create('appendixes',function(Blueprint $table)
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
        //
    }
}
