<?php

namespace Database\Factories;

use App\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title=$this->faker->sentence;
        $sku=initials(config('settings.site_name')??'Fast Buy').'-'.strtoupper(substr($title,0,2)).'-'.rand(1,100);
        return [
            'name'=>$title,
            'description'=>$this->faker->paragraph(10),
            'attributes'=>$this->faker->paragraph(5),
            'price'=>$this->faker->numberBetween(1000,10000),
            'slug'=>Str::slug($title),
            'sku'=>$sku,
            'quantity'=>$this->faker->numberBetween(10,100),
            'status'=>$this->faker->randomElement([0,1]),
            'featured'=>$this->faker->randomElement([0,1]),
            'stock'=>$this->faker->randomElement([0,1]),
            'rating'=>$this->faker->numberBetween(3,5),
            'discount'=>$this->faker->randomElement([0,5,10,15,20]),
            'likes'=>$this->faker->numberBetween(0,250),
            'subcategory_id'=>$this->faker->numberBetween(1,8),
            'product_type'=>$this->faker->word,
            'brand_id'=>$this->faker->numberBetween(1,12),

        ];
    }
}
