<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Hobbie;
use App\Http\Resources\HobbieResource;

class HobbieController extends Controller
{
      public function store(Request $request, Person $person)
    {
      $hobbie = Hobbie::firstOrCreate(
        [
          'person_id' => $request->person()->id,
          
        ],
        ['hobbie' => $request->hobbie]
      );

      return new HobbierResource($hobbie);
    }}
