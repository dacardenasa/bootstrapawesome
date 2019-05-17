@extends('layouts.home')

@section('title', 'Inisignias')

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row">

        <div class="col-6">
            <h1>Encabezado H1 <span class="badge badge-secondary">Etiquetas</span></h1>
            <h2>Encabezado H2 <span class="badge badge-secondary">Etiquetas</span></h2>
            <h3>Encabezado H3 <span class="badge badge-secondary">Etiquetas</span></h3>
            <h4>Encabezado H4 <span class="badge badge-secondary">Etiquetas</span></h4>
            <h5>Encabezado H5 <span class="badge badge-secondary">Etiquetas</span></h5>
            <h6>Encabezado H6 <span class="badge badge-secondary">Etiquetas</span></h6>
        </div>

        <div class="col-6">
            <h3>Encabezado H3 <span class="badge badge-pill badge-primary">Etiquetas</span></h3>
            <h3>Encabezado H3 <span class="badge badge-pill badge-secondary">Etiquetas</span></h3>
            <h3>Encabezado H3 <span class="badge badge-pill badge-success">Etiquetas</span></h3>
            <h3>Encabezado H3 <span class="badge badge-pill badge-info">Etiquetas</span></h3>
            <h3>Encabezado H3 <span class="badge badge-pill badge-warning">Etiquetas</span></h3>
            <h3>Encabezado H3 <span class="badge badge-pill badge-danger">Etiquetas</span></h3>
            <h3>Encabezado H3 <span class="badge badge-pill badge-dark">Etiquetas</span></h3>
            <h3>Encabezado H3 <span class="badge badge-pill badge-light">Etiquetas</span></h3>
        </div>

        <div class="col-12 mb-3">
            <a href="#" class="badge badge-primary">Primary</a>
            <a href="#" class="badge badge-secondary">Secondary</a>
            <a href="#" class="badge badge-success">success</a>
            <a href="#" class="badge badge-info">info</a>
            <a href="#" class="badge badge-warning">warning</a>
            <a href="#" class="badge badge-danger">danger</a>
            <a href="#" class="badge badge-dark">dark</a>
            <a href="#" class="badge badge-light">light</a>
        </div>

        <div class="col-12 mb-3">
            <a href="#" class="badge badge-pill badge-primary">Primary</a>
            <a href="#" class="badge badge-pill badge-secondary">Secondary</a>
            <a href="#" class="badge badge-pill badge-success">success</a>
            <a href="#" class="badge badge-pill badge-info">info</a>
            <a href="#" class="badge badge-pill badge-warning">warning</a>
            <a href="#" class="badge badge-pill badge-danger">danger</a>
            <a href="#" class="badge badge-pill badge-dark">dark</a>
            <a href="#" class="badge badge-pill badge-light">light</a>
        </div>

        <div class="col-12 mb-3">
            <button class="btn mb-2">
                Notificaciones <span class="badge badge-dark">10</span>
            </button>

            <button class="btn btn-dark mb-2">
                Notificaciones <span class="badge badge-light">10</span>
            </button>

            <button class="btn btn-primary mb-2">
                Notificaciones <span class="badge badge-light">10</span>
            </button>
        </div>

    </div>

@stop