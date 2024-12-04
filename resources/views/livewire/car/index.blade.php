<div class="p-6 bg-white shadow-lg rounded-lg">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">List of Cars</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full table-auto border-collapse border border-gray-300">
            <thead class="bg-gray-700 text-white">
                <tr>
                    <th class="px-4 py-2 text-left text-sm font-semibold border-b">ID</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold border-b">Name</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold border-b">Plate Number</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold border-b">Type</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold border-b">Rental Rate</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold border-b">Availability</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vehicles as $vehicle)
                <tr class="hover:bg-gray-100 transition duration-300 ease-in-out">
                    <td class="px-4 py-2 text-sm text-gray-800 border-b">{{ $vehicle->id }}</td>
                    <td class="px-4 py-2 text-sm text-gray-800 border-b">{{ $vehicle->name }}</td>
                    <td class="px-4 py-2 text-sm text-gray-800 border-b">{{ $vehicle->plate_number }}</td>
                    <td class="px-4 py-2 text-sm text-gray-800 border-b">{{ $vehicle->type }}</td>
                    <td class="px-4 py-2 text-sm text-gray-800 border-b">${{ number_format($vehicle->rental_rate, 2) }}</td>
                    <td class="px-4 py-2 text-sm border-b">
                        <span class="px-2 py-1 text-xs font-medium rounded {{ $vehicle->isAvailable ? 'text-green-800 bg-green-100' : 'text-red-800 bg-red-100' }}">
                            {{ $vehicle->isAvailable ? 'Available' : 'Not Available' }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="my-4">
        <nav>
            {{ $vehicles->links('pagination::tailwind') }}
        </nav>
    </div>
</div>
