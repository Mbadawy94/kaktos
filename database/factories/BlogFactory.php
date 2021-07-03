<?php

namespace Database\Factories;

use App\Models\blog;
use App\Models\category;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => 'monkey.png',
            'category_id' => $this->faker->randomElement(Category::pluck('id')),
            'title' => $this->faker->sentence(),
            'excerpt' =>  $this->faker->paragraphs(2, true),
            'body' => $this->faker->paragraphs(6, true),
        ];
    }
}
