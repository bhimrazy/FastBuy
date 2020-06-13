<?php

use Illuminate\Database\Seeder;

class MainCategorySeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Maincategory::class,3)->create();
    }
}
