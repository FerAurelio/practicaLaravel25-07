<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;


class ActorController extends Controller
{
  public function directory(){
    return view("actores");
  }

/*En el controlador recientemente creado, utilizando Eloquent, obtener todos
los actores dentro de una variable $actores, y enviarla a la vista. (Se
recomienda utilizar el método all. Recordar ingresar la línea “use
App\Actor” para importar el modelo)*/

public function getAllActors(){
  $actores= Actor::all();
  $titulo= "Listado de actores";
  return view("actores", compact("actores", "titulo"));
}

public function show($id){
  $actor = Actor::find($id);

  return view("actor", compact("actor"));
}
/*c. En el controlador ActorController, utilizando Eloquent, obtener los actores
cuyo nombre contenga los caracteres buscados. Guardar el actor en la
variable $actores, y enviarla a la vista. (Se recomienda utilizar el método
where)*/
public function search($busqueda){
$actores= Actor::where("%$busqueda%", "=" , "first_name")->orWhere("%$busqueda%", "=", "last_name")->get();
return view ("actores/buscar", compact("actores"));
}
}
