<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Media;
use Faker\Generator as Faker;

$factory->define(Media::class, function (Faker $faker) {
    $image=$faker->randomElement(['/assets/images/product-details/large-size/1.jpg','/assets/images/product-details/large-size/2.jpg',
        '/assets/images/product-details/large-size/3.jpg','/assets/images/product-details/large-size/4.jpg']);
    return [
        'type'=>'image',
        'url'=>$image,
    ];
});
