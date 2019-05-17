@extends('layouts.home')

@section('title', 'Offseting')

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
            Podemos  cambiar el orden de nuestras columnas con la clase order-1/12, funciona para todos los tamaños
            order-md/sm/lg-1/12
        -->
        <div class="row  justify-content-between">
            <div class="columna col-2 order-4 order-md-1">Columna #1</div>
            <div class="columna col-2 order-3 order-md-2">Columna #2</div>
            <div class="columna col-2 order-2 order-md-3">Columna #3</div>
            <div class="columna col-2 order-1 order-md-4">Columna #4</div>
        </div>


@stop