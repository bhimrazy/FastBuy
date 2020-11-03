<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class BrandSeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Brand::class,12)->create();
    }
}
