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
            ->references('user_id')
            ->on('users');

            $personalInfo->date('DOB');
            $personalInfo->string('parent1')->nullable();
            $personalInfo->string('parent2')->nullable();
            $personalInfo->string('highSchool');
            $personalInfo->integer('SAT')->nullable();
            $personalInfo->integer('ACT')->nullable();
            $personalInfo->integer('TOEFL')->nullable();
            $personalInfo->integer('GPA')->nullable();
            $personalInfo->string('major1')->nullable();
            $personalInfo->string('major2')->nullable();
            $personalInfo->string('major3')->nullable();
            $personalInfo->string('transcript')->nullable();
            $personalInfo->string('recLetter')->nullable();

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
