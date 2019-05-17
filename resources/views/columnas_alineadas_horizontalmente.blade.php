@extends('layouts.home')

@section('title', 'Columnas Alineadas Horizontalmente')

<style>

    .row {
        background: #e8e8e8;
        margin-top: 40px;
        margin-bottom: 40px;
    }

    .columna {
        background: #f2f2f2;
        text-align: center;
        padding: 10px;
        border: 1px solid #4d5061;
    }

</style>

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

        <!--
        Para centrar contenido de  forma horizontal con bootstrap debemos utilizar las clases
        row justify-content-start/center/end/around/between, estas clases las aplicamos a row o a la fila
            -->
        <div class="row justify-content-start">
            <div class="columna col-4">Columna 1</div>
            <div class="columna col-4">Columna 2</div>
        </div>
        <div class="row justify-content-center">
            <div class="columna col-4">Columna 1</div>
            <div class="columna col-4">Columna 2</div>
        </div>
        <div class="row justify-content-end">
            <div class="columna col-4">Columna 1</div>
            <div class="columna col-4">Columna 2</div>
        </div>
        <div class="row justify-content-around">
            <div class="columna col-4">Columna 1</div>
            <div class="columna col-4">Columna 2</div>
        </div>
        <div class="row justify-content-between">
            <div class="columna col-4">Columna 1</div>
            <div class="columna col-4">Columna 2</div>
        </div>


@stop