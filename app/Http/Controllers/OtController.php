<?php

namespace App\Http\Controllers;

use App\Models\ordenDeTrabajo;
use Illuminate\Http\Request;

class OtController extends Controller
{
    //Listado de Ot
    public function listOt(){
        $data["ots"] = ordenDeTrabajo::paginate(3);

        return view("listarOt" , $data);

    }
    
    //Formulario de Ot
    public function otform(){
        return view("otform");
    }

    //Guardar Ot
    public function saveOt(Request $request){

        $validator = $this->validate($request,[
            "fechaDeCreacion" => "required|date",
            "quienLoHizo" => "required|string|max:255",
            "duracionEstimada" => "required|date",
            "sembrado" => "required|date",
            "aplicado" => "required|date",
            "cortado" => "required|date"
        ]);
        $otdata = request()->except("_token");
        ordenDeTrabajo::insert($otdata);


        return back()->with("otGuardado","Orden de Trabajo guardada");
    }

    //Borrar Ot
    public function deleteOt($id){
        ordenDeTrabajo::destroy($id);

        return back()->with("otEliminada","Orden de Trabajo eliminada");
    }

    //Formulario para editar Ot
    public function editOtform($id){
        $ot = ordenDeTrabajo::findOrFail($id);

        return view("editOtform", compact("ot"));
    }

    //Edicion de Ot
    public function editOt(Request $request, $id){
        $datosOt = request()->except((["_token", "_method"]));
        ordenDeTrabajo::where("id", "=" , $id)->update($datosOt);

        return back()->with("otModificado", "Orden de Trabajo modificada");
    }


}
