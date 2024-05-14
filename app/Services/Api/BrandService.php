<?php

namespace App\Services\Api;

use App\Models\Brand;

class BrandService
{
    /**
     * Model: Brand
     *
     * @var object
     */
    private $brand;

    /**
     * Construct brand service
     *
     * @param Brand $brand
     * 
     */
    public function __construct(Brand $brand)
    {
        (object) $this->brand = $brand;
    }

    /**
     * Getting a list of all brands
     *
     * @return object|null
     * 
     */
    public function getAllBrands(): ?object
    {
        try {
            return $this->brand::all(); //чанков и очередей не завезли, это тест
        } catch (\Exception $e) {
            logger()->error('Ошибка при получении списка марок автомобилей: ' . $e->getMessage());
            return null;
        }
    }
}
