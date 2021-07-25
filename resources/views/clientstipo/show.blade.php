@extends('layout')

@section('titulo', 'Tipo de Cliente | ' . $tipocli->tpc_descripcion)

@section('content')
<div class="container">
    <div class="bg-white p-5 shadow rounded mb-3">
        <h1 class="text-center bg-info shadow">
			{{ $tipocli->tpc_descripcion }}
        </h1>
        <a class="btn-dark btn-lg" href="{{ route('clitipos.index') }}">
            Regresar
        </a>
        <p class="text-secondary mt-3">
            Estado del Registro :
            <strong>
                {{ $tipocli->tpc_estado }}
            </strong>
        </p>
        <p class="text-black-50">
            Fecha de creación :
            <strong>
                {{ $tipocli->created_at->diffForHumans() }}
            </strong>
        </p>
        @auth
            <div class="mt-2 mb-2">
                <a class="btn-info btn-sm" role="button" href="{{ route('clitipos.edit', $tipocli) }}">
                    Editar
                </a>
                <a class="btn-danger btn-sm" role="button" href="#" onclick="document.getElementById('delete-tipocliente').submit()">
                    Eliminar
                </a>
            </div>
            <form id="delete-tipocliente" class="d-none" method="POST" action="{{ route('clitipos.destroy', $tipocli) }}">
                @csrf @method('DELETE')
            </form>
        @endauth
    </div>
</div>
@endsection
