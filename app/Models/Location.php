<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'division'];

    public function departureTrips()
    {
        return $this->hasMany(Trip::class, 'departure_location_id', 'id');
    }
    public function arrivalTrips()
    {
        return $this->hasMany(Trip::class, 'arrival_location_id', 'id');
    }
}
