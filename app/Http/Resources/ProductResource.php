<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'isFeatured' => $this->is_featured,
            'isNew' => $this->is_new,
            'image_urls' => $this->image_urls,
            'product_variants' => ProductVariantResource::collection($this->whenLoaded('variants'))
        ];
    }
}
