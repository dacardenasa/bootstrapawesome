@extends('layouts.home')

@section('title', 'Botones-2')

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row pt-5">
       <div class="col-6">
           <h2>Checkbox</h2>
           <hr>

           <div class="btn-group btn-group-toggle" data-toggle="buttons">
               <label class="btn btn-primary">
                   <input type="checkbox" name="" id="" autocomplete="off">Checkbox1
               </label>
               <label class="btn btn-primary active">
                   <input type="checkbox" name="" id="" autocomplete="off">Checkbox2
               </label>
               <label class="btn btn-primary">
                   <input type="checkbox" name="" id="" autocomplete="off">Checkbox3
               </label>
           </div>
       </div>
    </div>

    <div class="row pt-5">
        <div class="col-6">
            <h2>Radio Button</h2>
            <hr>

            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-primary">
                    <input type="radio" name="sexo" id="hombre" autocomplete="off">Hombre
                </label>
                <label class="btn btn-primary">
                    <input type="radio" name="sexo" id="mujer" autocomplete="off">Mujer
                </label>
            </div>
        </div>
    </div>

@stop