<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
            "description" => $this->description,
            "slogan" => $this->slogan,
            "url" => $this->url,
            "icons" => $this->icons,
            "technologies" => $this->technologies,
            "image_path" => $this->image_path ? url($this->image_path) : url(asset('img/default.png'))
            
        ];
    }
}
