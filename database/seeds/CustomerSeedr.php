<?php

use Illuminate\Database\Seeder;

class CustomerSeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class,100)->create();
    }
}
