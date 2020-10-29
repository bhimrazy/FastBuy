<?php

use Illuminate\Database\Seeder;
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
                    factory(\App\Product::class,rand(2,5))->make()->toArray()
                );
            });
    }
}
