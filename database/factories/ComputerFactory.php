<?php

namespace Database\Factories;

use App\Models\Computer;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComputerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Computer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand' => $this->faker->randomElement(['computers','cellphones','tablets']),
            'color' => $this->faker->randomElement(['computers','cellphones','tablets']),
            'code' => $this->faker->buildingNumber(),
            'weight' => $this->faker->buildingNumber(),
            'model' => $this->faker->randomElement(['awsdq32412','4324adsw1','431232dasd']),
        ];
    }
}
