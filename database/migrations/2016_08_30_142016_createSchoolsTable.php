<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $schools) {
            $schools->increments('school_id');
            $schools->string('biz_name');
            $schools->string('biz_info');
            $schools->string('e_address');
            $schools->string('e_city');
            $schools->string('e_state');
            $schools->integer('e_postal');
            $schools->string('e_country');
            $schools->string('loc_TZ');
            $schools->string('biz_phone');
            $schools->string('biz_fax');
            $schools->string('biz_email');
            $schools->string('web_url');
            $schools->string('c_type');
            $schools->string('c_setting');
            $schools->boolean('c_housing');
            $schools->integer('c_pop');
            $schools->string('c_ratio');
            $schools->integer('rank')->nullable();
            $schools->float('acceptance_rate')->nullable();
            $schools->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('schools');
    }
}
