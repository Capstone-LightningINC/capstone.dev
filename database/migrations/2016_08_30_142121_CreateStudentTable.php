<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function(Blueprint $students) {

            $students->integer('user_id')->unsigned();
            $students->foreign('user_id')
            ->references('id')
            ->on('users');

            $students->integer('school_id')->unsigned();
            $students->foreign('school_id')
            ->references('school_id')
            ->on('schools');


//            $students->primary('user_id');
            $students->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}
