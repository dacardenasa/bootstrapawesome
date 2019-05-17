@extends('layouts.home')

@section('title', 'Cards-2 Bootstrap')

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row mt-3">
      <div class="col">
          <div class="card-group">
              <div class="card">
                  <img src="{{asset('img/7.jpg')}}" alt="Img" class="card-img-top img-fluid">
                  <div class="card-body">
                      <h1 class="card-title">Encabezado</h1>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi. Nulla ut consequat quam. Etiam at facilisis metus, id lobortis elit. Donec vel nulla egestas, malesuada arcu vel, pellentesque augue.</p>
                      <button class="btn btn-primary btn-block">Boton</button>
                  </div>
                  <div class="card-footer text-center">
                      <small class="text-muted">Footer</small>
                  </div>
              </div>
              <div class="card">
                  <img src="{{asset('img/7.jpg')}}" alt="Img" class="card-img-top img-fluid">
                  <div class="card-body">
                      <h1 class="card-title">Encabezado</h1>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi. Nulla ut consequat quam. Etiam at facilisis metus, id lobortis elit. Donec vel nulla egestas, malesuada arcu vel, pellentesque augue.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi. Nulla ut consequat quam. Etiam at facilisis metus, id lobortis elit. Donec vel nulla egestas, malesuada arcu vel, pellentesque augue.</p>
                      <button class="btn btn-primary btn-block">Boton</button>
                  </div>
                  <div class="card-footer text-center">
                      <small class="text-muted">Footer</small>
                  </div>
              </div>
              <div class="card">
                  <img src="{{asset('img/7.jpg')}}" alt="Img" class="card-img-top img-fluid">
                  <div class="card-body">
                      <h1 class="card-title">Encabezado</h1>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi. Nulla ut consequat quam. Etiam at facilisis metus, id lobortis elit. Donec vel nulla egestas, malesuada arcu vel, pellentesque augue.</p>
                      <button class="btn btn-primary btn-block">Boton</button>
                  </div>
                  <div class="card-footer text-center">
                      <small class="text-muted">Footer</small>
                  </div>
              </div>
          </div>
      </div>
    </div>

@stop