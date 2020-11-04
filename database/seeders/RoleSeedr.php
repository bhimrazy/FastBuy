<?php
namespace Database\Seeders;

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
        \App\Role::factory()->times(4)
            ->create()
            ->each(function ($role) {
                $role->permissions()->sync(\App\Permission::all());
            });
    }
}
