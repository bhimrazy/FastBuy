<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $title = $faker->randomElement(['Water Purifiers','Refrigerators',
    'Washing Machine','Air Conditioners','Vacuum Cleaner','Steam Cleaning','Washer & Dryer',
        'Rice Cookers','Fans','Microwave Oven'
    ]);

    return [
        'title'=>ucwords(strtolower($title)),
        'maincategory_id'=>$faker->numberBetween(1,3),
        'slug'=>slugify($title),
    ];
});
