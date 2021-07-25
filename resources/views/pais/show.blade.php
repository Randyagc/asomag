@extends('layout')

@section('titulo', 'Pais')

@section('content')
<div class="container">
    <div class="bg-white p-5 shadow rounded mb-3">
        <h1  class="text-center bg-info shadow">
            {{ $pais->pai_nacionalidad }}
        </h1>
        <a class="btn-dark btn-lg" href="{{ route('pais.index') }}">
            Regresar
        </a>
        <p class="text-secondary mt-3">
            Código Internacional :
            <strong>
                {{ $pais->pai_cod_internacional }}
            </strong>
        </p>
        <p class="text-black-50">
            Fecha de creación :
            <strong>
                {{ $pais->created_at->diffForHumans() }}
            </strong>
        </p>
        @auth
            <div class="mt-2 mb-2">
                <a class="btn-info btn-sm" role="button" href="{{ route('pais.edit', $pais) }}">
                    Editar
                </a>
                <a class="btn-danger btn-sm"  role="button" href="#" onclick="document.getElementById('delete-pais').submit()">
                    Eliminar
                </a>
                <form id="delete-pais" class="d-none" method="POST" action="{{ route('pais.destroy', $pais) }}">
                    @csrf @method('DELETE')
                </form>
            </div>
        @endauth
	</div>
</div>
@endsection

