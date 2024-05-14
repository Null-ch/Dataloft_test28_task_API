<?php

namespace App\Services\Api;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Requests\CarStoreRequest;
use App\Http\Requests\CarUpdateRequest;

class CarService
{
    /**
     * Model: Car
     *
     * @var object
     */
    private $car;

    /**
     * Construct brand CarService
     *
     * @param Car $car
     * 
     */
    public function __construct(Car $car)
    {
        (object) $this->car = $car;
    }

    /**
     * Getting a list of all machines
     *
     * @return object|null
     * 
     */
    public function getAllCars(): ?object
    {
        try {
            return $this->car::all(); //чанков и очередей не завезли, это тест
        } catch (\Exception $e) {
            logger()->error('Ошибка при получении списка автомобилей: ' . $e->getMessage());
            return null;
        }
    }
    /**
     * Creating a car record
     *
     * @param CarStoreRequest $request
     * 
     * @return bool
     * 
     */
    public function store(CarStoreRequest $request): bool
    {
        try {
            $carData = $request->validated();
            $this->car::create($carData);
            return true;
        } catch (\Exception $e) {
            logger()->error('Ошибка при создании автомобиля: ' . $e->getMessage());
            return false;
        }
    }
    /**
     * Updating car data
     *
     * @param CarUpdateRequest $request
     * @param Car $car
     * 
     * @return bool
     * 
     */
    public function update(CarUpdateRequest $request, Car $car): bool
    {
        try {
            $carData = $request->validated();
            $car->update($carData);
            return true;
        } catch (\Exception $e) {
            logger()->error('Ошибка при обновлении данных об автомобиле: ' . $e->getMessage());
            return false;
        }
    }
    /**
     * Deleting car data
     *
     * @param Car $car
     * 
     * @return bool
     * 
     */
    public function destroy(Car $car): bool
    {
        try {
            $this->car::destroy($car->id);
            return true;
        } catch (\Exception $e) {
            logger()->error('Ошибка при удалении данных об автомобиле: ' . $e->getMessage());
            return false;
        }
    }
}
