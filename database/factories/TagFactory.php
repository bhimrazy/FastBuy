<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    $title = $faker->randomElement(['Featured Products','Hot Deals','Trending Products','Top Selling Products','New Arrival']);
    return [
        'title'=>ucwords(strtolower($title)),
        'slug'=>slugify($title),
    ];
});
