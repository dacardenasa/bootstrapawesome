@extends('layouts.home')

@section('title', 'Imagenes Bootstrap')

<style>

    .columna {
        /*background: #f2f2f2;
        border: 1px solid #424242;
        */
        margin-top: 20px;
    }
</style>
@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row no-gutters">
        <div class="col-6 columna">
            <img class="img-fluid float-left img-thumbnail" src="http://lorempixel.com/200/200/" alt="Image">
            <img class="img-fluid float-right img-thumbnail" src="http://lorempixel.com/200/200/" alt="Image">
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-6">
            <figure class="figure">
                <img class="img-fluid rounded" src="http://lorempixel.com/400/400/" alt="Image">
                <figcaption class="figure-caption">
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </figcaption>
            </figure>
        </div>
    </div>

@stop