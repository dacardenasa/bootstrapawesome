@extends('layouts.home')

@section('title', 'Tipografias Bootstrap')
@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row">
        <div class="col-12">
            <p>Lorem ipsum dolor <mark>sit amet</mark>, consectetur adipiscing elit.</p>
            <p><del>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</del></p>
            <p><s>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</s></p>
            <p><ins>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</ins></p>
            <p><u>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</u></p>
            <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small></p>
            <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></p>
            <p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</em></p>
        </div>
        <div class="col-4">
            <hr>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Phasellus sed urna arcu. Integer sit amet risus nisi. Nulla ut consequat quam.
                Etiam at facilisis metus, id lobortis elit. Donec vel nulla egestas,
                malesuada arcu vel, pellentesque augue. Nullam quis dapibus neque. </p>

            <div class="card">
                <div class="card-block">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus sed urna arcu. Integer sit amet risus nisi. Nulla ut consequat quam.
                    Etiam at facilisis metus, id lobortis elit.
                </div>
            </div>
        </div>
        <div class="w-100"></div>
        <div class="col-4">
            <hr>
            <p class="text-left">Texto alineado a la izquierda</p>
            <p class="text-center">Texto Centrado</p>
            <p class="text-right">Texto alineado a la derecha</p>
        </div>

        <div class="w-100"></div>

        <div class="col-12 col-md-8">
            <p class="text-left text-sm-right">Alineado a la derecha en dispositivos pequeños en adelante</p>
            <p class="text-left text-md-right">Alineado a la derecha en dispositivos medianos en adelante</p>
            <p class="text-left text-lg-right">Alineado a la derecha en dispositivos largos en adelante</p>
            <p class="text-left text-xl-right">Alineado a la derecha en dispositivos extra  largos en adelante</p>
        </div>

        <div class="w-100"></div>

        <div class="col-4">
            <hr>
            <p class="text-lowercase font-weight-bold">Minusculas - Lorem ipsum dolor sit.</p>
            <p class="text-uppercase font-weight-normal">MAYUSCULAS - Lorem ipsum dolor sit.</p>
            <p class="text-capitalize font-italic">Letras Capitales - Lorem ipsum dolor sit.</p>
        </div>

        <div class="w-100"></div>

        <div class="col-6">
            <blockquote class="blockquote">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus sed urna arcu. Integer sit amet risus nisi. Nulla ut consequat quam.
                    Etiam at facilisis metus, id lobortis elit. Donec vel nulla egestas,
                    malesuada arcu vel, pellentesque augue. Nullam quis dapibus neque. </p>
                <footer class="blockquote-footer"><p>Carlos Arturo</p></footer>
            </blockquote>

        </div>
    </div>

@stop