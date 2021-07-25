@extends('layout')

@section('titulo', 'Ingreso de Tipos de Cliente')

@section('content')
<div class="container">
    <h1 class="display-4 mt-2 text-center bg-info mb-4 shadow">
        Tipos de Cliente
    </h1>
    <div class="mb-2">
        @auth
            <a class="btn-primary btn-lg shadow" href="{{ route('clitipos.create') }}">
                Ingresar Tipo de Cliente
            </a>
        @endauth
    </div>
    <p>
        Búsqueda por Tipo de Cliente
    </p>
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <hr style="height: .75em;">
    <ul class="list-group mt-2" id="myList">
        @forelse ($tiposcli as $tipocli)
            <li class="border-0 mb-3 shadow-sm">
                <a class="text-secondary d-flex justify-content-between align-items-center text-info" href="{{ route('clitipos.show', $tipocli) }}">
                    <span class="font-weight-bold">
                        {{ $tipocli->tpc_descripcion }}
                    </span>
                    <span class="font-weight-bold">
                        {{ $tipocli->created_at->format('d-m-Y') }}
                    </span>
                </a>
            </li>
        @empty
            <li class="border-0 mb-3 shadow-sm">
                No hay Tipos de cliente que mostrar
            </li>
        @endforelse
        {{ $tiposcli->links() }}
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
