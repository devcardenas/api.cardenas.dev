<?php

namespace App\Http\Resources\V1;
use App\Http\Resources\V1\SocialMediaResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
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
            'name' => $this->first_name . ' ' . $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'subtitle' => $this->subtitle,
            'excerpt' => $this->excerpt,
            'cv_path' => url($this->cv_path),
            'profile_image_path' => url($this->profile_image_path),
            'age' => calcular_edad($this->date_of_birth),
        ];
    }

    public function with($request)
    {
        return [
            'meta' => [
                'version' => '1.0.0',
                'author_url' => url('https://cardenas.dev')
            ]
        ];
    }
}
