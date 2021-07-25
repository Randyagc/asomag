@extends('layout')

@section('titulo', 'About')

@section('content')
<div class="container">
    <div>
        <h1 class="display-5 text-primary">
            @lang('About')
        </h1>
        <p class="load text-primary">
            Asociación Femenina del MAG, al servicio de Socias y No Socias
        </p>
        <a class="btn-lg btn-primary shadow" href="{{ route('home') }}">
            @lang("Home")
        </a>
    </div>
    <div class="row">
        <img class="img-fluid" style="max-width:60%; margin-left: auto; margin-right: auto;" src="images/about.svg">
    </div>
</div>
@endsection
