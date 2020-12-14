@extends('layouts.app')
@section('content')
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-5">Ordenes de Trabajo</h2>
            <!--Mensaje Flash de producto eliminado-->
            @if(session("otEliminada"))
           <div class="alert alert-success">
               {{session("otEliminada")}}
           </div>
           @endif
                
        <a class="btn btn-success mb-4" href="{{url('/otform')}}">Agregar Orden de Trabajo</a>

            <table class="table table-bordered table-striped text-center" style="background-color: white">
                <thead>
                    <tr>
                        <th>Fecha de creacion</th>
                        <th>Quien lo hizo</th>
                        <th>Duracion</th>
                        <th>Siembra</th>
                        <th>Aplicado</th>
                        <th>Cortado</th>
                        <th>Camara</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ots as $ot)
                    <tr>
                        <td>{{$ot->fechaDeCreacion}}</td>
                        <td>{{$ot->quienLoHizo}}</td>
                        <td>{{$ot->duracionEstimada}}</td>
                        <td>{{$ot->sembrado}}</td>
                        <td>{{$ot->aplicado}}</td>
                        <td>{{$ot->cortado}}</td>
                        <td>{{$ot->camaraOt}}</td>
                        <td>
                            <form action="{{route("deleteOt", $ot->id)}}" method="POST">
                                @csrf @method("DELETE")
                                <a href="{{route('editOtform',$ot->id)}}" class="btn btn-primary">
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
            {{-- {{$productos->links()}} --}}
            


        </div>

    </div>
    <a class="btn btn-light btn-xs mt-5" href="{{url('/camaras')}}">&laquo volver</a>


</div>
@endsection