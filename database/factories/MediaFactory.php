<?php

namespace Database\Factories;

use App\Media;
use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Media::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $image=$this->faker->randomElement(['/assets/images/product-details/large-size/1.jpg','/assets/images/product-details/large-size/2.jpg',
            '/assets/images/product-details/large-size/3.jpg','/assets/images/product-details/large-size/4.jpg']);
        return [
            'type'=>'image',
            'url'=>$image,
        ];
    }
}
