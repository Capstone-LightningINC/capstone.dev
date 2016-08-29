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
            $schools->string('name');
            $schools->string('location');
            $schools->string('region');
            $schools->string('phone', 11);
            $schools->string('rank', 4);
            $schools->string('ratio');
            $schools->int('acceptance_rate', 3);
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
