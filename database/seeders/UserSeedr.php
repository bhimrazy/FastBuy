<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Admin::factory()->times(1)
            ->create()
            ->each(function ($user) {
                $user->roles()->sync(\App\Role::all());
               // $user->shippingAddress()->create(factory(\App\Address::class,1)->make());php
            });
    }
}
