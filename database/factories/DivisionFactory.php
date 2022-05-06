<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\division>
 */
class DivisionFactory extends Factory
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
            'sub_division_id' => null,
            'upper_division_id' => null,
        ];
    }
}
