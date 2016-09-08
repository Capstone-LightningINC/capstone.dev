<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	factory(App\User::class, 10)->create();

        $user1 = [
        'name' => 'Phillip Garcia',
    	'preferred_name' => 'Phillip',
    	'gender' => 1,
        'email' => 'phillipthomasgarcia@gmail.com',
        'password' => bcrypt("password"),
    	'phone' => 5558675309,
    	'authority' => 'counselor',
    	'company' => "Lightning Inc",
        'counselor_name' => "Phillip Garcia",
        'remember_token' => str_random(10)];


    }
}
