<?php

namespace Database\Factories;
use App\Models\post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class postFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = post::class;

    public function definition()
    {
        return [
            // Define the fields and their default values
            'author_id' => 1,
            'title' => $this->faker->sentence,
            'deskripsi' => $this->faker->paragraph,
            'tags' => $this->faker->words(3, true),
        ];
    }
}
