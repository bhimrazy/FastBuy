<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    $title=$faker->sentence;
    $sku=initials(config('settings.site_name')??'Fast Buy').'-'.strtoupper(substr($title,0,2)).'-'.rand(1,100);
    return [
        'name'=>$title,
        'description'=>$faker->paragraph(10),
        'attributes'=>$faker->paragraph(5),
        'price'=>$faker->numberBetween(1000,10000),
        'slug'=>Str::slug($title),
        'sku'=>$sku,
        'quantity'=>$faker->numberBetween(10,100),
        'rating'=>$faker->numberBetween(3,5),
        'discount'=>$faker->randomElement([0,5,10,15,20]),
        'likes'=>$faker->numberBetween(0,250),
        'subcategory_id'=>$faker->numberBetween(1,8),
        'product_type'=>$faker->word,
        'brand_id'=>$faker->numberBetween(1,12),

    ];
});
