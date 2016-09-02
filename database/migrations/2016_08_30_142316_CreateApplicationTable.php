<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('application', function(Blueprint $application) {
              $application->increments('id');
              $application->integer('school_id')->unsigned();
              $application->foreign('school_id')
              ->references('school_id')
              ->on('schools');

              $application->integer('student_id')->unsigned();
              $application->foreign('student_id')
              ->references('id')
              ->on('users');

          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('application');
    }
}
