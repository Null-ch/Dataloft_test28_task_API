<?php

namespace App\Models;

use App\Models\CarModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['brand_id', 'car_model_id', 'year', 'mileage', 'color'];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function model()
    {
        return $this->belongsTo(CarModel::class, 'car_model_id', 'id');
    }
}
