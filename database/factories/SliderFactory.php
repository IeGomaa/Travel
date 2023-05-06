<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;

class SliderFactory extends Factory
{
    const PATH = 'uploaded/slider/image';
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->name,
            'description' => $this->faker->paragraph,
            'image' => UploadedFile::fake()->image('slider')->move(public_path(self::PATH), time() . '_slider.png')
        ];
    }
}
