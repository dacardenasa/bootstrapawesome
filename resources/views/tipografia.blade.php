@extends('layouts.home')

@section('title', 'Tipografias Bootstrap')
@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row">
        <div class="col">
            <h1>Encabezado H1 <small class="text-muted">Texto Secundario</small></h1>
            <h2>Encabezado H2 <small class="text-muted">Texto Secundario</small></h2>
            <h3>Encabezado H3 <small class="text-muted">Texto Secundario</small></h3>
            <h4>Encabezado H4 <small class="text-muted">Texto Secundario</small></h4>
            <h5>Encabezado H5 <small class="text-muted">Texto Secundario</small></h5>
            <h6>Encabezado H6 <small class="text-muted">Texto Secundario</small></h6>
        </div>

        <div class="col-12">
            <hr>
            <p class="h1">Parrafo con estilo de encabezado h1</p>
            <p class="h2">Parrafo con estilo de encabezado h2</p>
            <p class="h3">Parrafo con estilo de encabezado h3</p>
            <p class="h4">Parrafo con estilo de encabezado h4</p>
            <p class="h5">Parrafo con estilo de encabezado h5</p>
            <p class="h6">Parrafo con estilo de encabezado h6</p>
        </div>

        <div class="col-12">
            <hr>
            <h1 class="display-1">Encabezado Display</h1>
            <h1 class="display-2">Encabezado Display</h1>
            <h1 class="display-3">Encabezado Display</h1>
            <h1 class="display-4">Encabezado Display</h1>
        </div>

        <div class="col-12">
            <hr>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </p>
        </div>
    </div>


@stop