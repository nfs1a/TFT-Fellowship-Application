<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basic extends Model
{
    protected $table = 'basics';

    protected $primaryKey = 'id' ;

    protected $fillable = [
        'name',
        'sex',
        'phone',
        'id_number',
        'cell_phone',
        'skype',
        'email',
        'sec_email',
        'birthday',
        'address'
    ];
/*
 *          $table->increments('id');
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
 */

}
