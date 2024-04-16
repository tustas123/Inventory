@extends('adminlte::page')

@section('title', 'Form Ingresar Fuertes')

@section('content_header')
    <h1>Ingresar Inventario Fuertes</h1>
@stop

@section('content')
    <form action="/fuerte" method="POST">
        @csrf
    <div class="mb-3">
        <label for="" class="form-label">Código</label>
        <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Departamento</label>
        <input id="departamento" name="departamento" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Area</label>
        <input id="area" name="area" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Usuario</label>
        <input id="usuario" name="usuario" type="text"  class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tipo/Equipo</label>
        <input id="tipoequipo" name="tipoequipo" type="text" class="form-control" tabindex="5">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Marca/Tipo</label>
        <input id="marca" name="marca" type="text" class="form-control" tabindex="6">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Procesador</label>
        <input id="procesador" name="procesador" type="text" class="form-control" tabindex="7">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">RAM</label>
        <input id="ram" name="ram" type="number" step="any" value="0" class="form-control" tabindex="8">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Almacenamiento</label>
        <input id="almacenamiento" name="almacenamiento" type="number" step="any" value="0" class="form-control" tabindex="9">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Comentarios</label>
        <input id="comentario" name="comentario" type="text" class="form-control" tabindex="10">
    </div>
    <a href="/fuerte" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
