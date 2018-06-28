<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobbie extends Model
{

	protected $fillable = ['person_id', 'enum'];
    
    public function person()
    {
      return $this->belongsTo(Person::class);
    }
}
