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

//Borrar cultivos
Route::delete('/delete/{id}', "CultivoController@delete")->name("delete");

//Formulario para editar cultivo
Route::get("editform/{id}","CultivoController@editform")->name("editform");

//Edicion cultivos
Route::patch("/edit/{id}","CultivoController@edit")->name("edit");

//Listado de productos
Route::get("listarProductos", "ProductController@listProductos");

//Formulario de producto
Route::get("/productoform", "ProductController@productoform");

//Guardar producto
Route::post("/saveProducto" , "ProductController@saveProducto")->name("saveProducto");

//Eliminar producto
Route::delete("/deleteProducto/{id}","ProductController@deleteProducto")->name("deleteProducto");

//Formulario para editar producto
Route::get("/editproductoform/{id}" , "ProductController@editproductoform")->name("editproductoform");

//Edicion de producto
Route::patch("/editProducto/{id}", "ProductController@editproducto")->name("editProducto");

//Listado de Ot
Route::get("/listarOt", "OtController@listOt");

//Formulario de Ot
Route::get("/otform","OtController@otform");

//Guardar Ot
Route::post("/saveOt","OtController@saveOt")->name("saveOt");

//Eliminar Ot
Route::delete("/deleteOt/{id}" , "OtController@deleteOt" )->name("deleteOt");

//Formulario para editar Ot
Route::get("/editOtform/{id}", "OtController@editOtform" )->name("editOtform");

//Edicion de Ot
Route::patch("/editOt/{id}","OtController@editOt" )->name("editOt");