<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle; 
use App\Models\Customer; 
use App\Models\Rental; 

class vehicle extends Model
{
    /** @use HasFactory<\Database\Factories\VehicleFactory> */
    use HasFactory;

    protected $table = 'vehicles';

    protected $fillable = ['name', 'plate_number', 'type', 'rental_rate', 'isAvailable'];

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
    
}
