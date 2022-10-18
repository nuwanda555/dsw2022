<h1>Esto es un listado de clientes</h1>
{{-- usar bootstrap --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


<div class="container">
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
            <td><a href="/borrar/{{$cliente->id}}">Borrar</a></td>
        </tr>
        @endforeach
    </table>
</div>