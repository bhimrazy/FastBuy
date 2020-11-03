<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CustomerSeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::factory()->times(100)->create();
        $customer=\App\User::create([
            'first_name' => 'Tony',
            'last_name'=>'Stark',
            'email' => 'tony@email.com',
            'mobile'=>'+9779800000000',
            'email_verified_at' => now(),
            'password'=>Hash::make('password'),
            'type'=>'customer',
            'remember_token' => Str::random(10),
        ]);
        $customer->billingAddress()->create([
            'address'=>'Koteshwor',
            'city'=>'Kathmandu',
            'state'=>'Bagmati',
            'post_code'=>'44600',
            'country'=>'Nepal',
        ]);
        $customer->shippingAddress()->create([
            'address'=>'Koteshwor',
            'city'=>'Kathmandu',
            'state'=>'Bagmati',
            'post_code'=>'44600',
            'country'=>'Nepal',
        ]);
        $this->command->info("Customer Inserted with Name : $customer->first_name $customer->last_name");
    }
}
