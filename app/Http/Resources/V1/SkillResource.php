<?php

namespace App\Http\Resources\V1;

use App\Http\Resources\V1\SkillDetailResource;
use Illuminate\Http\Resources\Json\JsonResource;

class SkillResource extends JsonResource
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
            "name" => $this->name,
            "list_type" => $this->list_type,
            "skill_detail" => SkillDetailResource::collection($this->skillDetail),
        ];
    }
}
