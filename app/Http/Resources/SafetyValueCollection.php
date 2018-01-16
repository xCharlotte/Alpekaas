<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\SafetyValue;
use App\Http\Resources\SafetyValue as SafetyValueResource;

class SafetyValueCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      return [
          'data' => $this->collection,
        ];
    }
}
