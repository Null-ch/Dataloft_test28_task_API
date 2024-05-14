<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'Марка' => $this->brand->title,
            'Модель' => $this->model->title,
            'Год выпуска' => $this->year,
            'Пробег' => $this->mileage,
            'Цвет' => $this->color,
        ];
    }
}
