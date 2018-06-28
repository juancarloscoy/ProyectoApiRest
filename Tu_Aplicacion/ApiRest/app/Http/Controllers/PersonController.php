<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Http\Resources\PersonResource;

class PersonController extends Controller
{

    public function index()
    {
      return PersonResource::collection(Person::with('hobbies')->paginate(25));
    }

    public function store(Request $request)
    {
      $person = Person::create([
       	'nombres' => $request->nombres,
        'apellidos' => $request->apellidos,
        'telefono' => $request->telefono,
        'email' => $request->email,
        'direccion' => $request->direccion,

      ]);

      return new PersonResource($person);
    }

    public function show(Person $person)
    {
      return new PersonResource($person);
    }

    public function update(Request $request, Person $person)
    {
       if ($request->person()->id !== $person->id) {
        return response()->json(['error' => 'No se puede editar.'], 403);
      }

       $person->update($request->only(['nombres', 'apellidos','telefono','email','direccion']));
	
      return new PersonResource($person);
    }

    public function destroy(Person $person)
    {
      $person->delete();

      return response()->json(null, 204);
    }
}
