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
            $schools->string('name')->unique();
            $schools->string('info');
            $schools->string('city');
            $schools->string('state');
            $schools->integer('zip');
            $schools->string('country');
            $schools->string('timezone');
            $schools->string('region')->default('N/A');
            $schools->string('phone');
            $schools->string('email')->unique();
            $schools->string('fax');

            $schools->string('type');
            $schools->string('years');
            $schools->integer('tuition');
            $schools->string('setting');
            $schools->boolean('housing');
            $schools->integer('rank')->nullable();
            $schools->string('ratio');
            $schools->float('acceptance_rate')->nullable();
            $schools->string('URL')->unique();
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
