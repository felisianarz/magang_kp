<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;
    protected $guarded = 'model_id';
    protected $primaryKey = 'model_id';

    public function cars(){
        return $this->hasMany(Car::class,'model_id');
    }

}
