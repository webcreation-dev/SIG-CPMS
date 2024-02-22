<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Package>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name_package' => $this->faker->randomElement(['COLIS AMAZON', 'COLIS EREVAN', 'COLIS CDISCOUNT', 'COLIS JOOMLA', 'COLIS EBAY', 'COLIS LYNIA' ]),
            'description' => $this->faker->sentence,
            'weight' => $this->faker->randomFloat(2, 1, 10),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'address' => $this->faker->address,
            'date' => $this->faker->date,
            'status' => 'En cours livraison',
            'level_id' => $this->faker->numberBetween(1, 5),
            'user_id' => 1,
        ];
    }
}
