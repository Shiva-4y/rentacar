<?php

namespace App\Livewire\Car;

use Livewire\Component;
use App\Models\Vehicle; 
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;
use Illuminate\Database\Eloquent\Builder;


class Index extends Component
{
    public $availability; // For filtering by availability
    public $type = ''; // Add type filter
    public $vehicleTypes = ['Sedan', 'SUV', 'Truck', 'Van'];

    public $search;
    use WithPagination, WithoutUrlPagination;  
     
   
    public $showCreateForm = false;
    public $showEditForm = false;
    public $editVehicleId = null;
    // public $showEditForm = false;
    // public $vehicleId = null; // To store the selected vehicle ID

    // public function openEdit($id)
    // {
    //     $this->vehicleId = $id;
    //     $this->showEditForm = true; 
    // }

    protected $listeners = ['editVehicle' => 'showEditForm'];

    public function toggleCreateForm()
    {
        if ($this->showCreateForm) {
            $this->showCreateForm = false;
            return redirect()->route('cars.index');  
        }

        $this->showCreateForm = !$this->showCreateForm;
        
    }

    public function showEditForm($vehicleId)
    {     
        $this->editVehicleId = $vehicleId;
         $this->showEditForm = true;
    }


    // public function hideEditForm()
    // {
    //     $this->showEditForm = false;
    // }

    public function delete($id)
    {
        $vehicle = Vehicle::findOrFail($id); 
        $vehicle->delete(); 
        
      
        return redirect()->route('cars.index')->with('success', 'Vehicle deleted successfully.');
    }

    public function render()
    {
        $query = vehicle::query();
           // Apply availability filter
        // Apply availability filter
        if (!is_null($this->availability)) {
            $query->where('isAvailable', $this->availability);
        }

        // Apply type filter
        if ($this->type !== '') {
            $query->where('type', $this->type);
        }

        return view('livewire.car.index', [
            'vehicles' => $query->paginate(5),
            'vehicleTypes' => $this->vehicleTypes, // Pass vehicle types to the view
        ]);;
    }
    // public function applySearch(Builder $query)
    // {
    //     return $query->where('isAvailable', 'like', '%' . $this->search . '%');
    // }
}
