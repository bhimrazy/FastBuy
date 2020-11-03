<?php
namespace Database\Seeders;

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
        \App\Admin::factory()->times(10)
            ->create()
            ->each(function ($user) {
                $user->roles()->sync(\App\Role::where('title','Vendor')->pluck('id')->toArray());
                $user->products()->saveMany(\App\Product::all()->random(rand(2,5)));
            });
    }
}
