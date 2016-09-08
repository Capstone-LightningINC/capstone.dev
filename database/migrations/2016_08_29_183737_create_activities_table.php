<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $activities) {
            $activities->increments('id');
            $activities->integer('student_id')->unsigned();
//            $activities->integer('student_id')->unsigned()->unique();
            $activities->foreign('student_id')
            ->references('id')
            ->on('users');
            $activities->string('name');
            $activities->string('position');
            $activities->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activities');
    }
}
