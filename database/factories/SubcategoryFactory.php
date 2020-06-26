<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Subcategory;
use Faker\Generator as Faker;

$factory->define(Subcategory::class, function (Faker $faker) {
    $title = $faker->unique()->randomElement(['Water Purifiers','Refrigerators',
        'Washing Machine','Air Conditioners','Vacuum Cleaner','Steam Cleaning','Washer & Dryer',
        'Rice Cookers','Fans','Microwave Oven'
    ]);

    return [
        'title'=>ucwords(strtolower($title)),
        'category_id'=>$faker->numberBetween(1,3),
        'slug'=>slugify($title),
    ];
});
