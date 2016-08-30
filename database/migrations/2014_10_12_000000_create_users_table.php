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
            $user->increments('user_id');
            $user->string('name');
            $user->string('preferred_name');
            $user->boolean('gender');
            $user->string('email')->unique();
            $user->string('password', 15);
            $user->string('phone', 11);
            $user->string('WeChat')->unique();
            $user->enum('authority', ['student', 'counselor', 'parent', 'manager', 'assistant']);
            $user->smallinteger('company_id')->unsigned();
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
