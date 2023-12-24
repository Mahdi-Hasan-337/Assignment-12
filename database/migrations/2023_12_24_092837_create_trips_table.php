<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('departure');
            $table->unsignedBigInteger('destination');
            $table->integer('remaining_seat');
            $table->date('trip_date');
            $table->time('trip_time');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('departure')->references('id')->on('locations');
            $table->foreign('destination')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('trips');
    }
};
