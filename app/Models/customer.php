<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle; 
use App\Models\Customer; 
use App\Models\Rental; 

class customer extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'address'];

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
