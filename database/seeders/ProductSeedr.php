<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;


class ProductSeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Product::factory()->times(12)
            ->create()
            ->each(function ($product) {
                $product->tags()->sync(
                    \App\Tag::all()->random(3)
                );
                $product->media()->createMany(
                    \App\Media::factory()->times(3)->make()->toArray()
                );
            });
    }
}
