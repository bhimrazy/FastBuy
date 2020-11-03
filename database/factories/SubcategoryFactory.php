<?php

namespace Database\Factories;

use App\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubcategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subcategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->unique()->randomElement(['Water Purifiers','Refrigerators',
            'Washing Machine','Air Conditioners','Vacuum Cleaner','Steam Cleaning','Washer & Dryer',
            'Rice Cookers','Fans','Microwave Oven','Tour Drinkware','Hatch Drinkware','Direction Drinkware',
            'Crescent Drinkware','Armchairs','Bunk Bed','Mattress','Sideboard','Cookware Brands','Cookware Sets',
            'Individual Cookware','Enamel Cookware'
        ]);

        return [
            'title'=>ucwords(strtolower($title)),
            'category_id'=>$faker->numberBetween(1,3),
            'slug'=>slugify($title),
        ];
    }
}
