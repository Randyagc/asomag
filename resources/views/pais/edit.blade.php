@extends('layout')

@section('titulo', 'Editar Pais')

@section('content')
<div class="container">
    <div class="mx-auto">
        @include('partials.validation-errors')
        <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('pais.update', $pais) }}">
            @method('PATCH')
            <h1 class="display-4 text-center bg-info shadow">
                Editar Pais
            </h1>
            <hr>
            @include('pais._form', ['btnText' => 'Actualizar'])
        </form>
    </div>
</div>
@endsection
