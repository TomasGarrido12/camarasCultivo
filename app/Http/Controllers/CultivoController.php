<?php

namespace App\Http\Controllers;

use App\Models\Cultivo;
use Illuminate\Http\Request;

class CultivoController extends Controller
{
    //Formulario de cultivo
    public function cultivoform(){
        return view("cultivoform");
    }

    //Guardar cultivos
    public function save(Request $request){

        $validator = $this->validate($request,[
            "nombreVulgar" => "required|string|max:255",
            "nombreCientifico" => "required|string|max:255",
            "reemplazoDe" => "required|string|max:255"
        ]);

        $cultivodata = request()->except("_token");
        Cultivo::insert($cultivodata);

        return back()->with("cultivoGuardado","Cultivo guardado");
    }
}
