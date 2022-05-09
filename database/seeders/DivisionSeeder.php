<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Division; 
use Faker\Generator as Faker;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $faker;
    
    public function __construct(Faker $faker)
    {
        $this->faker = $faker;
    }

    public function run()
    {
        Division::factory()->count(10)->create();
        for($i=0;$i<100;$i++){
            Division::create([
                'name' => $this->faker->unique()->colorName(),
                'level' => $this->faker->randomDigitNotNull(),
                'collaborator' =>$this->faker->randomDigitNotNull(),
                'embassador' => $this->faker->name(),
                'upper_division_id' => $this->faker->randomDigitNotNull(),
            ]);

        }
    }
}
