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
            "duracion" => "required|integer",
            "camaraProducto" => "required|integer"
        ]);

        $productodata = request()->except("_token");
        Producto::insert($productodata);


        return back()->with("productoGuardado","Producto guardado");
    }

    //Eliminar productos
    public function deleteProducto($id){
        Producto::destroy($id);

        return back()->with("productoEliminado","Producto eliminado");
    }

    //Formulario para editar productos
    public function editproductoform($id){
        $producto = Producto::findOrFail($id);

        return view("editproductoform" , compact("producto"));
    }

    //Edicion de productos
    public function editProducto(Request $request, $id){
        $datosProducto = request()->except((["_token", "_method"]));
        Producto::where("id", "=" , $id)->update($datosProducto);

        return back()->with("productoModificado", "Producto modificado");
    }

}
