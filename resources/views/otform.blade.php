@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">
        <!--Mensaje flash -->
        @if(session("otGuardado"))
            <div class="alert alert-success">
                {{session("otGuardado")}}
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
            <form action="{{url("/saveOt")}}" method="POST">
                @csrf
                    <div class="card-header text-center">AGREGAR ORDEN DE TRABAJO</div>
                    <div class="card-body">
                        <div class="row form-group">
                            <label for="" class="col-2">Fecha de creacion</label>
                            <input type="date" name="fechaDeCreacion" class="form-control col-md-9">
                        </div>
                        <div class="row form-group">
                            <label for="" class="col-2">Quien lo hizo</label>
                            <input type="text" name="quienLoHizo" class="form-control col-md-9">
                        </div>
                        <div class="row form-group">
                            <label for="" class="col-2">Duracion</label>
                            <input type="date" name="duracionEstimada" class="form-control col-md-9">
                        </div>
                        <div class="row form-group">
                            <label for="" class="col-2">Siembra</label>
                            <input type="date" name="sembrado" class="form-control col-md-9">
                        </div>
                        <div class="row form-group">
                            <label for="" class="col-2">Aplicado</label>
                            <input type="date" name="aplicado" class="form-control col-md-9">
                        </div>
                        <div class="row form-group">
                            <label for="" class="col-2">Cortado</label>
                            <input type="date" name="cortado" class="form-control col-md-9">
                        </div>
                        <div class="row form-group justify-content-center">
                            <button type="submit" class="btn btn-success col-md-9 off set-2">Guardar</button>
                        </div>
                    </div>
                </form>
                
            </div>

        </div>

    </div>
    <a class="btn btn-light btn-xs mt-5" href="/listarOt">&laquo volver</a>

</div>
@endsection