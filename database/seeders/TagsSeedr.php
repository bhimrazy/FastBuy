<?php
namespace Database\Seeders;

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
        \App\Tag::factory()->times(5)->create();
    }
}
