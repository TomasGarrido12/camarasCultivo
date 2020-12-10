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

}
