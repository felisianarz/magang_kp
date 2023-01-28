<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $primaryKey = 'car_id';
    protected $foreignKey = 'model_id';

    public function model(){
        return $this->belongsTo(CarModel::class,'model_id');
    }
}
