@extends('layouts.home')

@section('title', 'formularios Personalizados Bootstrap')

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row">
        <div class="col">
            <form action="" class="mt-3">
                <h2>Checkbox personalizado</h2>
                <hr>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="" id="checkboxPersonalizado1" class="custom-control-input">
                    <label for="checkboxPersonalizado1" class="custom-control-label">Acepto los terminos y condiciones</label>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="" id="checkboxPersonalizado2" class="custom-control-input">
                    <label for="checkboxPersonalizado2" class="custom-control-label">Acepto las politicas de privacidad</label>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form action="" class="mt-3">
                <h2>Radiobuttons personalizado</h2>
                <hr>
                <h2>Sexo</h2>
                <div class="custom-control custom-radio">
                    <input type="radio" name="sexo" id="radiobuttonPersonalizado1" value="masculino" class="custom-control-input">
                    <label for="radiobuttonPersonalizado1" class="custom-control-label">Masculino</label>
                </div>

                <div class="custom-control custom-radio">
                    <input type="radio" name="sexo" id="radiobuttonPersonalizado2" value="femenino" class="custom-control-input">
                    <label for="radiobuttonPersonalizado2" class="custom-control-label">Femenino</label>
                </div>

                <br>
                <h2>Cerveza a ordenar</h2>
                <div class="custom-control custom-control-inline custom-radio">
                    <input type="radio" name="cerveza" id="radiobuttonPersonalizado3" value="heineken" class="custom-control-input">
                    <label for="radiobuttonPersonalizado3" class="custom-control-label">Heineken</label>
                </div>

                <div class="custom-control custom-control-inline custom-radio">
                    <input type="radio" name="cerveza" id="radiobuttonPersonalizado4" value="Corona" class="custom-control-input">
                    <label for="radiobuttonPersonalizado4" class="custom-control-label">Corona</label>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form action="" class="mt-3">
                <h2>Select personalizado</h2>
                <hr>

                <select name="" id="" class="custom-select custom-select-lg mb-3">
                    <option value="1" selected>Opcion1</option>
                    <option value="2">Opcion2</option>
                    <option value="3">Opcion3</option>
                    <option value="4">Opcion4</option>
                </select>

                <select name="" id="" class="custom-select mb-3">
                    <option value="1" selected>Opcion1</option>
                    <option value="2">Opcion2</option>
                    <option value="3">Opcion3</option>
                    <option value="4">Opcion4</option>
                </select>

                <select name="" id="" class="custom-select custom-select-sm mb-3">
                    <option value="1" selected>Opcion1</option>
                    <option value="2">Opcion2</option>
                    <option value="3">Opcion3</option>
                    <option value="4">Opcion4</option>
                </select>
            </form>
        </div>
    </div>

@stop