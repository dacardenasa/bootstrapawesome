@extends('layouts.home')

@section('title', 'InlineForms Bootstrap')

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row mt-3">
      <div class="col">
         <div class="input-group mb-3">
             <div class="input-group-prepend">
                 <span class="input-group-text">Nombre</span>
             </div>
             <input type="text" name="" id=""  class="form-control">
         </div>

          <div class="input-group mb-3">
              <input type="text" name="" id=""  class="form-control">
              <div class="input-group-append">
                  <span class="input-group-text">@correo.com</span>
              </div>
          </div>

          <hr>

          <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                  <span class="input-group-text">Nombre</span>
              </div>
              <input type="text" name="" id=""  class="form-control">
          </div>

          <div class="input-group input-group-lg mb-3">
              <div class="input-group-prepend">
                  <span class="input-group-text">Nombre</span>
              </div>
              <input type="text" name="" id=""  class="form-control">
          </div>

          <hr>

          <div class="input-group">
              <input type="text" name="" id="buscar" class="form-control" placeholder="Buscar">
              <div class="input-group-append">
                  <button class="btn btn-primary">Buscar</button>
              </div>
          </div>

      </div>
    </div>

@stop