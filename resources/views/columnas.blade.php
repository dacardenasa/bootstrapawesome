@extends('layouts.home')

<style>
    .row > div {
        text-align: center;
        margin: 10px 0;
        background: #f2f2f2;
    }
</style>

@section('title', 'Columnas')
@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row">
        <div class="col">
            <h4>Columna #1</h4>
            <p>{!! lorem(1) !!}</p>
        </div>
        <div class="col">
            <h4>Columna #2</h4>
            <p>{!! lorem(1) !!}</p>
        </div>

        <div class="w-100"></div>

        <!-- La clase w-100 nos permite separar el contenido en filas diferentes-->

        <!-- La clase col-auto nos permite ajustar el tamaño de la columna al contenido establecido -->

        <div class="col">
            <h4>Columna #3</h4>
            <p>{!! lorem(1) !!}</p>
        </div>
        <div class="col">
            <h4>Columna #4</h4>
            <p>{!! lorem(1) !!}</p>
        </div>
    </div>



@stop