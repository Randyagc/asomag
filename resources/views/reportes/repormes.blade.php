@extends('layout')

@section('titulo', 'Reporte Rol Mensual')

@section('content')
<div class="container">
    <p class="form-group mt-4 mx-4 text-center">
        <label class="display-4" for="imd_periodo">
            <i>
                Rol Mensual por Período
            </i>
        </label>
        <select class="form-control border-10 bg-lightblue shadow-sm" form="repmes" name="imd_periodo" id="imd_periodo" size="2">
            <option>
                Seleccione el Período para Generar el Reporte
            </option>
            @forelse($periodos as $periodo)
            <option style="font-color: #34de;">
                {{ $periodo->per_periodo }}
            </option>
            @empty
            <p class="text-center">
                No hay períodos para mostrar
            </p>
            @endforelse
        </select>
        <select class="form-control border-10 bg-lightblue shadow-sm" form="repmes" name="imd_prove" id="imd_provee" size="2">
            <option>
                Seleccione el Proveedor para Generar el Reporte
            </option>
            @forelse($clientes as $cliente)
            <option style="font-color: #34de;" value="{{ $cliente->id }} : {{ $cliente->cli_apellido }}">
                {{ $cliente->cli_nombre }} : {{ $cliente->cli_apellido }}
            </option>
            @empty
            <p class="text-center">
                No hay Proveedores para mostrar
            </p>
            @endforelse
        </select>
    </p>
    <form id="repmes" action="{{ route("repormes.show", $periodo->per_periodo ) }}" method="GET">
        <div class="bg-white p-5 shadow rounded mb-3">
            <input type="submit" value="Enviar" class="btn-primary">
        </div>
    </form>
</div>
@endsection
