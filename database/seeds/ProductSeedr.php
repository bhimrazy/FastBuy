<?php

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
        factory(\App\Product::class,100)
            ->create()
            ->each(function ($product) {
                $product->tags()->sync(
                    App\Tag::all()->random(3)
                );
                $product->media()->createMany(
                    factory(\App\Media::class,3)->make()->toArray()
                );
            });;
    }
}
