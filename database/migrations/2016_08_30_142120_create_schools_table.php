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
            $schools->string('loc_county');
            $schools->string('loc_FIPS');
            $schools->string('loc_MSA');
            $schools->string('loc_PMSA');
            $schools->string('loc_TZ');
            $schools->string('loc_DST');
            $schools->string('biz_phone');
            $schools->string('biz_fax');
            $schools->string('biz_email');
            $schools->string('web_url');
            $schools->string('img_url');
            $schools->string('c_type');
            $schools->string('c_years');
            $schools->string('c_setting');
            $schools->boolean('c_housing');
            $schools->integer('c_pop');
            $schools->string('c_ratio');
            $schools->string('c_tuition');
            $schools->string('oos_tuition');
            $schools->integer('rank')->nullable();
            $schools->float('acceptance_rate')->nullable();
            $schools->string('majors')->nullable();
            $schools->string('topic1')->nullable();
            $schools->string('topic2')->nullable();
            $schools->string('topic3')->nullable();
            $schools->string('topic4')->nullable();
            $schools->string('topic5')->nullable();
            $schools->string('topic6')->nullable();
            $schools->string('topic7')->nullable();
            $schools->string('topic8')->nullable();

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
