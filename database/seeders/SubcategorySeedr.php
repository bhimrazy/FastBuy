<?php
namespace Database\Seeders;

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
        \App\Subcategory::factory()->times(22)->create();
    }
}
