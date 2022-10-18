@extends('layouts.app')

@section("contenido")
    <h1>Crear un cliente</h1>

    <form action="{{route('clientes.store')}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="codigo">Codigo</label>
            <input type="text" name="codigo" id="codigo" class="form-control">
        </div>
        <div class="form-group">
            <label for="empresa">Empresa</label>
            <input type="text" name="empresa" id="empresa" class="form-control">
        </div>
        <div class="form-group">
            <label for="contacto">Contacto</label>
            <input type="text" name="contacto" id="contacto" class="form-control">
        </div>
        <div class="form-group">
            <label for="cargo_contacto">Cargo</label>
            <input type="text" name="cargo_contacto" id="cargo_contacto" class="form-control">
        </div>
        <div class="form-group">
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" id="direccion" class="form-control">
        </div>

        <input type="submit" value="Crear cliente" class="btn btn-success">
        <input type="reset" value="Limpiar formulario" class="btn btn-warning">

</form>





@endsection




