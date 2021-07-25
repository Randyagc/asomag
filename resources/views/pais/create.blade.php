@extends('layout')

@section('titulo', 'Crear Pais')

@section('content')
<div class="container">
    <div class="mx-auto">
        @include('partials.validation-errors')
        <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('pais.store') }}">
            <h1 class="display-4 text-center bg-info shadow">
                Nuevo Pais
            </h1>
            @include('pais._form', ['btnText' => 'Guardar'])
        </form>
    </div>
</div>
@endsection
