<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $title=$faker->sentence;
    return [
        'title'=>$title,
        'description'=>$faker->paragraph,
        'price'=>$faker->numberBetween(1000,10000),
        'discount'=>$faker->randomElement([0,5,10,15,20]),
        'likes'=>$faker->numberBetween(0,250),
        'category_id'=>$faker->numberBetween(1,10),
        'type'=>$faker->word,
        'slug'=>slugify($title),
    ];
});
