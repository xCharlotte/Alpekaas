<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\SafetyValueModel;
use App\Http\Resources\SafetyValue as SafetyValueResource;

class SafetyValue extends Resource
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
        'name' => $this->name,
      ];
    }
}
