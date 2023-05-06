<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;

class ProductFactory extends Factory
{
    const PATH = 'uploaded/product/image';
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'price' => $this->faker->numberBetween(100, 1000),
            'image' => UploadedFile::fake()->image('product')->move(public_path(self::PATH), time() . '_product.png'),
            'discount' => $this->faker->numberBetween(1, 100),
            'rate' => $this->faker->numberBetween(0, 5),
            'count' => $this->faker->numberBetween(0, 2000)
        ];
    }
}
