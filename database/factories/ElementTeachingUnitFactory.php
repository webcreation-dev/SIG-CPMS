<?php

namespace Database\Factories;

use App\Models\TeachingUnit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ElementTeachingUnit>
 */
class ElementTeachingUnitFactory extends Factory
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
            'credit' => $this->faker->numberBetween(1, 3),
            'teaching_unit_id' => $this->faker->randomElement(TeachingUnit::where('status', 'multiple')->pluck('id')),
        ];
    }
}
