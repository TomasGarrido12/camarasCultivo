@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">
        <!--Mensaje flash -->
        @if(session("cultivoGuardado"))
            <div class="alert alert-success">
                {{session("cultivoGuardado")}}
            </div>
        @endif



        <!--Validacion de errores-->
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        
            <div class="card">
                <form action="{{url('save')}}" method="POST">
                @csrf
                    <div class="card-header text-center">AGREGAR CULTIVO</div>
                    <div class="card-body">
                        <div class="row form-group">
                            <label for="" class="col-2">Nombre vulgar</label>
                            <input type="text" name="nombreVulgar" class="form-control col-md-9">
                        </div>
                        <div class="row form-group">
                            <label for="" class="col-2">Nombre cientifico</label>
                            <input type="text" name="nombreCientifico" class="form-control col-md-9">
                        </div>
                        <div class="row form-group">
                            <label for="" class="col-2">Sustituto</label>
                            <input type="text" name="reemplazoDe" class="form-control col-md-9">
                        </div>
                        <div class="row form-group justify-content-center">
                            <button type="submit" class="btn btn-success col-md-9 off set-2">Guardar</button>
                        </div>
                    </div>
                </form>
                
            </div>

        </div>

    </div>
    <a class="btn btn-light btn-xs mt-5" href="{{url('/listarCultivos')}}">&laquo volver</a>

</div>
@endsection