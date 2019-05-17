@extends('layouts.home')

@section('title', 'Columnas Anidadas')
<style>

    .container {
        margin-top: 20px;
    }

    .row {
        background: #e8e8e8;

    }

    .columna {
        background: #f2f2f2;
        text-align: center;
        border: 1px solid #4d5061;

    }

    .columna-interior {
        background: #e8e8e8;
        border: 1px solid #4d5061;
        padding: 10px;
    }

</style>
@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

        <div class="row">
            <div class="columna col-md-6">
                Columna 1
                <div class="row">
                    <div class="col columna-interior">Columna 1.1</div>
                    <div class="col columna-interior">Columna 1.2</div>
                </div>
            </div>
            <div class="columna col-md-6">
                Columna 2
                <div class="row justify-content-around">
                    <div class="columna columna-interior col-4">Columna 2.1</div>
                    <div class="columna columna-interior col-4">Columna 2.2</div>
                </div>
            </div>
        </div>

@stop