<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEssaysTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('essays', function(Blueprint $essay) {
			$essay->increments('id');

			$essay->integer('student_id')->unsigned();
			$essay->foreign('student_id')
			->references('id')
			->on('users');

			$essay->integer('school_id')->unsigned();
			$essay->foreign('school_id')
			->references('school_id')
			->on('schools');

			$essay->string('topic');             
			$essay->longText('essay');
			$essay->integer('character_limit')->nullable;
			$essay->integer('word_count')->nullable;
			$essay->date('deadline');
			$essay->enum('status', ['Not Started', 'Pending', 'Submitted', 'Completed', 'Late']);
			$essay->timestamps();


		  });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('essays');
	}
}
