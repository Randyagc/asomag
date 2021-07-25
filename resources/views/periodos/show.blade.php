@extends("layout")

@section("titulo", "Período")

@section("content")
<div class="container">
    <div class="bg-white p-5 shadow rounded mb-3">
        <h1 class="text-center bg-info shadow">
            {{ $periodo->per_descripcion }}
        </h1>
        <a class="btn-dark btn-lg" href="{{ route("periodos.index") }}">
            Regresar
        </a>
        <p class="text-secondary mt-3">
            Estado del Registro :
            <strong>
                {{ $periodo->per_estado }}
            </strong>
        </p>
        <p class="text-black-50">
            Fecha de creación :
            <strong>
                {{ $periodo->created_at->diffForHumans() }}
            </strong>
        </p>
        @auth
            <div class="mt-2 mb-2">
                <a class="btn-info btn-sm" role="button" href="{{ route("periodos.edit", $periodo) }}">
                    Editar
                </a>
                <a class="btn-danger btn-sm" role="button" href="#" onclick="document.getElementById('delete-periodo').submit()">
                    Eliminar
                </a>
                <form id="delete-periodo" class="d-none" method="POST" action="{{ route("periodos.destroy", $periodo) }}">
                    @csrf @method("DELETE")
                </form>
            </div>
        @endauth
    </div>
</div>
@endsection
