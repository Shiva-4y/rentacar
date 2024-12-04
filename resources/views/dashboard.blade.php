<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __("Axell's Car Rental Dashboard") }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-xl font-semibold mb-4">Welcome to Axell's Car Rentals!</h3>
                    <p class="text-gray-700 dark:text-gray-300">
                        Explore our fleet of vehicles and manage rentals with ease.
                    </p>
                </div>
            </div>

            <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="p-4 bg-white dark:bg-gray-800 shadow rounded-lg">
                    <h4 class="text-lg font-bold text-gray-800 dark:text-gray-200">Total Cars</h4>
                    <p class="text-2xl font-semibold text-blue-500 mt-2">10</p>
                </div>
                <div class="p-4 bg-white dark:bg-gray-800 shadow rounded-lg">
                    <h4 class="text-lg font-bold text-gray-800 dark:text-gray-200">Bookings Today</h4>
                    <p class="text-2xl font-semibold text-green-500 mt-2">5</p>
                </div>
                <div class="p-4 bg-white dark:bg-gray-800 shadow rounded-lg">
                    <h4 class="text-lg font-bold text-gray-800 dark:text-gray-200">Pending Returns</h4>
                    <p class="text-2xl font-semibold text-red-500 mt-2">5</p>
                </div>
            </div>

            <div class="mt-6 bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                
            </div>
        </div>
    </div>
</x-app-layout>
