<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::table('events')->delete();
        DB::table('essays')->delete();
        DB::table('personalInfo')->delete();
        DB::table('schools')->delete();
        DB::table('users')->delete();
        $this->call(UserTableSeeder::class);
        $this->call(SchoolTableSeeder::class);
        $this->call(personalInfoSeeder::class);
        $this->call(essaySeeder::class);
        $this->call(eventsSeeder::class);

        Model::reguard();
    }
}
