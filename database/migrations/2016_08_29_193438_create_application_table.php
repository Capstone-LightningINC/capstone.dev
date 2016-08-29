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
              $application->foreign('school_id')
              ->references('id')
              ->on('schools');

              $application->foreign('student_id')
              ->references('id')
              ->on('student');

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
