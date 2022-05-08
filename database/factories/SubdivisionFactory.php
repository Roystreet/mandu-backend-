<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\division>
 */
class SubdivisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique->word(),
            'level' => $this->faker->randomDigit(),
            'collaborator' =>$this->faker->randomDigit(),
            'embassador' => $this->faker->name(),
            'upper_division_id' => 2//$this->faker->randomDigitNotNull(),
        ];
    }
}
