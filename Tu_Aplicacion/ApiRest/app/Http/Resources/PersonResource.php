<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PersonResource extends Resource
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
        'nombres' => $this->nombres,
        'apellidos' => $this->apellidos,
        'telefono' => $this->telefono,
        'email' => $this->email,
        'direccion' => $this->direccion,
        'created_at' => (string) $this->created_at,
        'updated_at' => (string) $this->updated_at,
        'hobbies' => $this->hobbies,
      ];
    }
}
