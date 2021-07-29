<?php

namespace Database\Factories;

use App\Models\Business;
use Illuminate\Database\Eloquent\Factories\Factory;

class BusinessFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Business::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'location' => $this->faker->text(),
            'phone' => $this->faker->phoneNumber(),
            'deal' => $this->faker->randomElement(['computers','cellphones','tablets']),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
