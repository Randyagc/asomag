@extends("layout")

@section("titulo", "Ëditar Periodo")

@section("content")
<div class="container">
    <div class="mx-auto">
        @include("partials.validation-errors")
        <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route("periodos.update", $periodo) }}">
            @method("PATCH")
            <h1 class="display-4 text-center bg-info shadow">
                Editar Período
            </h1>
            <hr>
            @include("periodos._form", ["btnText" => "Actualizar"])
        </form>
    </div>
</div>
@endsection
