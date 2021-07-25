@extends('layout')

@section('content')
<div class="row mx-5">
    <a class="btn-info btn-sm" href="{{ route("repormes.index") }}">
        Regresar
    </a>
</div>
<div class="text-center mx-5 display-5 shadow">
    Rol Mensual por Período - {{ $imd_periodo }} - {{ $imd_prove ?? '' }}
</div>
{{ dd($rolind[1]->impdet[0]) }}
<table style="width: 95%" class="mx-4 table table-striped">
    <thead>
        <tr>
            <th>
                Proveedor
            </th>
            <th>
                Identificador
            </th>
            <th class="text-center">
                Nombres Completos
            </th>
            <th>
                Costo Operacional
            </th>
            <th>
                Valor Consumo
            </th>
            <th class="text-center" width="250px">
                Crédito Meses
            </th>
        </tr>
    </thead>
    <tbody>
        @forelse($rolind[1] as $imprep)
        <tr>
            <td>
                {{ $imprep->imd_codigo_proveedor }}
            </td>
            <td>
                {{ $imprep->imd_identificador_cliente }}
            </td>
            <td>
                {{ $imprep->rol_nombres }}
            </td>
            <td class="text-right">
                {{ number_format($imprep->imd_costo_operacion, 2) }}
            </td>
            <td class="text-right">
                {{ number_format($imprep->imd_total, 2) }}
            </td>
            <td class="text-right">
                {{ $imprep->imd_credito_meses }}
            </td>
        </tr>
        @empty
        <tr>
            <td>
                No tenemos Datos para el Período Seleccionado
            </td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
