<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;

class CountryFactory extends Factory
{
    const PATH = 'uploaded/country/image';
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->country,
            'iso' => $this->faker->countryISOAlpha3,
            'code' => $this->faker->unique()->numberBetween(1, 100),
            'image' => UploadedFile::fake()->image('country')->move(public_path(self::PATH), time() . '_country.png')
        ];
    }
}
