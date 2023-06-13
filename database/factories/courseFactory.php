<?php

namespace Database\Factories;
use App\Models\Course;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class courseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Course::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'deskripsi' => $this->faker->paragraph,
            'img' => $this->faker->sentence,
            // Add more attributes as needed
        ];
    }
}
