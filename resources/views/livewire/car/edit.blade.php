<div class="p-4 bg-white dark:bg-gray-800 shadow-lg rounded-lg max-w-lg mx-auto">
    <h1 class="text-2xl font-bold mb-4 text-gray-800 dark:text-gray-100">Edit Vehicle</h1>

    @if (session()->has('success'))
        <div class="mb-4 p-4 text-green-800 bg-green-200 border border-green-300 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="updateVehicle">
        <div class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Vehicle Name</label>
                <input type="text" id="name" wire:model="form.name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
                @error('form.name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="plate_number" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Plate Number</label>
                <input type="text" id="plate_number" wire:model="form.plate_number" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
                @error('form.plate_number') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="type" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Vehicle Type</label>
                <select id="type" wire:model="form.type" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
                    <option value="">Select Type</option>
                    @foreach ($vehicleTypes as $type)
                        <option value="{{ $type }}">{{ $type }}</option>
                    @endforeach
                </select>
                @error('form.type') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="rental_rate" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Rental Rate</label>
                <input type="number" id="rental_rate" wire:model="form.rental_rate" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
                @error('form.rental_rate') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="isAvailable" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Availability</label>
                <input type="checkbox" id="isAvailable" wire:model="form.isAvailable" class="mt-1">
                @error('form.isAvailable') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="mt-4">
                <button type="submit" class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">Update Vehicle</button>
            </div>
        </div>
    </form>
</div>
