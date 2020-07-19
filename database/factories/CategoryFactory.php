<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $title = $faker->unique()->randomElement(['Home Appliances','Kitchen Appliances','Smart Home Appliances']);
    return [
        'title'=>ucwords(strtolower($title)),
        'slug'=>slugify($title),
    ];
});
