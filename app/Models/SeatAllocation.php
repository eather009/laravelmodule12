<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatAllocation extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'trip_id', 'seat_number'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function trips()
    {
        return $this->belongsTo(Trip::class, 'trip_id', 'id');
    }
}
