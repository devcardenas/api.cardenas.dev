<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class ExperienceResource extends JsonResource
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
            "title" => $this->title,
            "company" => $this->company,
            "location" => $this->location,
            "description" => $this->description,
            "start_date" => $this->start_date,
            "end_date" => $this->end_date,
            "current" => $this->current,
            "logo_company_url" => $this->logo_company_url,
            "time" => calcular_tiempo($this->start_date, $this->end_date, $this->current),
        ];
    }
}
