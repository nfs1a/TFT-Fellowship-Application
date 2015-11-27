<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DelFinishToBasicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('basics', function (Blueprint $table) {
            $table->dropColumn('finish');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('basics', function (Blueprint $table) {
            $table->boolean('finish')->default(false);
        });
    }
}
