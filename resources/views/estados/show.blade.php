@extends('layout')

@section('titulo', 'Estado Registro | ' . $estado->est_descripcion)

@section('content')
<div class="container">
    <div class="bg-white p-5 shadow rounded mb-3">
        <h1 class="text-center bg-info shadow">
			{{ $estado->est_descripcion }}
        </h1>
        <a class="btn-dark btn-lg" href="{{ route("estados.index") }}">
            Regresar
        </a>
        <p class="text-secondary mt-3">
            Estado del Registro :
            <strong>
                {{ $estado->est_estado }}
            </strong>
        </p>
        <p class="text-black-50">
            Fecha de creación :
            <strong>
                {{ $estado->created_at->diffForHumans() }}
            </strong>
        </p>
        @auth
            <div class="mt-2 mb-2">
                <a class="btn-info btn-sm" role="button" href="{{ route('estados.edit', $estado) }}">
                    Editar
                </a>
                <a class="btn-danger btn-sm" role="button" href="#" onclick="document.getElementById('delete-estado').submit()">
                    Eliminar
                </a>
                <form id="delete-estado" class="d-none" method="POST" action="{{ route('estados.destroy', $estado) }}">
                    @csrf @method('DELETE')
                </form>
            </div>
        @endauth
	</div>
</div>
@endsection
