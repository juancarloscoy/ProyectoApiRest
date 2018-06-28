<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{

	 protected $fillable = [ 'nombres', 'apellidos','telefono','email','direccion'];
    
    public function Hobbies()
    {
      return $this->hasMany(Hobbie::class);
    }
}
