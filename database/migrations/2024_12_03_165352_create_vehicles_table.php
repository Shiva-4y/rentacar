<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g., "Toyota Corolla"
            $table->string('plate_number')->unique();
            $table->string('type'); // e.g., "Sedan", "SUV"
            $table->decimal('rental_rate', 8, 2); // e.g., daily rate
            $table->boolean('isAvailable')->default(true); // true = available, false = rented
            $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
