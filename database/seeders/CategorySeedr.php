<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Category::class,7)->create();
    }
}
