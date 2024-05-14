<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Api\CarModelService;
use App\Http\Resources\CarModelResource;
use App\Models\CarModel;

class CarModelController extends Controller
{
    /**
     * Service: CarModelService
     *
     * @var object
     */
    protected $carModelService;

    /**
     * CarModelService construct
     *
     * @param CarModelService $carModelService
     * 
     */
    public function __construct(CarModelService $carModelService)
    {
        $this->carModelService = $carModelService;
    }

    /**
     * Return a list of all car models
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $allCarModels = $this->carModelService->getAllCarModels();
        return CarModelResource::collection($allCarModels);
    }

    /**
     * Return current car model
     *
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function show(CarModel $carModel)
    {
        try {
            return CarModelResource::collection([$carModel]);
        } catch (\Exception $e) {
            logger()->error('Ошибка при получении модели автомобиля: ' . $e->getMessage());
        }
    }
}
