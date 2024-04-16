@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Registro San Angel</h1>
@stop

@section('content')
<form action="/sanangel/{{ $sanangel->id }}" method="POST">
    @csrf
    @method('PUT')


  <div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="codigo" name="codigo" type="text" class="form-control" value="{{$sanangel->id}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Departamento</label>
    <input id="departamento" name="departamento" type="text" class="form-control" value="{{$sanangel->departamento}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Area</label>
    <input id="area" name="area" type="text" class="form-control" value="{{$sanangel->area}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Usuario</label>
    <input id="usuario" name="usuario" type="text"  class="form-control" value="{{$sanangel->userresp}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo/Equipo</label>
    <input id="tipoequipo" name="tipoequipo" type="text" class="form-control" value="{{$sanangel->tipoequipo}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Marca/Tipo</label>
    <input id="marca" name="marca" type="text" class="form-control" value="{{$sanangel->marcatipo}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Procesador</label>
    <input id="procesador" name="procesador" type="text" class="form-control" value="{{$sanangel->procesador}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">RAM</label>
    <input id="ram" name="ram" type="number" step="any" value="0" class="form-control" value="{{$sanangel->ran}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Almacenamiento</label>
    <input id="almacenamiento" name="almacenamiento" type="number" step="any" value="0" class="form-control" value="{{$sanangel->almacenamiento}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Comentarios</label>
    <input id="comentario" name="comentario" type="text" class="form-control" value="{{$sanangel->comentarios}}">
  </div>
  <a href="/sanangel" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
