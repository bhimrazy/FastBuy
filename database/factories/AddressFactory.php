<?php

namespace Database\Factories;

use App\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'street_name'=>$this->faker->streetName,
            'address'=>$this->faker->address .' ' . $this->faker->streetAddress,
            'city'=>$this->faker->city,
            'state'=>$this->faker->state,
            'post_code'=>$this->faker->postcode,
            'country'=>'Nepal',
        ];
    }
}
