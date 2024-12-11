<?php

namespace App\Livewire\Forms;
use Livewire\Form;

class VehicleForm
{
    public $name;
    public $plate_number;
    public $type;
    public $rental_rate;
    public $isAvailable;

    // This method sets the form's attributes from the given vehicle model
    public function setVehicle($vehicle)
    {
        $this->name = $vehicle->name;
        $this->plate_number = $vehicle->plate_number;
        $this->type = $vehicle->type;
        $this->rental_rate = $vehicle->rental_rate;
        $this->isAvailable = $vehicle->isAvailable;
    }

    public function rules() 
    {
        return [
        'name' => 'required|string|max:255',
        'plate_number' => 'required|string|max:20',
        'type' => 'required|string|max:50',
        'rental_rate' => 'required|numeric',
        'isAvailable' => 'required|boolean',
    ];
}
}