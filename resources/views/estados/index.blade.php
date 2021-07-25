@extends('layout')

@section('titulo', 'Ingreso de Estados')

@section('content')
<div class="container">
    <h1 class="display-4 mt-2 text-center bg-info mb-4 shadow">
        Estados del Registro
    </h1>
    <div class="mb-2">
        @auth
            <a class="btn-primary btn-lg shadow" href="{{ route('estados.create') }}">
                Ingresar Estados
            </a>
        @endauth
    </div>
    <hr style="height: .75em;">
    <p>
        Búsqueda por Estados del Pregistro
    </p>
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <hr>
    <ul class="list-group mt-2" id="myList">
        @forelse ($estados as $estado)
            <li class="border-0 mb-3 shadow-sm">
                <a class="text-secondary d-flex justify-content-between align-items-center text-info" href="{{ route('estados.show', $estado) }}">
                    <span class="font-weight-bold">
                        {{ $estado->est_descripcion }}
                    </span>
                    <span class="font-weight-bold">
                        {{ $estado->created_at->format('d-m-Y') }}
                    </span>
                </a>
            </li>
        @empty
            <li class="border-0 mb-3 shadow-md">
                No hay Estados que mostrar
            </li>
        @endforelse
        {{ $estados->links() }}
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
