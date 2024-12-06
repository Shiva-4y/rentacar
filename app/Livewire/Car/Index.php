<?php

namespace App\Livewire\Car;

use Livewire\Component;
use App\Models\Vehicle; 
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class Index extends Component
{
   
    use WithPagination, WithoutUrlPagination;  
     

    public function render()
    {
       
        
        return view('livewire.car.index', 
[
'vehicles' => Vehicle::paginate(5)
]);
    }
}
