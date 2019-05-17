@extends('layouts.home')

@section('title', 'Botones')

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row pt-3">
        <div class="col-6">
            <h2>Botones</h2>
            <hr>
            <button type="button" class="btn btn-primary">Primario</button>
            <button type="button" class="btn btn-secondary">Secundario</button>
            <button type="button" class="btn btn-success">Exito</button>
            <button type="button" class="btn btn-info">Informacion</button>
            <button type="button" class="btn btn-warning">Advertencia</button>
            <button type="button" class="btn btn-danger">Peligro</button>
            <button type="button" class="btn btn-link">Enlace</button>
            <!-- Nuevos colores -->
            <button type="button" class="btn btn-dark">Dark</button>
            <button type="button" class="btn btn-light">Light</button>
        </div>
    </div>

    <div class="row pt-3">
        <div class="col-6">
            <hr>
            <a href="#" class="btn btn-primary">Enlace</a>
            <button class="btn btn-primary">Boton</button>
            <input  class="btn btn-primary" type="button" value="Boton">
            <input  class="btn btn-primary" type="submit"  value="Submit">
        </div>
    </div>

    <div class="row pt-3">
        <div class="col-6">
            <h2>Outline Buttons</h2>
            <hr>
            <button type="button" class="btn btn-outline-primary">Primario</button>
            <button type="button" class="btn btn-outline-secondary">Secundario</button>
            <button type="button" class="btn btn-outline-success">Exito</button>
            <button type="button" class="btn btn-outline-info">Informacion</button>
            <button type="button" class="btn btn-outline-warning">Advertencia</button>
            <button type="button" class="btn btn-outline-danger">Peligro</button>
            <button type="button" class="btn btn-outline-link">Enlace</button>
            <!-- Nuevos colores -->
            <button type="button" class="btn btn-outline-dark">Dark</button>
            <button type="button" class="btn btn-outline-light">Light</button>
        </div>
    </div>

    <div class="row pt-5 mb-2">
        <div class="col-6">
            <button class="btn btn-primary btn-lg">Boton Largo</button>
            <button class="btn btn-secondary btn-lg">Boton Largo</button>
            <br><br>
            <button class="btn btn-primary btn-sm">Boton pequeño</button>
            <button class="btn btn-secondary btn-sm">Boton pequeño</button>
            <br><br>
            <button class="btn btn-primary btn-lg btn-block">Boton bloque</button>
            <button class="btn btn-secondary btn-lg btn-block">Boton bloque</button>
        </div>
    </div>

    <div class="row pt-3">
        <div class="col-6">
            <h2>Botones Disabled</h2>
            <hr>
            <button type="button" class="btn btn-primary" disabled>Primario</button>
            <button type="button" class="btn btn-secondary" disabled>Secundario</button>
            <button type="button" class="btn btn-success" disabled>Exito</button>
            <button type="button" class="btn btn-info" disabled>Informacion</button>
            <button type="button" class="btn btn-warning" disabled>Advertencia</button>
            <button type="button" class="btn btn-danger" disabled>Peligro</button>
            <button type="button" class="btn btn-link" disabled>Enlace</button>
        </div>
    </div>

@stop