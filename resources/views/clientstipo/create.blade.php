@extends('layout')

@section('titulo', 'Crear Tipo de Cliente')

@section('content')
    <div class="container">
        @include('partials.validation-errors')
        <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('clitipos.store') }}">
            <h1 class="display-4" style="text-align: center; background-color: #99afde;">
                Nuevo Tipo de Cliente
            </h1>
            <hr>
            @include('clientstipo._form', ['btnText' => 'Guardar'])
        </form>
    </div>
@endsection
