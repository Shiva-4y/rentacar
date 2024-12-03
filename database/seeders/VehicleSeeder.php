<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehicle; 
use App\Models\Customer; 
use App\Models\Rental; 

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Seed 10 vehicles
        $vehicles = Vehicle::factory()->count(10)->create();

        // Seed 10 customers
        $customers = Customer::factory()->count(10)->create();

        // Seed 10 rentals
        $vehicles->each(function ($vehicle) use ($customers) {
            // Get a random customer for each rental
            $customer = $customers->random();

            // Create a rental for the vehicle and customer
            Rental::factory()->create([
                'vehicle_id' => $vehicle->id,
                'customer_id' => $customer->id,
                'start_date' => now(),
                'end_date' => now()->addDays(rand(1, 30)),
                'total_amount' => $vehicle->rental_rate * rand(1, 30),
            ]);

            // Mark the vehicle as unavailable
            $vehicle->update(['isAvailable' => false]);
        });
    }
}
