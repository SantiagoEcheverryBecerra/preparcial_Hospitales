<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    //Ruta principal '/'
    function saludar(){
        return 'Hola a todos';
    }

    //Ruta '/test'
    function test(Request $request){
        // Obtener parametros desde la URL
        var_dump($request->get('title', 'No trae titulo')); die;
        //return 'Hola Bienvenido a Laravel'; //Retornar una cadena
        return view('test', [
            'title' => 'Curso de Laravel',
            'descripcion' => 'Curso donde aprenderemos el manejo de Laravel',
            'temas' => [
                'Rutas',
                'Blade',
                'Templates (Blade)',
                'Controladores'
            ]
        ]); //Retornar una vista de Blade
    }

    function testDB(){
        try {
            //Probar conexion con la base de datos
            DB::connection()->getPdo();
            if ( DB::connection()->getDatabaseName() ) {
                /*Se conecto a la DB*/
                return ['ok' => 'Se conectó a la base de datos'];
            }

            die('No se logro encontrar la base de datos');

        } catch (\Exception $e){
            die("No se pudo conectar a la BD, Error:  {$e->getMessage()}");
        }
    }
}
