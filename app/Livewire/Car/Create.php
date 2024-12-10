<?php

namespace App\Livewire\Car;

use Livewire\Component;
use App\Models\Vehicle;

class Create extends Component
{
    public $name;
    public $plate_number;
    public $type;
    public $rental_rate;
    public $isAvailable;

 
    protected $rules = [
        'name' => 'required|string|max:255',
        'plate_number' => 'required|string|max:20',
        'type' => 'required|string|max:50',
        'rental_rate' => 'required|numeric',
        'isAvailable' => 'required|boolean',
    ];

    // public function resetForm()
    // {
    //     // Reset form data
    //     $this->reset(['name', 'plate_number', 'type', 'rental_rate', 'isAvailable']);
    // }

    public function submit()
    {
        $this->validate();
        
        // Create a new vehicle record
        Vehicle::create([
            'name' => $this->name,
            'plate_number' => $this->plate_number,
            'type' => $this->type,
            'rental_rate' => $this->rental_rate,
            'isAvailable' => (bool) $this->isAvailable, 
        ]);
        // Vehicle::create($validatedData);
        $this->reset();
        // Emit a success message or event
        // session()->flash('success', 'Vehicle added successfully!');
        // return view('livewire.car.index');
        return redirect()->route('cars.index')->with('success', 'Vehicle added successfully!');
      

    }

    public function render()
    {
        return view('livewire.car.create');
    }
}
