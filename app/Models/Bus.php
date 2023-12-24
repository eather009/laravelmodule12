<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'model', 'plate_number'];

    public function trips()
    {
        return $this->hasMany(Trip::class, 'bus_id', 'id');
    }
}
