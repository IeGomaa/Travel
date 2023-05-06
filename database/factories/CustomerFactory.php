<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;

class CustomerFactory extends Factory
{
    const PATH = 'uploaded/customer/image';
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->email,
            'password' => Hash::make($this->faker->password),
            'image' => UploadedFile::fake()->image('customer')->move(public_path(self::PATH), time() . '_customer.png')
        ];
    }
}
