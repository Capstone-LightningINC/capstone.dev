<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personalInfo', function (Blueprint $personalInfo) {
            $personalInfo->increments('id');
            $personalInfo->integer('student_id')->unsigned();
            $personalInfo->foreign('student_id')
            ->references('student_id')
            ->on('students');

            $personalInfo->date('DOB');
            $personalInfo->string('parents');
            $personalInfo->integer('SAT');
            $personalInfo->integer('ACT');
            $personalInfo->integer('TOEFL');
            $personalInfo->integer('GPA');
            $personalInfo->string('major');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('personalInfo');
    }
}
