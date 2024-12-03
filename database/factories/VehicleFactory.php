<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Vehicle; 
use App\Models\Customer; 
use App\Models\Rental; 

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'name' => $this->faker->company() . ' ' . $this->faker->word(),
            'plate_number' => strtoupper($this->faker->unique()->bothify('???-####')),
            'type' => $this->faker->randomElement(['Sedan', 'SUV', 'Truck', 'Van']),
            'rental_rate' => $this->faker->randomFloat(2, 100, 500), // Rates between 100 and 500
            'isAvailable' => $this->faker->boolean(80), // 80% chance available

        ];
    }
}
