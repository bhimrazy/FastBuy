<?php
namespace Database\Seeders;
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
        \App\Permission::factory()->times(52)->create();
    }
}
