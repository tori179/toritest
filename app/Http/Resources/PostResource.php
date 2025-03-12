<?php

namespace App\Http\Resources;

use App\Http\Resources\CategoryResource;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'category' => new CategoryResource($this->category), // Bao gồm thông tin category
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
        ];
    }
}
