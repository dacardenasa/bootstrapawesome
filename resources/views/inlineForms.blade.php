@extends('layouts.home')

@section('title', 'InlineForms Bootstrap')

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row mt-3">
      <div class="col">
          <form action="" class="form-inline">
              <input type="text" class="form-control mr-3" id="nombre" placeholder="Nombre" required>
              <input type="password" class="form-control mr-3" id="password" placeholder="Contraseña" required>

              <div class="form-check mr-3">
                  <input type="checkbox" name="recordar" id="recordar" class="form-check-input">
                  <label for="recordar" class="form-check-label">Recordar sesion</label>
              </div>
              <input type="submit" value="iniciarSesion" class="btn btn-primary">
          </form>
      </div>
    </div>

@stop