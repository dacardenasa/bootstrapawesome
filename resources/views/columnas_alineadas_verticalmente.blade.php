@extends('layouts.home')

@section('title', 'Columnas Alineadas Verticalmente')

<style>
    .row {
        background: #e8e8e8;
        height: 150px;
        margin-top: 20px;
    }

    .col {
        background: #f2f2f2;
        text-align: center;
        padding: 10px;
        border: 1px solid #4d5061;
    }
</style>

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <!-- Las clases asignadas a row align-items-start/center/end alinean todas las columnas de forma vertical-->

    <div class="row align-items-start">
        <div class="col">Columna #1</div>
        <div class="col">Columna #2</div>
        <div class="col">Columna #3</div>
    </div>

    <div class="row align-items-center">
        <div class="col">Columna #1</div>
        <div class="col">Columna #2</div>
        <div class="col">Columna #3</div>
    </div>

    <div class="row align-items-end">
        <div class="col">Columna #1</div>
        <div class="col">Columna #2</div>
        <div class="col">Columna #3</div>
    </div>

    <br>
    <br>

    <h2>Alineacion Independiente</h2>

    <!-- Las clases asignadas a col align-self-start/center/end alinean la columna de forma vertical  e independiente-->

    <div class="row">
        <div class="col align-self-start">Columna #1</div>
        <div class="col align-self-center">Columna #2</div>
        <div class="col align-self-end">Columna #3</div>
    </div>

@stop