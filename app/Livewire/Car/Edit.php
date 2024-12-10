<?php

namespace App\Livewire\Car;

use Livewire\Component;
use App\Models\Vehicle;

class Edit extends Component
{
    public $vehicleId;
    public $name, $plate_number, $type, $rental_rate, $isAvailable;

    protected $rules = [
        'name' => 'required|string|max:255',
        'plate_number' => 'required|string|max:20',
        'type' => 'required|string|max:50',
        'rental_rate' => 'required|numeric|min:0',
        'isAvailable' => 'required|boolean',
    ];

    public function mount($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $this->vehicleId = $vehicle->id;
        $this->name = $vehicle->name;
        $this->plate_number = $vehicle->plate_number;
        $this->type = $vehicle->type;
        $this->rental_rate = $vehicle->rental_rate;
        $this->isAvailable = $vehicle->isAvailable;
    }

    public function updateVehicle()
    {
        $this->validate();

        $vehicle = Vehicle::findOrFail($this->vehicleId);
        $vehicle->update([
            'name' => $this->name,
            'plate_number' => $this->plate_number,
            'type' => $this->type,
            'rental_rate' => $this->rental_rate,
            'isAvailable' => $this->isAvailable,
        ]);

        session()->flash('success', 'Vehicle updated successfully!');
        return redirect()->route('cars.index');
    }

    public function render()
    {
        return view('livewire.car.edit');
    }
}
