<div class="p-6 bg-white dark:bg-gray-800 shadow-lg rounded-lg">
    <h1 class="text-3xl font-bold mb-6 text-gray-800 dark:text-gray-100">List of Cars</h1>
    <div>
        @if (session()->has('success'))
            <div id="successMessage" class="mb-4 p-4 text-green-800 bg-green-200 border border-green-300 rounded">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <!-- Availability Filter IT DOESN'T WORK-->
    <!-- <label for="availability" class="text-gray-700 dark:text-gray-300">Filter by Availability:</label>
    <select id="availability" wire:model="availability" class="p-2 border rounded dark:bg-gray-700 dark:border-gray-600">
        <option value="">All</option>
        <option value="1">Available</option>
        <option value="0">Not Available</option>
    </select> -->

    <!-- Filter Search IT DOESNT WORK SHI -->
    <div>
    <label for="type">Vehicle Type</label>
    <select wire:model="type" id="type">
        <option value="">Select a type</option>
        @foreach ($vehicleTypes as $vehicleType)
            <option value="{{ $vehicleType }}">{{ $vehicleType }}</option>
        @endforeach
    </select>
    @error('type') <span class="error">{{ $message }}</span> @enderror
</div>


    <div class="overflow-x-auto my-4">
        <table class="min-w-full table-auto border-collapse border border-gray-300 dark:border-gray-600">
            <thead class="bg-gray-700 text-white dark:bg-gray-900">
                <tr>
                    <th class="px-4 py-2 text-left text-sm font-semibold border-b dark:border-gray-700">ID</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold border-b dark:border-gray-700">Name</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold border-b dark:border-gray-700">Plate Number</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold border-b dark:border-gray-700">Type</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold border-b dark:border-gray-700">Rental Rate</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold border-b dark:border-gray-700">Availability</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold border-b dark:border-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vehicles as $vehicle)
                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-300 ease-in-out">
                        <td class="px-4 py-2 text-sm text-gray-800 dark:text-gray-100 border-b dark:border-gray-700">{{ $vehicle->id }}</td>
                        <td class="px-4 py-2 text-sm text-gray-800 dark:text-gray-100 border-b dark:border-gray-700">{{ $vehicle->name }}</td>
                        <td class="px-4 py-2 text-sm text-gray-800 dark:text-gray-100 border-b dark:border-gray-700">{{ $vehicle->plate_number }}</td>
                        <td class="px-4 py-2 text-sm text-gray-800 dark:text-gray-100 border-b dark:border-gray-700">{{ $vehicle->type }}</td>
                        <td class="px-4 py-2 text-sm text-gray-800 dark:text-gray-100 border-b dark:border-gray-700">${{ number_format($vehicle->rental_rate, 2) }}</td>
                        <td class="px-4 py-2 text-sm border-b dark:border-gray-700">
                            <span class="px-2 py-1 text-xs font-medium rounded {{ $vehicle->isAvailable ? 'text-green-800 bg-green-100 dark:bg-green-900 dark:text-green-200' : 'text-red-800 bg-red-100 dark:bg-red-900 dark:text-red-200' }}">
                                {{ $vehicle->isAvailable ? 'Available' : 'Not Available' }}
                            </span>
                        </td>
                        <td class="px-4 py-2 text-sm border-b dark:border-gray-700">
 <!-- No function -->       <a href="{{ ($vehicle->id) }}" class="inline-flex items-center gap-x-2 text-sm font-semibold text-blue-600 hover:text-blue-800 dark:text-blue-500 dark:hover:text-blue-400 mr-3">View</a> 
                            <a href="{{ route('cars.edit', ['vehicle' => $vehicle->id]) }}" class="inline-flex items-center gap-x-2 text-sm font-semibold text-yellow-600 hover:text-yellow-800 dark:text-yellow-500 dark:hover:text-yellow-400 mr-3">Edit</a>
                            <button 
                                type="button" 
                                wire:click="delete({{ $vehicle->id }})" 
                                class="inline-flex items-center gap-x-2 text-sm font-semibold text-red-600 hover:text-red-800 dark:text-red-500 dark:hover:text-red-400 mr-3">
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="my-4">
        {{ $vehicles->links('pagination::tailwind') }}
    </div>

    <!-- Button to Toggle Create Form -->
    <button wire:click="toggleCreateForm" class="mb-4 px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">
        {{ $showCreateForm ? 'Hide Create Form' : 'Add New Vehicle' }}
    </button>

    @if($showCreateForm)
        <livewire:car.create />
    @endif
</div>
