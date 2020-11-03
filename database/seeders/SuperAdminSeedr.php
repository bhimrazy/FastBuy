<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SuperAdminSeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = \App\Admin::create([
            'first_name' => 'Bhimraj',
            'last_name'=>'Yadav',
            'email' => 'superadmin@fastbuy.com',
            'email_verified_at' => now(),
            'password'=>Hash::make('password'),
            'is_super'=>true,
            'type'=>'superAdmin',
            'remember_token' => Str::random(10),
        ]);
        $superAdmin->roles()->sync(\App\Role::all());
        $this->command->info('Super Admin Inserted with name : '.$superAdmin->first_name);
    }
}
