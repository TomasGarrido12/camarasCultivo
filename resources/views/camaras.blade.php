@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-2">
    <div class="sidenav">
      <ul>
        <li>
          <a class="open" href="#">Camara 1</a>
          <ul class="subMenu">
            <li><a class="productoCamaraUno" href="#">Producto</a></li>
            <li><a class="cultivoCamaraUno" href="#">Cultivo</a></li>
            <li><a class="fechasCamaraUno" href="#">Fechas</a></li>
            <li><a class="oTCamaraUno" href="#">Orden de Trabajo</a></li>
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
    <table class="tablaCultivoCamaraUno">
      <tr>
        <th></th>
        <th style="width: 70%">Cultivo Camara Uno</th>
      </tr>
      <tr>
        <td>Nombre vulgar</td>
        <td><input type="text" /></td>
        <td><i class="fas fa-plus-square" style="color: green"></i></td>
      </tr>
      <tr>
        <td>Nombre cientifico</td>
        <td><input type="text" /></td>
      </tr>
      <tr>
        <td>Clasificacion</td>
        <td><input type="text" /></td>
      </tr>
      <tr>
        <td>Reemplaza a</td>
        <td><input type="text" /></td>
      </tr>
      <tr>
        <td>Semillas sembradas</td>
        <td><input type="text" /></td>
      </tr>
    </table>
    <table class="tablaProductoCamaraUno">
      <tr >
        <th></th>
        <th style="width: 70%">Producto Camara Uno</th>
      </tr>
      <tr>
        <td>Nombre:</td>
        <td><input type="text" /></td>
      </tr>
      <tr>
        <td>Descripción:</td>
        <td><input type="text" /></td>
      </tr>
      <tr>
        <td>Plantas objetivo:</td>
        <td><input type="text" /></td>
      </tr>
      <tr>
        <td>Modo de acción:</td>
        <td><input type="text" /></td>
      </tr>
      <tr>
        <td>Tiempo de acción:</td>
        <td><input type="text" /></td>
      </tr>
    </table>
    <table class="tablaFechasCamaraUno">
      <tr>
        <th></th>
        <th style="width: 70%">Fechas Camara Uno</th>
      </tr>
      <tr>
        <td>Armado de OT:</td>
        <td><input type="date" /></td>
      </tr>
      <tr>
        <td>Sembrado:</td>
        <td><input type="date" /></td>
      </tr>
      <tr>
        <td>Aplicado:</td>
        <td><input type="date" /></td>
      </tr>
      <tr>
        <td>Cortado:</td>
        <td><input type="date" /></td>
      </tr>
      <tr>
        <td>Duracion estimada:</td>
        <td><input type="date" /></td>
      </tr>
    </table>
    <div class="tablaFotosCamaraUno" style="display: none">
      <label for="">Agrega foto</label><input type="file" name="" id="">
    </div>
    <table class="tablaCultivoCamaraDos" style="display: none">
      <tr>
        <th></th>
        <th style="width: 70%">Cultivo Camara Dos</th>
      </tr>
      <tr>
        <td>Nombre vulgar</td>
        <td><input type="text" /></td>
      </tr>
      <tr>
        <td>Nombre cientifico</td>
        <td><input type="text" /></td>
      </tr>
      <tr>
        <td>Clasificacion</td>
        <td><input type="text" /></td>
      </tr>
      <tr>
        <td>Reemplaza a</td>
        <td><input type="text" /></td>
      </tr>
      <tr>
        <td>Semillas sembradas</td>
        <td><input type="text" /></td>
      </tr>
    </table>
    <table class="tablaProductoCamaraDos" style="display: none">
      <tr>
        <th></th>
        <th style="width: 70%">Producto Camara Dos</th>
      </tr>
      <tr>
        <td>Nombre:</td>
        <td><input type="text" /></td>
      </tr>
      <tr>
        <td>Descripción:</td>
        <td><input type="text" /></td>
      </tr>
      <tr>
        <td>Plantas objetivo:</td>
        <td><input type="text" /></td>
      </tr>
      <tr>
        <td>Modo de acción:</td>
        <td><input type="text" /></td>
      </tr>
      <tr>
        <td>Tiempo de acción:</td>
        <td><input type="text" /></td>
      </tr>
    </table>
    <table class="tablaFechasCamaraDos" style="display: none">
      <tr>
        <th></th>
        <th style="width: 70%">Fechas Camara Dos</th>
      </tr>
      <tr>
        <td>Armado de OT:</td>
        <td><input type="date" /></td>
      </tr>
      <tr>
        <td>Sembrado:</td>
        <td><input type="date" /></td>
      </tr>
      <tr>
        <td>Aplicado:</td>
        <td><input type="date" /></td>
      </tr>
      <tr>
        <td>Cortado:</td>
        <td><input type="date" /></td>
      </tr>
      <tr>
        <td>Duracion estimada:</td>
        <td><input type="date" /></td>
      </tr>
    </table>
    <div class="tablaFotosCamaraDos" style="display: none">
      <label for="">Agrega foto</label><input type="file" name="" id="">
    </div>
  </div>
</div>
@endsection