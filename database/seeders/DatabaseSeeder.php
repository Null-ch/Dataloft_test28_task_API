<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Brand;
use App\Models\CarModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Brand::factory()->count(10)->create();
        CarModel::factory()->count(10)->create();
        Car::factory()->count(10)->create();
    }
}
