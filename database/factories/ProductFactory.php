<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        return [
            //
            'name'=>$this->faker->name(),
            'author'=>$this->faker->name(),
            'price'=>$this->faker->numberBetween($min = 5, $max = 200),
            'quantity'=>$this->faker->numberBetween($min = 5, $max=40),
            'category_id'=>rand(1,4),
            'image'=> 'default.jpg'
        ];
    }
}
