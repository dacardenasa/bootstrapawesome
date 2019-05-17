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
        Para agregar espacido antes de las columnas utilizamos las clases offset
        offset-1/12 - offset-sm-1/12 - offset-md-1/12 - offset-lg-1/12
        -->
        <div class="row">
            <div class="columna col-auto offset-1">Columna</div>
        </div>

        <div class="row">
            <div class="columna col-4 offset-4">Columna</div>
        </div>

        <div class="row">
            <div class="columna col-auto offset-1">Columna</div>
            <div class="columna col-auto offset-1">Columna</div>
        </div>

        <div class="row">
            <div class="columna col-4 offset-1 offset-md-4 offset-lg-0">Columna</div>
        </div>

@stop