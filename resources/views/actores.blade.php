<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Actores</title>
  </head>
  <body>
    <h1>{{$titulo}}</h1>
    <div class="">

      <form class="" action="actores/buscar" method="get">
        <div class="form-group">
              <input type="text" class="form-control" placeholder="Hace tu busqueda" name="buscar">
        </div>
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
      </form>
    </div>
    <ul>
      @foreach ($actores as $actor)
        <li>
          <p>
            <a href="/actor/{{$actor->id}}">
              {{$actor->getFullName()}}
            </a>
          </p>
        </li>
      @endforeach
    </ul>

</body>
</html>
<!--4. Buscador:
a. En la vista actores.blade.php, crear un formulario que tenga únicamente
un campo de texto. Este formulario tendrá el objetivo de buscar actores.
(Tener en cuenta que el formulario deberá apuntar a la ruta
/actores/buscar)
b. Crear la ruta /actores/buscar, que redirigirá al método
ActorController@search, y retorne la vista actores.blade.php.
c. En el controlador ActorController, utilizando Eloquent, obtener los actores
cuyo nombre contenga los caracteres buscados. Guardar el actor en la
variable $actores, y enviarla a la vista. (Se recomienda utilizar el método
where)
d. Agregar en actores.blade.php un segundo formulario con el botón
“Limpiar”, que envíe a la ruta original sin filtros de búsqueda.
e. Modificar el resultado de las búsquedas para que muestre el listado de
actores ordenados por apellido.
f. Modificar el listado para que los resultados aparezcan paginados. Modificar
todos los controladores necesarios.
-->
