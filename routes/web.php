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

/*Route::get('/', function () {
    return view('home');
});*/

/*Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('camaras', 'camaras')->name('camaras');
});*/

Route::get('/', function () {
    return view('home');
});

/*Route::get('camaras', function () {
    return view('camaras');
});*/

Route::get('home', function () {
    return view("home");
});

Route::get('camaras', function () {
    return view("camaras");
})->middleware('auth');

//Listado de cultivos
Route::get("listarCultivos","CultivoController@list" );

//Formulario de cultivo
route::get("/form","CultivoController@cultivoform");

//Guardar cultivo
route::post("/save","CultivoController@save")->name("save");