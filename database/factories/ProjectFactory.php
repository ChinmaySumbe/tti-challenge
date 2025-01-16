<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3), // Generate a random title
            'description' => $this->faker->paragraph, // Generate a random description
            'status' => $this->faker->randomElement(['open', 'in_progress', 'completed']), // Random status
        ];
    }
}