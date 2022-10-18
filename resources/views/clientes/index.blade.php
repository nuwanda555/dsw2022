@extends('layouts.app')

@section("contenido")
    <h1>Esto es un listado de clientes buenos</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{route('clientes.create')}}" class="btn btn-success mb-3">Crear cliente</a>
            </div>
        </div>
        <table class="table table-striped table-bordered">
            <tr>
                <th>Codigo</th>
                <th>Empresa</th>
                <th>Contacto</th>
                <th>Cargo</th>
                <th>Borrar</th>
            </tr>
            @foreach ($clientes as $cliente)
            <tr>
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->empresa}}</td>
                <td>{{$cliente->contacto}}</td>
                <td>{{$cliente->cargo_contacto}}</td>
                <td><a href="/clientes/borrar/{{$cliente->id}}">Borrar</a></td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection