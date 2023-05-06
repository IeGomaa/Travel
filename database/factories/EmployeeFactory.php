<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;

class EmployeeFactory extends Factory
{
    const PATH = 'uploaded/employee/image/';
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'image' => UploadedFile::fake()->image('employee')->move(public_path(self::PATH), time() . '_employee.png'),
            'email' => $this->faker->unique()->email,
            'phone' => $this->faker->phoneNumber,
            'password' => Hash::make($this->faker->password),
            'location' => $this->faker->paragraph,
            'position' => $this->faker->randomElement(['developer', 'designer', 'hr', 'worker', 'manager', 'driver']),
            'biography' => $this->faker->paragraph
        ];
    }
}
