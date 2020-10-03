<?php

use Illuminate\Database\Seeder;

class RoleSeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Role::class,4)
            ->create()
            ->each(function ($role) {
                $role->permissions()->sync(\App\Permission::all());
            });
    }
}
