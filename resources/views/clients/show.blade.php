@extends('layout')

@section('titulo', $cliente->cli_nombre)

@section('content')
<div class="container">
    <div class="bg-white p-5 shadow rounded mb-3">
        <h1 class="text-center bg-info shadow">
			{{ $cliente->cli_nombre ?? 'No está presente la variable $cliente'}}
        </h1>
        <a class="btn-dark btn-lg" href="{{ route('clients.index') }}">
            Regresar
        </a>
        <p class="text-secondary mt-3">
            {{ $cliente->cli_apellido }}
        </p>
        <p class="text-secondary mt-3">
            {{ $cliente->created_at->diffForHumans() }}
        </p>
        @auth
            <div class="mt-2 mb-2">
                <a class="btn-info btn-sm" href="{{ route('clients.edit', $cliente) }}">
                    Editar
                </a>
                <a class="btn-danger btn-sm" href="#" onclick="document.getElementById('delete-cliente').submit()">
                    Eliminar
                </a>
            </div>
            <form id="delete-cliente" class="d-none" method="POST" action="{{ route('clients.destroy', $cliente) }}">
                @csrf @method('DELETE')
            </form>
        @endauth
    </div>
</div>
@endsection
