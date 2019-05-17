@extends('layouts.home')

@section('title', 'Media Object Bootstrap')

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row">
        <div class="col">
            <h1>Media Object</h1>
            <hr>
            
            <div class="media">
                <img src="http://lorempixel.com/64/64/" alt="Imagen" class="d-flex align-self-start mr-3">
                <div class="media-body">
                    <h4 class="mt-0">Encabezado</h4>
                    <p>{!! lorem(1) !!}</p>
                    <p>{!! lorem(1) !!}</p>
                    <hr>

                    <div class="media">
                        <img src="http://lorempixel.com/64/64/" alt="Imagen" class="d-flex align-self-start mr-3">
                        <div class="media-body">
                            <h4 class="mt-0">Comentario 1</h4>
                            <p>{!! lorem(1) !!}</p>
                            <hr>
                        </div>
                    </div>

                    <div class="media">
                        <img src="http://lorempixel.com/64/64/" alt="Imagen" class="d-flex align-self-start mr-3">
                        <div class="media-body">
                            <h4 class="mt-0">Comentario 2</h4>
                            <p>{!! lorem(1) !!}</p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <div class="media">
                <div class="media-body">
                    <h4 class="mt-0 text-right">Comentario 1</h4>
                    <p class="text-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi. Nulla ut consequat quam. Etiam at facilisis metus, id lobortis elit. Donec vel nulla egestas, malesuada arcu vel, pellentesque augue. Nullam quis dapibus neque.</p>
                </div>
                <img src="http://lorempixel.com/64/64/" alt="Imagen" class="ml-3">
            </div>
        </div>
    </div>

@stop