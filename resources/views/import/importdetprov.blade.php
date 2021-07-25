@extends("layout")

@section("titulo", "Importar Detalle de Proveedores")

@section("content")
<h3 align="center" style="font-weight: bold;">
    Importar Archivo Detalle de Proveedores - Formato EXCEL
</h3>

<form action="{{ route('importdet.importdetprov') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mt-4 mx-5">
        <label for="imd_proveedor">
            <i>Proveedor</i>
        </label>
        <select name="imd_proveedor" id="imd_proveedor" class="form-control border-0 bg-yellow shadow-sm">
            <option>
                Seleccione el Proveedor para trabajar
            </option>
            @foreach($clientes as $cliente)
                <option style="font-color: #34de;" value="{{ $cliente->id }}">
                    {{ $cliente->cli_nombre }} : {{ $cliente->cli_apellido }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="row mt-4 mx-5">
        <label for="imd_periodo">
            <i>Período</i>
        </label>
        <select name="imd_periodo" id="imd_periodo" class="form-control border-0 bg-yellow shadow-sm">
            <option>
                Seleccione el Período para trabajar
            </option>
            @foreach($periodos as $periodo)
                <option style="font-color: #34de;" value="{{ $periodo->per_periodo }}">
                    {{ $periodo->per_descripcion }} : {{ $periodo->per_periodo }}
                </option>
            @endforeach
        </select>
    </div>
    <input type="hidden" name="imd_descripcion" value="Ingreso Detalles Proveedor">
    <input type="hidden" name="imd_estado" value="ACT">
    <input type="hidden" name="imd_user" value="{{ Auth::user()->id }}">
    <div class="form-group mt-4 mx-5">
        <input class="form-control" type="file" name="file">
    </div>
    <button class="btn-primary shadow mx-5">
        Importar Detalle Proveedores
    </button>
</form>
@endsection
