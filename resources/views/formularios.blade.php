@extends('layouts.home')

@section('title', 'Formularios Bootstrap')

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row mt-3">
      <div class="col">
          <form action="">
              <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre">
              </div>

              <div class="form-group">
                  <label for="pass">Contraseña</label>
                  <input type="password" class="form-control" placeholder="Contraseña" name="pass" id="pass">
              </div>

              <div class="form-group">
                  <label for="mensaje">Mensaje</label>
                  <textarea name="mensaje" id="mensaje" class="form-control" id="mensaje" name="mensaje"></textarea>
              </div>

              <div class="form-group">
                  <label for="pais">Pais</label>
                  <select class="form-control" name="pais" id="pais">
                      <option value="1">Colombia</option>
                      <option value="2">Argentina</option>
                      <option value="3">Mexico</option>
                  </select>
              </div>

              <div class="form-check">
                  <label class="form-check-label">
                      <input type="radio" name="sexo" id="hombre" class="form-check-input mr-2">Hombre
                  </label>
              </div>

              <div class="form-check">
                  <label class="form-check-label">
                      <input type="radio" name="sexo" id="mujer" class="form-check-input mr-2">Mujer
                  </label>
              </div>

              <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" name="terminos" id="mujer" class="form-check-input mr-2">Acepto Terminos y condiciones
                  </label>
              </div>

              <button class="btn btn-primary" type="submit">Enviar</button>
          </form>
      </div>
    </div>

@stop