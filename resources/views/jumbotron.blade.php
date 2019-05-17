@extends('layouts.home')

@section('title', 'Jumbotron')

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

<div class="jumbotron">
    <div class="container">
        <h1 class="display-3 mb-3">Encabezado</h1>
        <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi. Nulla ut consequat quam. Etiam at facilisis metus, id lobortis elit. Donec vel nulla egestas, malesuada arcu vel, pellentesque augue. Nullam quis dapibus neque.
            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>
        <a href="#" class="btn btn-primary btn-lg">Leer mas</a>
        <a href="#" class="btn btn-success btn-lg">Comprar</a>
    </div>
</div>

@section('content')

    <div class="row mt-3">
        <div class="col">
            <div class="jumbotron">
                <h1 class="display-3 mb-3">Encabezado</h1>
                <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi. Nulla ut consequat quam. Etiam at facilisis metus, id lobortis elit. Donec vel nulla egestas, malesuada arcu vel, pellentesque augue. Nullam quis dapibus neque.
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>
                <a href="#" class="btn btn-primary btn-lg">Leer mas</a>
                <a href="#" class="btn btn-success btn-lg">Comprar</a>
            </div>
        </div>
    </div>

@stop