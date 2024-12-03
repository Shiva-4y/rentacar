<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Vehicle; 
use App\Models\Customer; 
use App\Models\Rental; 

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\rental>
 */
class RentalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'vehicle_id' => Vehicle::inRandomOrder()->first()->id, // Random vehicle
            'customer_id' => Customer::inRandomOrder()->first()->id, // Random customer
            'start_date' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'end_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'total_amount' => $this->faker->randomFloat(2, 100, 2000),
        ];
    }
}
