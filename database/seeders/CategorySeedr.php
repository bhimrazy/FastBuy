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
        \App\Category::factory()->times(7)->create();
    }
}
