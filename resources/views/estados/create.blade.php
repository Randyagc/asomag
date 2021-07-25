@extends('layout')

@section('titulo', 'Crear Estado Registro')

@section('content')
<div class="container">
    <div class="mx-auto">
        @include('partials.validation-errors')
        <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('estados.store') }}">
            <h1 class="display-4 text-center bg-info shadow">
                Nuevo Estado
            </h1>
            @include('estados._form', ['btnText' => 'Guardar'])
        </form>
    </div>
</div>
@endsection
