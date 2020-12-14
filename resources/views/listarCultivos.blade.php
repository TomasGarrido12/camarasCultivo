@extends('layouts.app')
@section('content')
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-5">Cultivos</h2>
            <!--Mensaje flash de borrado con exito-->
            @if(session("cultivoEliminado"))
            <div class="alert alert-success">
                {{session("cultivoEliminado")}}
            </div>
            @endif


            <a class="btn btn-success mb-4" href="{{url("/form") }}">Agregar cultivo</a>

            <table class="table table-bordered table-striped text-center" style="background-color: white">
                <thead>
                    <tr>
                        <th>Nombre Vulgar</th>
                        <th>Nombre Cientifico</th>
                        <th>Reemplazo a</th>
                        <th>Camara</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cultivos as $cultivo)
                    <tr>
                        <td>{{$cultivo->nombreVulgar}}</td>
                        <td>{{$cultivo->nombreCientifico}}</td>
                        <td>{{$cultivo->reemplazoDe}}</td>
                        <td>{{$cultivo->camaraCultivo}}</td>
                        <td>
                            
                            <form action="{{route("delete", $cultivo->id)}}" method="POST">
                                @csrf @method("DELETE")
                                <a href="{{route('editform',$cultivo->id)}}" class="btn btn-primary">
                                    <i class="fas fa-pencil-alt"></i>
                                </a> 
                                <button type="submit" onclick='return confirm("¿Borrar?");' class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>


            </table>
            


        </div>

    </div>
    <a class="btn btn-light btn-xs mt-5" href="{{url('/camaras')}}">&laquo volver</a>


</div>
@endsection