<?php

namespace App\Http\Controllers\Api;

use App\Models\Brand;
use App\Services\Api\BrandService;
use App\Http\Controllers\Controller;
use App\Http\Resources\BrandResource;

class BrandController extends Controller
{
    /**
     * Service: BrandService
     *
     * @var object
     */
    protected $brandService;

    /**
     * BrandService construct
     *
     * @param BrandService $brandService
     * 
     */
    public function __construct(BrandService $brandService)
    {
        $this->brandService = $brandService;
    }

    /**
     * Return a list of all brands.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $allBrands = $this->brandService->getAllBrands();
        return BrandResource::collection($allBrands);
    }

    /**
     * Return current brands.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function show(Brand $brand)
    {
        try {
            return BrandResource::collection([$brand]);
        } catch (\Exception $e) {
            logger()->error('Ошибка при получении марки автомобиля: ' . $e->getMessage());
        }
    }
}
