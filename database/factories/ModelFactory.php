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

$factory->define(App\Essay::class, function (Faker\Generator $faker) {
    return [
        'student_id' => App\User::all()->random()->id,
        'school_id' => App\School::all()->random()->school_id,
        'topic' => $faker->numberBetween(1,4),
        'essay' => $faker->text(400),
        'character_limit' => 500000,
        'word_count' => 500,
        'deadline' => 2016-10-15,
        'status' => "Not Started"
    ];
});

// $factory->define(App\Student::class, function (Faker\Generator $faker) {
//     return [
//         'user_id' => App\User::all()->random()->id,
//         'school_id' => App\School::all()->random()->school_id,
//         'essay_id' => App\Essay::all()->random()->id
//     ];
// });
