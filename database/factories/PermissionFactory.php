<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Permission;
use Faker\Generator as Faker;

$factory->define(Permission::class, function (Faker $faker) {
    $title = $faker->unique()->randomElement(['permission_access','permission_create','permission_delete','permission_edit',
        'permission_show','product_access','product_category_access','product_category_create','product_category_delete',
        'product_category_edit','product_category_show','product_create','product_delete','product_edit','product_management_access',
        'product_show','product_tag_access','product_tag_create','product_tag_delete','product_tag_edit','product_tag_show',
        'profile_password_edit','role_access','role_create','role_delete','role_edit','role_show','user_access',
        'user_create','user_delete','user_edit','user_management_access','user_show',
    ]);

    return [
        'title'=>strtolower($title),
    ];
});