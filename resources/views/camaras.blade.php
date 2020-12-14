@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-2">
    <div class="sidenav">
      <ul>
        <li>
          <a class="open" href="#">Camara 1</a>
          <ul class="subMenu">
            <li><a class="productoCamaraUno" href="{{url("/listarProductos") }}">Producto</a></li>
            <li><a class="cultivoCamaraUno" href="{{url("/listarCultivos") }}">Cultivo</a></li>
          <li><a class="oTCamaraUno" href="{{url("/listarOt")}}">Orden de Trabajo</a></li>
            <li><a class="fotosCamaraUno"  href="#">Fotos</a></li>
          </ul>
        </li>
        <li>
          <a class="open" href="#">Camara 2</a>
          <ul class="subMenu">
            <li><a class="productoCamaraDos" href="#">Producto</a></li>
            <li><a class="cultivoCamaraDos" href="#">Cultivo</a></li>
            <li><a class="fechasCamaraDos" href="#">Fechas</a></li>
            <li><a class="oTCamaraDos" href="#">Orden de Trabajo</a></li>
            <li><a class="fotosCamaraDos"  href="#">Fotos</a></li>
          </ul>
        </li>
        <li>
          <a class="open" href="#">Camara 3</a>
          <ul class="subMenu">
            <li><a class="productoCamaraTres" href="#">Producto</a></li>
            <li><a class="cultivoCamaraTres" href="#">Cultivo</a></li>
            <li><a class="fechasCamaraTres" href="#">Fechas</a></li>
            <li><a class="oTCamaraTres" href="#">Orden de Trabajo</a></li>
            <li><a class="fotosCamaraTres"  href="#">Fotos</a></li>
          </ul>
        </li>
        <li>
          <a class="open" href="#">Camara 4</a>
          <ul class="subMenu">
            <li><a class="productoCamaraCuatro" href="#">Producto</a></li>
            <li><a class="cultivoCamaraCuatro" href="#">Cultivo</a></li>
            <li><a class="fechasCamaraCuatro" href="#">Fechas</a></li>
            <li><a class="oTCamaraCuatro" href="#">Orden de Trabajo</a></li>
            <li><a class="fotosCamaraCuatro"  href="#">Fotos</a></li>
          </ul>
        </li>
        <li>
          <a class="open" href="#">Camara 5</a>
          <ul class="subMenu">
            <li><a class="productoCamaraCinco" href="#">Producto</a></li>
            <li><a class="cultivoCamaraCinco" href="#">Cultivo</a></li>
            <li><a class="fechasCamaraCinco" href="#">Fechas</a></li>
            <li><a class="oTCamaraCinco" href="#">Orden de Trabajo</a></li>
            <li><a class="fotosCamaraCinco"  href="#">Fotos</a></li>
          </ul>
        </li>
        <li>
          <a class="open" href="#">Camara 6</a>
          <ul class="subMenu">
            <li><a class="productoCamaraSeis" href="#">Producto</a></li>
            <li><a class="cultivoCamaraSeis" href="#">Cultivo</a></li>
            <li><a class="fechasCamaraSeis" href="#">Fechas</a></li>
            <li><a class="oTCamaraSeis" href="#">Orden de Trabajo</a></li>
            <li><a class="fotosCamaraSeis"  href="#">Fotos</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <div class="col-10">
    <div class="tablaFotosCamaraDos" style="display: none">
      <label for="">Agrega foto</label><input type="file" name="" id="">
    </div>
  </div>
</div>
@endsection