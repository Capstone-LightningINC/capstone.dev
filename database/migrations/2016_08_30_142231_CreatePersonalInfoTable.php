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

            $personalInfo->integer('student_id')->unsigned()->unique();
            $personalInfo->foreign('student_id')
            ->references('id')
            ->on('users');

            $personalInfo->date('DOB');
            $personalInfo->string('WeChat')->unique()->nullable();
            $personalInfo->string('profile_img')->nullable();
            $personalInfo->string('parent1')->nullable();
            $personalInfo->string('parent2')->nullable();
            $personalInfo->string('highSchool')->nullable();
            $personalInfo->string('SAT')->nullable()->default('N/A');
            $personalInfo->string('ACT')->nullable()->default('N/A');
            $personalInfo->string('TOEFL')->nullable()->default('N/A');
            $personalInfo->double('GPA')->nullable();
            $personalInfo->string('major1')->nullable();
            $personalInfo->string('major2')->nullable();
            $personalInfo->string('major3')->nullable();
            $personalInfo->timestamps();

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
