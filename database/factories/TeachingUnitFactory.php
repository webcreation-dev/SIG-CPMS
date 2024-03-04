<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeachingUnit>
 */
class TeachingUnitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'credit' => $this->faker->numberBetween(3, 6),
            'status' => $this->faker->randomElement(['singular', 'multiple']),
            'classroom_id' => 1,
            // 'classroom_id' => $this->faker->randomElement(Classroom::pluck('id')),
        ];
    }
}
