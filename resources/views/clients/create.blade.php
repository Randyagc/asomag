@extends('layout')

@section('titulo', 'Crear Cliente')

@section('content')
<div class="container">
    <div class="mx-auto">
        @include('partials.validation-errors')
        <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('clients.store') }}">
            <h1 class="display-4 text-center bg-info shadow">
                Nuevo Cliente
            </h1>
            @include('clients._form', ['btnText' => 'Guardar'])
        </form>
    </div>
</div>
@endsection
