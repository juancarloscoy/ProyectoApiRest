<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class HobbieResource extends Resource
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
        'person_id' => $this->person_id,
        'enum' => $this->enum,
        'created_at' => (string) $this->created_at,
        'updated_at' => (string) $this->updated_at,
        'person' => $this->person,
      ];
    }
}
