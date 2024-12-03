<?php

namespace App\Livewire\Car;

use Livewire\Component;
use App\Models\Vehicle; // Assuming your model for cars is 'Vehicle'

class Index extends Component
{
   

   

    public function render()
    {
        $vehicles = Vehicle::all();
    
        // Debugging: Log the data
        \Log::info($vehicles);
    
        return view('livewire.car.index', [
            'vehicles' => $vehicles,
        ]);
    }
}
