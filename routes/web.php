<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RentalController;
use App\Models\Vehicle; 
use App\Livewire\Car\Index;
use App\Livewire\Car\Edit;
use App\Livewire\Forms\CarForms;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $totalCars = Vehicle::count();
    $availableCount = Vehicle::where('isAvailable', 1)->count();
    $unavailableCount = Vehicle::where('isAvailable', 0)->count();
    return view('dashboard', compact('totalCars', 'availableCount', 'unavailableCount'));

})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/DaTeam', function () {
    return view('DaTeam');
})->middleware(['auth', 'verified'])->name('DaTeam');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/cars', Index::class)->name('cars.index');
    Route::get('/cars/{vehicle}/edit', Edit::class)->name('cars.edit');
    
});

require __DIR__.'/auth.php';
