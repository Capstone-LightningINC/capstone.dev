<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    	'preferred_name' => $faker->name,
    	'gender' => $faker->boolean,
        'email' => $faker->safeEmail,
        'password' => bcrypt("password"),
    	'phone' => $faker->e164PhoneNumber,
    	'authority' => 'student',
    	'company' => "Lightning Inc",
        'counselor_name' => "Phillip Garcia",
        'remember_token' => str_random(10)
    ];
});