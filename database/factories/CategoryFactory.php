<?php

namespace Database\Factories;

use App\Models\Category;
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
        return [
            'name' => $this->faker->name(),
            'parent_id' => 0 ,
            'order' => rand(1,5) ,
            'status' => 'on',
            'photo' => 'resim.jpg',
            'description' => 'uzun yazi'
        ];
    }
}
