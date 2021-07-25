@extends('layout')

@section('titulo', 'Editar Estado Registro')

@section('content')
<div class="container">
    <div class="mx-auto">
        @include('partials.validation-errors')
        <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('estados.update', $estado) }}">
            @method('PATCH')
            <h1 class="dispaly-4 text-center bg-info shadow">
                Editar Estado Registro
            </h1>
            <hr>
            @include('estados._form', ['btnText' => 'Actualizar'])
        </form>
    </div>
</div>
@endsection
