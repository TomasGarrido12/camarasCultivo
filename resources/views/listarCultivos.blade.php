@extends('layouts.app')
@section('content')
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-5">Cultivos</h2>
            <a class="btn btn-success mb-4" href="{{url("/form") }}">Agregar cultivo</a>

            <table class="table table-bordered table-striped text-center" style="background-color: white">
                <thead>
                    <tr>
                        <th>Nombre Vulgar</th>
                        <th>Nombre Cientifico</th>
                        <th>Reemplazo a</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cultivos as $cultivo)
                    <tr>
                        <td>{{$cultivo->nombreVulgar}}</td>
                        <td>{{$cultivo->nombreCientifico}}</td>
                        <td>{{$cultivo->reemplazoDe}}</td>
                    </tr>
                    @endforeach
                </tbody>


            </table>
            


        </div>

    </div>



</div>
@endsection