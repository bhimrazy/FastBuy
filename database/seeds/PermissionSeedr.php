<?php

use Illuminate\Database\Seeder;

class PermissionSeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Permission::class,45)->create();
    }
}
