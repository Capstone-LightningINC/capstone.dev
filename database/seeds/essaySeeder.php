<?php

use Illuminate\Database\Seeder;

class essaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Essay::class, 20)->create();
    }
}
