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

    	factory(App\User::class, 9)->create();
        
        $user = new App\User();
    
        $user->name = 'Phillip Garcia';
        $user->preferred_name = 'Phillip';
        $user->gender = 0;
        $user->email = 'phillipthomasgarcia@gmail.com';
        $user->password = bcrypt("password");
        $user->phone = '15558675309';
        $user->authority = 'counselor';
        $user->company = "Lightning Inc";
        $user->remember_token = str_random(10);
        $user->save();

        $user = new App\User();
        $user->name = 'Emily Rodriguez';
        $user->preferred_name = 'Emily';
        $user->gender = 1;
        $user->email = 'rodriguez.emily1993@gmail.com';
        $user->password = bcrypt("password");
        $user->phone = '15558675309';
        $user->authority = 'student';
        $user->company = "Lightning Inc";
        $user->counselor_name = "Phillip Garcia";
        $user->remember_token = str_random(10);
        $user->save();


    }
}
