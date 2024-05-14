<?php

namespace App\Http\Controllers\Api;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Services\Api\CarService;
use App\Http\Resources\CarResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\CarStoreRequest;
use App\Http\Requests\CarUpdateRequest;

class CarController extends Controller
{
    /**
     * Service: CarService
     *
     * @var object
     */
    protected $carService;

    /**
     * CarService construct
     *
     * @param CarService $carService
     * 
     */
    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }
    /**
     * Return a list of all machines
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $allCars = $this->carService->getAllCars();
        return CarResource::collection($allCars);
    }

    /**
     * Store a newly created car in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarStoreRequest $request)
    {
        $this->carService->store($request);
        return response()->json(['message' => 'Автомобиль успешно добавлен!'], 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Return the current car.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function show(Car $car)
    {
        return CarResource::collection([$car]);
    }

    /**
     * Update the current car in storage.
     *
     * @param  \App\Http\Requests\CarUpdateRequest  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(CarUpdateRequest $request, Car $car)
    {
        $this->carService->update($request, $car);
        return response()->json(['message' => 'Данные об автомобиле успешно обновлены!'], 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Remove the current car from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $this->carService->destroy($car);
        return response()->json(['message' => 'Данные об автомобиле успешно удалены!',], 200, [], JSON_UNESCAPED_UNICODE);
    }
}
