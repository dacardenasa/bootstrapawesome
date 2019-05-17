@extends('layouts.home')

@section('title', 'Checkbox & Raddiobuttons Bootstrap')

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row">
        <div class="col">
            <form action="">
                <h4>Checkbox</h4>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="" id="" value="opcion1"> Opcion 1
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label disabled">
                        <input type="checkbox" name="" id="" value="opcion2" disabled> Opcion 2
                    </label>
                </div>

                <hr>
                <h4>Radiobuttons</h4>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" name="sexo" id="hombre" value="hombre"> Hombre
                    </label>
                </div>
                <div class="form-check disabled">
                    <label class="form-check-label">
                        <input type="radio" name="sexo" id="mujer" value="mujer" disabled> Mujer
                    </label>
                </div>
            </form>
        </div>

        <div class="col-12">
            <form action="">
                <hr>
                <h4>Inline Checkboxes</h4>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input type="checkbox" name="" id="" value="opcion1"> Opcion 1
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label disabled">
                        <input type="checkbox" name="" id="" value="opcion2" disabled> Opcion 2
                    </label>
                </div>

                <hr>
                <h4>Inline Radiobuttons</h4>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" name="sexo" id="hombre" value="hombre"> Hombre
                    </label>
                </div>
                <div class="form-check form-check-inline disabled">
                    <label class="form-check-label">
                        <input type="radio" name="sexo" id="mujer" value="mujer" disabled> Mujer
                    </label>
                </div>
            </form>
        </div>
    </div>

@stop