<?php

namespace Database\Factories;

use App\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name'=>$this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'mobile'=>$this->faker->phoneNumber,
            'email_verified_at' => now(),
            'password'=>Hash::make('password'),
            'type'=>'customer',
            'remember_token' => Str::random(10),
        ];
    }
}
