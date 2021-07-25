@extends('layout')

@section('titulo', 'Ingreso de Paises')

@section('content')
<div class="container">
    <h1 class="display-4 mt-2 text-center bg-info mb-4 shadow">
        Paises
    </h1>
    <div class="mb-2">
        @auth
            <a class="btn-primary btn-lg shadow" href="{{ route('pais.create') }}">
                Crear Pais
            </a>
        @endauth
    </div>
    <hr style="height: .75em;">
    <p>
        Búsqueda por Pais
    </p>
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <hr>
    <ul class="list-group" id="myList">
        @forelse ($paises as $pais)
            <li class="border-0 mb-3 shadow-sm">
                <a class="text-secondary d-flex justify-content-between align-items-center text-info" href="{{ route('pais.show', $pais) }}">
                    <span class="font-weight-bold">
                        {{ $pais->pai_descripcion }}
                    </span>
                    <span class="font-weight-bold">
                        {{ $pais->created_at->format('d-m-Y') }}
                    </span>
                </a>
            </li>
        @empty
            <li class="border-0 mb-3 shadow-md">
                No hay Paises que mostrar
            </li>
        @endforelse
        {{ $paises->links() }}
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
