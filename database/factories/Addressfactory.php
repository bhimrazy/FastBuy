<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    $title = $faker->unique()->randomElement(['Home Appliances','Kitchen Appliances','Smart Home Appliances']);
    return [
        'street_name'=>$faker->streetName,
        'address'=>$faker->address .' ' . $faker->streetAddress,
        'city'=>$faker->city,
        'state'=>$faker->state,
        'post_code'=>$faker->postcode,
        'country'=>'Nepal',
    ];
});
