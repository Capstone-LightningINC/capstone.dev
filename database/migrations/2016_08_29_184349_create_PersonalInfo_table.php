<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatepersonalInfoTable extends Migration
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
            $personalInfo->string('parents')->nullable();
            $personalInfo->integer('SAT')->nullable();
            $personalInfo->integer('ACT')->nullable();
            $personalInfo->integer('TOEFL')->nullable();
            $personalInfo->integer('GPA')->nullable();
            $personalInfo->string('major')->nullable();

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
