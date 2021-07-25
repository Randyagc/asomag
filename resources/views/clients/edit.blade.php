@extends('layout')

@section('titulo', 'Editar Cliente')

@section('content')
<div class="container">
    <div class="mx-auto">
        @include('partials.validation-errors')
        <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('clients.update', $cliente) }}">
            @method('PATCH')
            <h1 class="display-4 text-center bg-info shadow">
                Editar Cliente
            </h1>
            <hr>
            @include('clients._form', ['btnText' => 'Actualizar'])
        </form>
    </div>
</div>
@endsection
