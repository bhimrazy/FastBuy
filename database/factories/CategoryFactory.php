<?php

namespace Database\Factories;

use App\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->unique()->randomElement(['Home Appliances','Kitchen Appliances','Smart Home Appliances','Large Appliances','Small Appliances','Cookware','Drinkware']);
        return [
            'title'=>ucwords(strtolower($title)),
            'slug'=>slugify($title),
        ];
    }
}
