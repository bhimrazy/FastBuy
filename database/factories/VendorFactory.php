<?php

namespace Database\Factories;

use App\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;

class VendorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Admin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name'=>$this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password'=>Hash::make('password'),
            'is_super'=>false,
            'type'=>'vendor',
            'remember_token' => Str::random(10),
        ];
    }
}
