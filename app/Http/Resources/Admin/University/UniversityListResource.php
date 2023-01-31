<?php

namespace App\Http\Resources\Admin\University;

use Illuminate\Http\Resources\Json\JsonResource;

class UniversityListResource extends JsonResource
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
            'number' => $this->number,
            'user_id' => $this->user_id,
            'name' => $this->name,
            'description' => $this->description,
            'logo' => $this->logo,
            'slug' => $this->slug,
            'status' => $this->status
        ];
    }
}
