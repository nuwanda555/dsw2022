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
            <tr data-id='{{$cliente->id}}'>
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->empresa}}</td>
                <td>{{$cliente->contacto}}</td>
                <td>{{$cliente->cargo_contacto}}</td>
                <td><button class="btn btn-danger btn_borrar">Borrar</button></td>
            </tr>
            @endforeach
        </table>
    </div>

<script>
    $(document).ready(function(){
        $(".btn_borrar").click(function(e){
            e.preventDefault();
           
            //confirmar con sweetalert
            Swal.fire({
                title: '¿Estas seguro?',
                text: "No podras revertir esta accion",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borrar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    //redireccionar a la url
                    //borrar con ajax
                    const tr=$(this).closest("tr"); //tr más cercano al botón, o sea el tr que contiene al botón
                    const id=tr.data("id"); //obtener el id del tr
                    $.ajax({
                        url: "{{url('/clientes')}}/"+id,
                        method: "DELETE",
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(){
                            tr.fadeOut();
                        }
                    })
                }
            })    
        });
    });

    
</script>










@endsection