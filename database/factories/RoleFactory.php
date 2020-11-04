<?php

namespace Database\Factories;

use App\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Role::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->unique()->randomElement(['SuperAdmin','SubAdmin','Vendor','Editor']);
        return [
            'title'=>$title,
        ];
    }
}
