<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName(),
        'last_name'=>$faker->lastName(),
        'email' => $faker->email,
        'email_verified_at' => now(),
        'password'=>Hash::make('password'),
        'is_super'=>false,
        'type'=>'vendor',
        'remember_token' => Str::random(10),
    ];
});
