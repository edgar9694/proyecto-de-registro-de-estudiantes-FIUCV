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
/*
Route::get('/controldeestudios', function () {
    return "Aqui va control de estudios";
});

Route::get('/controldeestudios/estudiante/{id}', function ($studentId) {
    return "bienvenido " .$studentId ;
});

Route::get('/coordinaciones', function () {
    return "coordinaciones";
});

Route::get('/escuelas', function () {
    return "lista de escuelas de la facultad de ingenieria";
});

Route::get('/postgrado', function () {
    return "postgrado";
});
*/

Route::get('/inicio','RoutesController@inicio');
