<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        // Insert predefined locations
        $locations = ['Dhaka', 'Comilla', 'Cox\'s Bazar', 'Chittagong'];

        foreach ($locations as $location) {
            DB::table('locations')->insert([
                'name' => $location,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('locations');
    }
};
