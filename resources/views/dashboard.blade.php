<x-app-layout>
    <x-slot name="header">
        
    <h1 class="mb-4 text-2xl font-extrabold text-gray-900 dark:text-white md:text-3xl lg:text-3xl">
    <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">SUPRANIGAAA</span> Dashboard
</h1>
<p class="text-sm font-light text-gray-500 lg:text-base dark:text-gray-400">
Empowering your rental business with real-time data insights and streamlined management tools. 
Drive growth and efficiency with our innovative platform designed for optimal performance and customer satisfaction.
</p>

    </x-slot>

    <div class="py-12 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-xl font-semibold mb-4">Welcome to SUPRANIGAAA Car Rentals!</h3>
                    <p class="text-gray-700 dark:text-gray-300">
                        Explore our fleet of vehicles and manage rentals with ease.
                    </p>
                </div>
            </div>

            <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="p-4 bg-white dark:bg-gray-800 shadow rounded-lg">
                    <h4 class="text-lg font-bold text-gray-800 dark:text-gray-200">Total Cars</h4>
                    <p class="text-2xl font-semibold text-blue-500 mt-2">{{ $totalCars }}</p>
                </div>
                <div class="p-4 bg-white dark:bg-gray-800 shadow rounded-lg">
                    <h4 class="text-lg font-bold text-gray-800 dark:text-gray-200">Bookings Today</h4>
                    <p class="text-2xl font-semibold text-green-500 mt-2">5</p>
                </div>
                <div class="p-4 bg-white dark:bg-gray-800 shadow rounded-lg">
    <h4 class="text-lg font-bold text-gray-800 dark:text-gray-200">Availability</h4>
    <div class="flex justify-between mt-2">
        <div>
            <p class="text-sm text-gray-500 dark:text-gray-400">Available Vehicles</p>
            <p class="text-2xl font-semibold text-green-500">{{ $availableCount }}</p>
        </div>
        <div>
            <p class="text-sm text-gray-500 dark:text-gray-400">Unavailable Vehicles</p>
            <p class="text-2xl font-semibold text-red-500">{{ $unavailableCount }}</p>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
</x-app-layout>
