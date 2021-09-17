<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'author' => $this->author,
            'category' => new CategoryResource($this->category),
            'order_details' => OrderDetailResource::collection($this->order_details),
            'images' => ImageResource::collection($this->Resource),
            'price' => $this->price,
            // 'status' => $this->status,
            'quantity' => $this->quantity,
            'image' => $this->image,
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i:s')
        ];
    }
}
