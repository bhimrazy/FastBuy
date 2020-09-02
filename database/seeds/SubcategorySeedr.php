<?php

use Illuminate\Database\Seeder;

class SubcategorySeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Subcategory::class,22)->create();
    }
}
