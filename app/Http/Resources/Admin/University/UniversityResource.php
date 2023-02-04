<?php

namespace App\Http\Resources\Admin\University;

use Illuminate\Http\Resources\Json\JsonResource;

class UniversityResource extends JsonResource
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
            'user_id' => $this->user_id,
            'name' => $this->name,
            'worlds_rate' => $this->worlds_rate,
            'russian_rate' => $this->russian_rate,
            'description' => $this->description,
            'accreditation' => $this->accreditation,
            // contactas
            'address' => $this->address,
            'phones' => $this->phones,
            'email' => $this->email,
            'website' => $this->website,
            'facebook_link' => $this->facebook_link,
            'twiter_link' => $this->twiter_link,
            'telegram_link' => $this->telegram_link,
            'viber_link' => $this->viber_link,
            'vk_link' => $this->vk_link,
            // settings
            'slug' => $this->slug,
            'directions' => UniversityDirectionListResource::collection($this->university_directions),
            'logo' => $this->logo,
            'status' => $this->status
        ];
    }
}
