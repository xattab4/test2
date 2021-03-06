<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CategoryResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'sku' => $this->sku, 
            'title' => $this->title, 
            'image' => $this->image, 
            'category' => new CategoryResource($this->category), 
            'price' => $this->price,
        ];
    }
}
