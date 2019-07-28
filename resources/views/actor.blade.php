<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>{{$actor->getFullName()}}</title>
  </head>
  <div class="container">
    <p>{{$actor->getFullName()}}</p>
    <p>Rating: {{$actor->rating}}</p>
    <p>Pelicula Favorita:{{$actor->favorite_movie_id}}</p>
  </div>
  <a href="/actores">Volver al listado</a>
</body>
</html>
