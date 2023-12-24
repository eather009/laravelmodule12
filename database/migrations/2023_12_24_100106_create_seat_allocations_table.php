<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('seat_allocations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('trip_id');
            $table->string('seat_number', 3);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('trip_id')->references('id')->on('trips');
            $table->unique([
                'trip_id', 'seat_number'
            ], 'uniqueSeat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seat_allocations');
    }
};
