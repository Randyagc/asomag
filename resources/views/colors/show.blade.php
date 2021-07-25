@extends("layout")

@section("titulo", "Color")

@section("content")
<div class="container">
    <div class="bg-white p-5 shadow rounded mb-3">
        <h1 class="text-center bg-info shadow">
            {{ $color->col_descripcion }}
        </h1>
        <a class="btn-dark btn-lg" href="{{ route("colores.index") }}">
            Regresar
        </a>
        <p class="text-secondary mt-3">
            Estado del Registro :
            <strong>
                {{ $color->col_estado }}
            </strong>
        </p>
        <p class="text-black-50">
            Fecha de creación :
            <strong>
                {{ $color->created_at->diffForHumans() }}
            </strong>
        </p>
        @auth
            <div class="mt-2 mb-2">
                <a class="btn-info btn-sm" role="button" href="{{ route("colores.edit", $color) }}">
                    Editar
                </a>
                <a class="btn-danger btn-sm" role="button" href="#" onclick="document.getElementById('delete-color').submit()">
                    Eliminar
                </a>
                <form id="delete-color" class="d-none" method="POST" action="{{ route("colores.destroy", $color) }}">
                    @csrf @method("DELETE")
                </form>
            </div>
        @endauth
    </div>
</div>
@endsection
