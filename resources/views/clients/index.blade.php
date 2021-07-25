@extends('layout')

@section('titulo', 'Ingreso de Clientes')

@section('content')
<div class="container">
    <h1 class="display-4 mt-2 text-center bg-info mb-4 shadow">
        Clientes
    </h1>
    <div class="mb-2">
        @auth
            <a class="btn-primary btn-lg shadow"" href="{{ route('clients.create') }}">
                Ingresar Clientes
            </a>
        @endauth
    </div>
    <hr style="height: .75rem;">
    <p>Búsqueda por Nombre del Cliente</p>
    <input class="form-control" id="myInput" type="text" placeholder="Escribe nombre ... ">
    <hr>
    <ul class="list-group" id="myList">
        @forelse ($clientes as $cliente)
            <li class="border-0 mb-3 shadow">
                <a class="text-secondary d-flex justify-content-between align-items-center text-info" href="{{ route('clients.show', $cliente) }}">
                    <span class="font-weight-bold">
                        {{ $cliente->cli_nombre }} - {{ $cliente->cli_apellido }}
                    </span>
                    <span class="font-weight-bold">
                        {{ $cliente->created_at->format('d-m-Y') }}
                    </span>
                </a>
            </li>
        @empty
            <li class="border-0 mb-3 shadow-md">
                No hay clientes que mostrar
            </li>
        @endforelse
        {{ $clientes->links() }}
    </ul>
</div>
<script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myList li").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
</script>
@endsection
