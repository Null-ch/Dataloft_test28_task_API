<?php

namespace App\Services\Api;

use App\Models\CarModel;

class CarModelService
{
    /**
     * Model: CarModel
     *
     * @var object
     */
    private $carModel;

    /**
     * Construct brand CarModelService
     *
     * @param CarModel $carModel
     * 
     */
    public function __construct(CarModel $carModel)
    {
        (object) $this->carModel = $carModel;
    }

    /**
     * Getting a list of all car models
     *
     * @return object|null
     * 
     */
    public function getAllCarModels(): ?object
    {
        try {
            return $this->carModel::all(); //чанков и очередей не завезли, это тест
        } catch (\Exception $e) {
            logger()->error('Ошибка при получении списка моделей автомобилей: ' . $e->getMessage());
            return null;
        }
    }
}
