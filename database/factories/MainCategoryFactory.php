<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Maincategory;
use Faker\Generator as Faker;

$factory->define(Maincategory::class, function (Faker $faker) {
    $title = $faker->unique()->randomElement(['Home Appliances','Kitchen Appliances','Smart Home Appliances']);
    return [
        'title'=>ucwords(strtolower($title)),
        'slug'=>slugify($title),
    ];
});
