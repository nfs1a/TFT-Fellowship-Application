<?php
/**
 * Created by PhpStorm.
 * User: takotsai
 * Date: 11/25/15
 * Time: 3:21 PM
 */

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Basic;

class BasicTableSeeder extends Seeder{
    public function run()
    {
        DB::table('basics')->truncate();

        for($i=0;$i<20; $i++)
        {
            Basic::create([
                'name'      =>  str_random(5),
                'sex'       =>  rand(0,2),
                'phone'     =>  rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9),
                'cell_phone'=>  '09'.random_bytes(8),
                'skype'     =>  str_random(rand(5,20)),
                'email'     =>  str_random(rand(2,10)).'@'.str_random(rand(3,6)).'.'.str_random(rand(3,6)),
                'sec_email' =>  str_random(rand(2,10)).'@'.str_random(rand(3,6)).'.'.str_random(rand(3,6)),
                'birthday'  =>  Carbon::now(),
                'address'   =>  str_random(50)
            ]);
        }
        /*
         *  $table->increments('id');
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
}