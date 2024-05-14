<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'brand_id' => $this->faker->numberBetween(1, 10),
            'car_model_id' => $this->faker->numberBetween(1, 10),
            'year' => $this->faker->year(),
            'mileage' => $this->faker->numberBetween(0, 200000),
            'color' => $this->faker->safeColorName()
        ];
    }
}
