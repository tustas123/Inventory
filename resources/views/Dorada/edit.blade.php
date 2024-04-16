@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Registro Dorada</h1>
@stop

@section('content')
<form action="/dorada/{{ $dorada->id }}" method="POST">
    @csrf
    @method('PUT')


  <div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="codigo" name="codigo" type="text" class="form-control" value="{{$dorada->id}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Departamento</label>
    <input id="departamento" name="departamento" type="text" class="form-control" value="{{$dorada->departamento}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Area</label>
    <input id="area" name="area" type="text" class="form-control" value="{{$dorada->area}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Usuario</label>
    <input id="usuario" name="usuario" type="text"  class="form-control" value="{{$dorada->userresp}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo/Equipo</label>
    <input id="tipoequipo" name="tipoequipo" type="text" class="form-control" value="{{$dorada->tipoequipo}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Marca/Tipo</label>
    <input id="marca" name="marca" type="text" class="form-control" value="{{$dorada->marcatipo}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Procesador</label>
    <input id="procesador" name="procesador" type="text" class="form-control" value="{{$dorada->procesador}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">RAM</label>
    <input id="ram" name="ram" type="number" step="any" value="0" class="form-control" value="{{$dorada->ran}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Almacenamiento</label>
    <input id="almacenamiento" name="almacenamiento" type="number" step="any" value="0" class="form-control" value="{{$dorada->almacenamiento}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Comentarios</label>
    <input id="comentario" name="comentario" type="text" class="form-control" value="{{$dorada->comentarios}}">
  </div>
  <a href="/dorada" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
