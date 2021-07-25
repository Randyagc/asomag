@extends("layout")

@section("titulo", "Crear Período")

@section("content")
<div class="container">
    <div class="mx-auto">
        @include("partials.validation-errors")
        <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route("periodos.store") }}">
            <h1 class="display-4 text-center bg-info shadow">
                Nuevo Período
            </h1>
            @include("periodos._form", ["btnText" => "Guardar"])
        </form>
    </div>
</div>
@endsection
