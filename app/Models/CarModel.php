<?php

namespace App\Models;

use App\Models\Car;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarModel extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'brand_id'];
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
