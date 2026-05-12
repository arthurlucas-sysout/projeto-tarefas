<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Métodos da classe Faker: https://fakerphp.org/
        return [
            'title' => fake()->sentence(),
            'description' => fake()->sentence(),
            'created_at' => now(),
            'user_id' => User::factory()
        ];
    }
}
