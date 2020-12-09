@extends('layouts.app')
@section('content')
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-5">Productos</h2>
            <!--Mensaje Flash de producto eliminado-->
            @if(session("productoEliminado"))
           <div class="alert alert-success">
               {{session("productoEliminado")}}
           </div>
           @endif
                
            <a class="btn btn-success mb-4" href="{{url("/productoform") }}">Agregar producto</a>

            <table class="table table-bordered table-striped text-center" style="background-color: white">
                <thead>
                    <tr>
                        <th>Descripcion</th>
                        <th>Plantas objetivo</th>
                        <th>Modo de accion</th>
                        <th>Dias</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <td>{{$producto->descripcion}}</td>
                        <td>{{$producto->plantasObjetivo}}</td>
                        <td>{{$producto->modoDeAccion}}</td>
                        <td>{{$producto->duracion}}</td>
                        <td>
                            <form action="{{route("deleteProducto", $producto->id)}}" method="POST">
                                @csrf @method("DELETE")
                                {{-- <a href="{{route('editform',$cultivo->id)}}" class="btn btn-primary">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>  --}}
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
