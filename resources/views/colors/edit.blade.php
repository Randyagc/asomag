@extends("layout")

@section("titulo", "Ëditar Color")

@section("content")
<div class="container">
    <div class="mx-auto">
        @include("partials.validation-errors")
        <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route("colores.update", $color) }}">
            @method("PATCH")
            <h1 class="display-4 text-center bg-info shadow">
                Editar Color
            </h1>
            <hr>
            @include("colors._form", ["btnText" => "Actualizar"])
        </form>
    </div>
</div>
@endsection
