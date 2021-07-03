<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => 'monkey.png',
            'title' => $this->faker->name,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween(100,5000),
            'quantity' => $this->faker->numberBetween(1,25),
            'category_id' => Category::factory(),
        ];
    }
}
