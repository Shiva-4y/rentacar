<div class="p-6 bg-white shadow-md rounded-lg">
    <h1 class="text-2xl font-bold mb-4">List of Cars</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full table-auto border-collapse border border-gray-200">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700 border-b">Make</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700 border-b">Model</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700 border-b">Year</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700 border-b">Price</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700 border-b">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vehicles as $vehicle)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 text-sm text-gray-800 border-b">{{ $vehicle->make }}</td>
                    <td class="px-4 py-2 text-sm text-gray-800 border-b">{{ $vehicle->model }}</td>
                    <td class="px-4 py-2 text-sm text-gray-800 border-b">{{ $vehicle->year }}</td>
                    <td class="px-4 py-2 text-sm text-gray-800 border-b">${{ number_format($vehicle->price, 2) }}</td>
                    <td class="px-4 py-2 text-sm border-b">
                        @if($vehicle->is_available)
                            <span class="px-2 py-1 text-xs font-medium text-green-800 bg-green-100 rounded">Available</span>
                        @else
                            <span class="px-2 py-1 text-xs font-medium text-red-800 bg-red-100 rounded">Not Available</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
