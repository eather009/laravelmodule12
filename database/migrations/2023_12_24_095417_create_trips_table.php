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
        $this->down();
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('trip_name');
            $table->unsignedBigInteger('departure_location_id');
            $table->unsignedBigInteger('arrival_location_id');
            $table->unsignedBigInteger('bus_id');
            $table->date('departure_date');
            $table->timestamps();

            $table->foreign('departure_location_id')->references('id')
                ->on('locations');
            $table->foreign('arrival_location_id')->references('id')
                ->on('locations');
            $table->foreign('bus_id')->references('id')
                ->on('buses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
