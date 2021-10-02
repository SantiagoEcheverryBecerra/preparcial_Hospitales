<?php

use Illuminate\Support\Facades\Route;

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

/*
Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', 'HomeController@saludar');

Route::get('/test', 'HomeController@test');
Route::get('/testDB', 'HomeController@testDB');

Route::get('/format', function (){
    /*Retornar JSON (PHP lo comvierte a arr_assoc a JSON)*/
    return [
        'nombre' => 'Santiago',
        'apellido' => 'Echeverry',
        'profecion' => 'Proximo Ingeniero',
        'edad' => 25,
        'correo' => 'Santiago.3801821071@ucaldas.edu.co'
    ];
});

Route::get('/paices', 'HomeController@saludar');

//Crear una ruta de tipo recurso
Route::resource('/hospitales','PreparcialHospitalController');
