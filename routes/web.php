<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/* Crear la ruta /actores, que redirigirá al método
ActorController@directory, y retorne la vista actores.blade.php.*/

Route::get("actores", "ActorController@directory");

Route::get("actores", "ActorController@getAllActors");
/*Crear la ruta /actor/{id}, que redirigirá al método ActorController@show,
y retorne la vista actor.blade.php*/

Route::get("actor/{id}","ActorController@show");
/*a. En la vista actores.blade.php, crear un formulario que tenga únicamente
un campo de texto. Este formulario tendrá el objetivo de buscar actores.
(Tener en cuenta que el formulario deberá apuntar a la ruta
/actores/buscar)*/
Route::get("actores/buscar","ActorController@search");
