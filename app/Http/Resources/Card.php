<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\CardModel;
use App\Http\Resources\Card as CardResource;

class Card extends Resource
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
        'description' => $this->description,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
      ];
    }
}
