<?php

namespace App\Livewire\Car;

use Livewire\Component;
use App\Models\Vehicle; 
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;


class Index extends Component
{
   
    use WithPagination, WithoutUrlPagination;  
     
   
    public $showCreateForm = false;

    public function toggleCreateForm()
    {
        if ($this->showCreateForm) {
            $this->showCreateForm = false;
            return redirect()->route('cars.index');  // Redirect to the index page
        }

        $this->showCreateForm = !$this->showCreateForm;
        
    }

    public function delete($id)
    {
        $vehicle = Vehicle::findOrFail($id); // Find the vehicle by ID
        $vehicle->delete(); // Delete the vehicle
        
        // Flash success message
        session()->flash('success', 'Vehicle deleted successfully.');
    }

    public function render()
    {
       
        
        return view('livewire.car.index', 
[
'vehicles' => Vehicle::paginate(5)
]);
    }
}
