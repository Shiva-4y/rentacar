<?php
namespace App\Livewire\Car;

use App\Models\Vehicle;
use Livewire\Component;
use App\Livewire\Forms\VehicleForm;

class Edit extends Component
{
    public $vehicle; // Define the $vehicle property
    public $name;
    public $plate_number;
    public $type;
    public $rental_rate;
    public $isAvailable;
    //doesnt work me no understand unga bonga me apeman
    public $vehicleTypes = ['Sedan', 'SUV', 'Truck', 'Van'];

    public function mount(Vehicle $vehicle)
    {
        // Populate each property individually
        $this->name = $vehicle->name;
        $this->plate_number = $vehicle->plate_number;
        $this->type = $vehicle->type;
        $this->rental_rate = $vehicle->rental_rate;
        $this->isAvailable = $vehicle->isAvailable;
    }

    public function render()
    {
        return view('livewire.car.edit', [
            'vehicleTypes' => $this->vehicleTypes,
        ]);
    }

    public function updateVehicle()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'plate_number' => 'required|string|max:20',
            'type' => 'required|string|max:50',
            'rental_rate' => 'required|numeric',
            'isAvailable' => 'required|boolean',
        ]);

        // Now update the vehicle with individual fields
        $vehicle = Vehicle::find($this->vehicle->id);
        $vehicle->update([
            'name' => $this->name,
            'plate_number' => $this->plate_number,
            'type' => $this->type,
            'rental_rate' => $this->rental_rate,
            'isAvailable' => $this->isAvailable,
        ]);

        flash()->success('Vehicle updated successfully');
        
        return redirect()->route('cars.index');
    }
}


