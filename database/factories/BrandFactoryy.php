<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
    $brand = $faker->unique()->randomElement(['Black + Decker', 'Kent Fans','CG','LG','Godrej','Kent','TCL','Elica','Sensei','Pigeon','Toshiba','Orient']);
    $image=$faker->randomElement(['/assets/images/branding/1.jpg','/assets/images/branding/2.jpg',
        '/assets/images/branding/3.jpg','/assets/images/branding/4.jpg','/assets/images/branding/5.jpg','/assets/images/branding/6.jpg']);
    return [
        'title'=>$brand,
        'url'=>$image,
        'slug'=>slugify($brand),
    ];
});
