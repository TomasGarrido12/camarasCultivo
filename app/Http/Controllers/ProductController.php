<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    //Listado de producto
    public function listProductos(){
        $data["productos"] = Producto::paginate(10);

        return view("listarProductos", $data);
    }
    
    
    //Formulario de producto
    public function productoform(){
        return view("productoform");
    }

    //Guardar producto
    public function saveProducto(Request $request){

        $validatorProducto = $this->validate($request,[
            "descripcion" => "required|string|max:255",
            "plantasObjetivo" => "required|string|max:255",
            "modoDeAccion" => "required|string|max:255",
            "duracion" => "required|integer"
        ]);

        $productodata = request()->except("_token");
        Producto::insert($productodata);


        return back()->with("productoGuardado","Producto guardado");

    }

}
