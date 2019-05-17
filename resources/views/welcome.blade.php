@extends('layouts.home')

@section('title', 'GRID')
@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')


    <div class="row">

        <div class="col-12 col-sm-6 col-md">

            <h1>Hola Mundo</h1>
            <p>{!! lorem(1) !!}</p>

        </div>

        <div class="col-12 col-sm-6 col-md">

            <h1>Hola Mundo</h1>
            <p>{!! lorem(1) !!}</p>

        </div>

        <div class="col-12 col-sm col-md col-xl-12">

            <h1>Hola Mundo</h1>
            <p>{!! lorem(1) !!}</p>

        </div>


    </div>



@stop