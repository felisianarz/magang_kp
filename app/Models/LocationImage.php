<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationImage extends Model
{
    use HasFactory;
    protected $foreignKey = 'car_id';

    public function location()
    {
        return $this->belongsTo(Location::class,'location_id');
    }
}
