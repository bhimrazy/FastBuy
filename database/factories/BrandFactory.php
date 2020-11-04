<?php

namespace Database\Factories;

use App\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Brand::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $brand = $this->faker->unique()->randomElement(['Black + Decker', 'Kent Fans','CG','LG','Godrej','Kent','TCL','Elica','Sensei','Pigeon','Toshiba','Orient']);
        $image=$this->faker->randomElement(['/assets/images/branding/1.jpg','/assets/images/branding/2.jpg',
            '/assets/images/branding/3.jpg','/assets/images/branding/4.jpg','/assets/images/branding/5.jpg','/assets/images/branding/6.jpg']);
        return [
            'title'=>$brand,
            'url'=>$image,
            'slug'=>slugify($brand),
        ];
    }
}
