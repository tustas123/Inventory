@extends('adminlte::page')

@section('title', 'CRUD Serdan')

@section('content_header')
    <h1>Stella Serdan</h1>
@stop

@section('content')
<a href="serdan/create" class="btn btn-primary">CREAR</a>

<table id="serdan" class="table table-striped table-border shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Departamento</th>
            <th scope="col">Area</th>
            <th scope="col">Usuario</th>
            <th scope="col">Tipo/Equipo</th>
            <th scope="col">Marca/Tipo</th>
            <th scope="col">Precesador</th>
            <th scope="col">RAM</th>
            <th scope="col">Almacenamiento</th>
            <th scope="col">Comentarios</th>
            <th scope="col">Acciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($serdans as $serdan)
        <tr>
            <td>{{ $serdan->id }}</td>
            <td>{{ $serdan->departamento }}</td>
            <td>{{ $serdan->area }}</td>
            <td>{{ $serdan->userresp }}</td>
            <td>{{ $serdan->tipoequipo }}</td>
            <td>{{ $serdan->marcatipo }}</td>
            <td>{{ $serdan->procesador }}</td>
            <td>{{ $serdan->ram }}</td>
            <td>{{ $serdan->almacenamiento }}</td>
            <td>{{ $serdan->comentarios }}</td>
            <td>
                <form action="{{ route('serdan.destroy',$serdan->id) }}" method="POST">
                 <a href="/serdan/{{$serdan->id}}/edit" class="btn btn-info">Editar</a>
                     @csrf
                     @method('DELETE')
                 <button type="submit" class="btn btn-danger">Delete</button>
                </form>
               </td>
        </tr>

        @endforeach
    </tbody>

</table>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>

    <script>
        new DataTable('#serdan');
    </script>
@stop
