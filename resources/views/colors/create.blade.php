@extends("layout")

@section("titulo", "Crear Color")

@section("content")
<div class="container">
    <div class="mx-auto">
        @include("partials.validation-errors")
        <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route("colores.store") }}">
            <h1 class="display-4 text-center bg-info shadow">
                Nuevo Color
            </h1>
            @include("colors._form", ["btnText" => "Guardar"])
        </form>
    </div>
</div>
@endsection
