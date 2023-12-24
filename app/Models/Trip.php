<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = ['trip_name', 'departure_location_id', 'arrival_location_id', 'bus_id', 'departure_date'];
    public function departureLocation()
    {
        return $this->belongsTo(Location::class, 'departure_location_id', 'id');
    }
    public function arrivalLocation()
    {
        return $this->belongsTo(Location::class, 'arrival_location_id', 'id');
    }

    public function bus()
    {
        return $this->belongsTo(Bus::class, 'bus_id', 'id');
    }
}
