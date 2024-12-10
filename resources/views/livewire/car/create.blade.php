<div class="p-6 bg-white dark:bg-gray-800 shadow-lg rounded-lg max-w-lg mx-right">
<!-- <div class="p-6 bg-white dark:bg-gray-800 shadow-lg rounded-lg"> -->
    <h1 class="text-2xl font-bold mb-4">Add New Vehicle</h1>

    @if (session()->has('success'))
        <div class="mb-4 p-4 text-green-800 bg-green-200 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="space-y-6">
        <div>
            <label for="name" class="block text-sm font-medium">Vehicle Name</label>
            <input type="text" id="name" wire:model="name" class="w-full px-4 py-2 border rounded">
            @error('name') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="plate_number" class="block text-sm font-medium">Plate Number</label>
            <input type="text" id="plate_number" wire:model="plate_number" class="w-full px-4 py-2 border rounded">
            @error('plate_number') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="type" class="block text-sm font-medium">Vehicle Type</label>
            <input type="text" id="type" wire:model="type" class="w-full px-4 py-2 border rounded">
            @error('type') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="rental_rate" class="block text-sm font-medium">Rental Rate</label>
            <input type="number" step="0.01" id="rental_rate" wire:model="rental_rate" class="w-full px-4 py-2 border rounded">
            @error('rental_rate') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="isAvailable" class="block text-sm font-medium">Availability</label>
            <select id="isAvailable" wire:model="isAvailable" class="w-full px-4 py-2 border rounded">
                <option value="1">Available</option>
                <option value="0">Not Available</option>
            </select>
            @error('isAvailable') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="px-6 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">
            Add Vehicle
        </button>
    </form>
</div>

