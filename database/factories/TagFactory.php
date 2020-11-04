<?php

namespace Database\Factories;

use App\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->unique()->randomElement(['Featured Products','Hot Deals','Trending Products','Top Selling Products','New Products']);
        return [
            'title'=>ucwords(strtolower($title)),
            'slug'=>slugify($title),
        ];
    }
}
