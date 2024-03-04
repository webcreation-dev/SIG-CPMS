<?php

namespace Database\Factories;

use App\Models\ElementTeachingUnit;
use App\Models\Student;
use App\Models\TeachingUnit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'i1_points' => $this->faker->numberBetween(10, 20),
            'i2_points' => $this->faker->numberBetween(10, 20),
            'd1_points' => $this->faker->numberBetween(10, 20),
            'd2_points' => $this->faker->numberBetween(10, 20),
            'e_points' => $this->faker->numberBetween(10, 20),
            'moy_inter' => $this->faker->numberBetween(10, 20),
            'moy_dev' => $this->faker->numberBetween(10, 20),
            'moy_ecu' => $this->faker->numberBetween(10, 20),
        ];
    }
}
