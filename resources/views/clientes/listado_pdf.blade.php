<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<h1>Listado de clintes</h1>
<table class="table table-bordered table-bordered table-striped">
<tr>
    <th>Codigo</th>
    <th>Empresa</th>
    <th>Contacto</th>
    <th>Cargo</th>
</tr>
@foreach ($clientes as $cliente)
    <tr>
        <td>{{$cliente->id}}</td>
        <td>{{$cliente->empresa}}</td>
        <td>{{$cliente->contacto}}</td>
        <td>{{$cliente->cargo_contacto}}</td>
    </tr>
@endforeach

</table>