<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class VendorSeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Admin::class,10)
            ->create()
            ->each(function ($user) {
                $user->roles()->sync(\App\Role::where('title','Vendor')->pluck('id')->toArray());
                $user->products()->createMany(
                    factory(\App\Product::class,Faker::numberBetween(2,5))->make()->toArray()
                );
            });
    }
}
