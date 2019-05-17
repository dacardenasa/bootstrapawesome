@extends('layouts.home')

@section('title', 'alertas')

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row">
        <div class="col">
            <div class="alert alert-success mt-3">
                <strong>Aviso: alert alert-success.</strong> Phasellus sed urna arcu.
                <a class="alert-link" href="#">Integer sit amet risus nisi.</a>
            </div>

            <div class="alert alert-info mt-3">
                <strong>Aviso: alert alert-info.</strong>  Phasellus sed urna arcu.
                <a class="alert-link" href="#">Integer sit amet risus nisi.</a>
            </div>

            <div class="alert alert-warning mt-3">
                <strong>Aviso: alert alert-warning.</strong>  Phasellus sed urna arcu.
                <a class="alert-link" href="#">Integer sit amet risus nisi.</a>
            </div>

            <div class="alert alert-danger mt-3">
                <strong>Aviso: alert alert-danger.</strong> Phasellus sed urna arcu.
                <a class="alert-link" href="#">Integer sit amet risus nisi.</a>
            </div>

            <!-- Nuevos colores -->

            <div class="alert alert-primary mt-3">
                <strong>Aviso: alert alert-primary.</strong> Phasellus sed urna arcu.
                <a class="alert-link" href="#">Integer sit amet risus nisi.</a>
            </div>

            <div class="alert alert-secondary mt-3">
                <strong>Aviso: alert alert-secondary.</strong>  Phasellus sed urna arcu.
                <a class="alert-link" href="#">Integer sit amet risus nisi.</a>
            </div>

            <div class="alert alert-light mt-3">
                <strong>Aviso: alert alert-light.</strong> Phasellus sed urna arcu.
                <a class="alert-link" href="#">Integer sit amet risus nisi.</a>
            </div>

            <div class="alert alert-dark mt-3">
                <strong>Aviso: alert alert-dark.</strong> Phasellus sed urna arcu.
                <a class="alert-link" href="#">Integer sit amet risus nisi.</a>
            </div>

            <div class="alert alert-success mt-5">
                <h2>Encabezado</h2>
                <p class="mb-0">{!! lorem(1) !!}</p>
            </div>

            <div class="alert alert-info mt-5" id="alerta">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        </div>
    </div>

@stop