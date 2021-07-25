@extends("layout")

@section("titulo", "Importar Rol Mensual MAG")

@section("content")
<h3 align="center" style="font-weight: bold;">
    Importar Archivo Rol Mensual MAG - Formato EXCEL
</h3>

<form action="{{ route('importrol.importrol') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mt-4 mx-5">
        <label for="rol_fecha_ingreso">
            Fecha del Archivo
        </label>
        <input type="date" name="rol_fecha_ingreso" id="rol_fecha_ingreso">
    </div>
    <div class="row mt-4 mx-5">
        <label for="rol_periodo">
            <i>Período</i>
        </label>
        <select name="rol_periodo" id="rol_periodo" class="form-control border-0 bg-yellow shadow-sm">
            <option>
                Seleccione el Período para trabajar
            </option>
            @forelse($periodos as $periodo)
                <option style="font-color: #34de;" value="{{ $periodo->per_periodo }}">
                    {{ $periodo->per_descripcion }}. - .{{ $periodo->per_periodo }}
                </option>
            @empty
                <p class="text-center">
                    No tenemos Períodos para mostrar
                </p>
            @endforelse
        </select>
    </div>
    <input type="hidden" name="rol_cod_desc" value="Mix">
    <input type="hidden" name="rol_descripcion" value="Ingreso RoL Mensual MAG">
    <input type="hidden" name="rol_estado" value="ACT">
    <input type="hidden" name="rol_user" value="{{ Auth::user()->id }}">
    <div class="form-group mt-4 mx-5">
        <input class="form-control" type="file" name="file">
    </div>
    <button class="btn-primary shadow mx-5">
        Importar Rol MAG
    </button>
</form>
@endsection
