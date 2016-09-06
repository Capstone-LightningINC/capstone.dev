<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $user) {
            $user->increments('id');
            $user->string('name');
            $user->string('preferred_name');
            $user->boolean('gender');
            $user->string('email')->unique();
            $user->string('password', 15);
            $user->string('phone', 12);
            $user->string('company');
            $user->string('counselor_name')->nullable();
            $user->enum('authority', ['student', 'counselor', 'parent', 'manager', 'assistant']);
            $user->rememberToken();
            $user->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
