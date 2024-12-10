<div class="p-6 bg-white dark:bg-gray-800 shadow-md rounded-md">
    <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-gray-100">Edit Vehicle</h2>

    <form wire:submit.prevent="updateVehicle">
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
            <input type="text" id="name" wire:model="name" class="mt-1 block w-full border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:border-blue-500 dark:focus:border-blue-400 focus:ring-blue-500">
            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="plate_number" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Plate Number</label>
            <input type="text" id="plate_number" wire:model="plate_number" class="mt-1 block w-full border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:border-blue-500 dark:focus:border-blue-400 focus:ring-blue-500">
            @error('plate_number') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="type" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Type</label>
            <input type="text" id="type" wire:model="type" class="mt-1 block w-full border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:border-blue-500 dark:focus:border-blue-400 focus:ring-blue-500">
            @error('type') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="rental_rate" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Rental Rate</label>
            <input type="number" id="rental_rate" wire:model="rental_rate" step="0.01" class="mt-1 block w-full border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:border-blue-500 dark:focus:border-blue-400 focus:ring-blue-500">
            @error('rental_rate') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="isAvailable" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Availability</label>
            <select id="isAvailable" wire:model="isAvailable" class="mt-1 block w-full border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:border-blue-500 dark:focus:border-blue-400 focus:ring-blue-500">
                <option value="1">Available</option>
                <option value="0">Not Available</option>
            </select>
            @error('isAvailable') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mt-6">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md shadow-md hover:bg-blue-600 focus:ring focus:ring-blue-300">
                Update Vehicle
            </button>
        </div>
    </form>
</div>
