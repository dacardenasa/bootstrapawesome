@extends('layouts.home')

@section('title', 'FormulariosGrid Bootstrap')

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row mt-3">
      <div class="col">
          <form action="">
              <div class="form-group row">
                  <div class="col-12 col-md-6 mb-3">
                      <label for="nombre">Nombre</label>
                      <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre">
                  </div>
                  <div class="col-12 col-md-6 mb-3">
                      <label for="pass">Contraseña</label>
                      <input type="password" class="form-control" placeholder="Contraseña" name="pass" id="pass">
                  </div>
              </div>

              <div class="form-group row">
                  <div class="col-12 col-md-6 mb-3">
                      <label for="mensaje">Mensaje</label>
                      <textarea name="mensaje" id="mensaje" class="form-control" id="mensaje" name="mensaje"></textarea>
                  </div>
                  <div class="col-12 col-md-3 mb-3">
                      <label for="sexo">Sexo</label>
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
                  </div>
                  <div class="col-12 col-md-3 mb-3">
                          <label for="pais">Pais</label>
                          <select class="form-control" name="pais" id="pais">
                              <option value="1">Colombia</option>
                              <option value="2">Argentina</option>
                              <option value="3">Mexico</option>
                          </select>
                  </div>
              </div>

              <div class="form-group row">
                  <div class="col-12 text-center">
                      <label class="form-check-label">
                          <input type="checkbox" name="terminos" id="terminos" class="form-check-input mr-2 mb-3">Acepto Terminos y Condiciones
                      </label>
                      <div class="row justify-content-center">
                          <div class="col-12 col-sm-9 col-md-4">
                              <button class="btn btn-primary btn-block" type="submit">Enviar</button>
                          </div>
                      </div>
                  </div>
              </div>

          </form>
      </div>
    </div>

@stop