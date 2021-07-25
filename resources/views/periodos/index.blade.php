@extends("layout")

@section("titulo", "Ingreso de Períodos")

@section("content")
<div class="container">
    <h1 class="display-4 mt-2 text-center bg-info mb-4 shadow">
        Períodos
    </h1>
    <div class="mb-2">
        @auth
            <a class="btn-primary btn-lg shadow" href="{{ route("periodos.create") }}">
                Crear Período
            </a>
        @endauth
    </div>
    <hr style="height: .75em;">
    <p>
        Búsqueda por Período
    </p>
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <hr>
    <ul class="list-group mt-2" id="myList">
        @forelse ($periodos as $periodo)
            <li class="border-0 mb-3 shadow-sm">
                <a class="text-secondary d-flex justify-content-between align-items-center text-info" href="{{ route('periodos.show', $periodo) }}">
                    <span class="font-weight-bold">
                        {{ $periodo->per_descripcion }}
                    </span>
                    <span class="font-weight-bold">
                        {{ $periodo->per_periodo }}
                    </span>
                    <span class="font-weight-bold">
                        {{ $periodo->created_at->format("d-m-y") }}
                    </span>
                </a>
            </li>
        @empty
            <li class="border-0 mb-3 shadow-sm">
                No hay Períodos que mostrar
            </li>
        @endforelse
        {{ $periodos->links() }}
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
