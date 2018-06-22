<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Followers extends JsonResource
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
            'follower' => $this->id_user_2,
            'view_follower' => [
                'href' => 'api/v1/user/'.$this->id_user_2,
                'method' => 'GET'
            ],
            'user' => $this->user
        ];
    }
}
