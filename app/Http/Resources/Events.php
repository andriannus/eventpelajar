<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Events extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'category' => $this->category,
            'picture' => $this->picture,
            'description' => $this->description,
            'contact' => $this->contact,
            'link' => $this->link,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'user' => $this->user,
            'love' => $this->love,
            'view_event' => [
                'href' => 'api/v1/event/'.$this->id,
                'method' => 'GET'
            ],
        ];
    }
}
