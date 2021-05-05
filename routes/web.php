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

Route::get('/', function () {
    return view('welcome');
});


//callback : funcion sin nombre
//que hace parte de los parametros de la invocacion de otra
Route::get("variables", function(){

    //analiza variables
    //var_dump($mensaje);

});

Route::get("arreglos", function (){
    //arreglo: estructura de datos declare
    $estudiantes = [ "AN" => "Ana",
                     "NA" => "Maria" ,
                     "JO" => "Jorge"  ];
    echo "<pre>";
    print_r($estudiantes);
    echo "</pre>";

});
