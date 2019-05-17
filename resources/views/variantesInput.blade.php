@extends('layouts.home')

@section('title', 'Variantes Input Bootstrap')

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row mt-3">
        <div class="col">
            <h2>Tamaños Input</h2>
            <hr>
            <form action="">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input class="form-control form-control-lg" type="text" name="nombre" id="nombre" placeholder="Nombre">
                </div>

                <div class="form-group">
                    <label for="Correo">Correo</label>
                    <input class="form-control" type="text" name="Correo" id="Correo" placeholder="Correo">
                </div>

                <div class="form-group">
                    <label for="Pasaporte">Pasaporte</label>
                    <input class="form-control form-control-sm" type="text" name="Pasaporte" id="Pasaporte" placeholder="Pasaporte">
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <h2>Estados de Readonly y Disabled</h2>
            <hr>
            <form action="">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="nombre" id="nombre" placeholder="No puedes modificar este texto" readonly>
                </div>

                <div class="form-group">
                    <input class="form-control" type="text" name="Correo" id="Correo" placeholder="Deshabilitado" disabled>
                </div>

                <div class="form-group">
                    <select name="" id="" class="form-control" disabled>
                        <option value="1">Select deshabilitado</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>
                        <input type="radio" name="" id="" disabled> Radiobutton
                    </label>
                </div>
            </form>
        </div>
    </div>

@stop