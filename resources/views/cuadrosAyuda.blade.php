@extends('layouts.home')

@section('title', 'Cuadros de ayuda Bootstrap')

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row mt-3">
        <div class="col">
            <form action="">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                    <p id="" class="form-text text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu.
                    </p>
                </div>

                <div class="form-group">
                    <label for="Correo">Correo</label>
                    <input type="email" class="form-control" name="Correo" id="Correo" placeholder="Correo">
                    <small class="form-text text-muted">Maximo 50 caracteres</small>
                </div>
            </form>
        </div>
    </div>

@stop