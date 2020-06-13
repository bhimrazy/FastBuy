<?php

use Illuminate\Database\Seeder;

class TagsSeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Tag::class,5)->create();
    }
}
