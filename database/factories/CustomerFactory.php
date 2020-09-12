<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname'=>$faker->lastName,
        'email' => $faker->email,
        'email_verified_at' => now(),
        'password'=>Hash::make('password'),
        'type'=>'customer',
        'remember_token' => Str::random(10),
    ];
});
