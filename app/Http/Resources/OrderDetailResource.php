<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderDetailResource extends JsonResource
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
            'products_id' => $this->products_id,
            'orders_id' => $this->orders_id,
            'price' => $this->price,
            'name' => $this->name,
            'quantity' => $this->quantity,
            'status' => $this->status,
            'product' => new ProductResource($this->product),
            'order' => new OrderResource($this->order)
        ];
    }
}
