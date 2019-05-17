@extends('layouts.home')

@section('title', 'Cards Bootstrap')

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row mt-3">
      <div class="col">
          <div class="card">
              <div class="card-body">
                  <h1 class="mb-3">Encabezado</h1>
                  {!! lorem(1) !!}
              </div>
          </div>
      </div>
    </div>

    <div class="row mt-3 mb-5">
        <div class="col-6">
            <div class="card">
                <img src="{{ asset('img/7.jpg') }}" class="card-img-top img-fluid" alt="Girl">
                <div class="card-body">
                    <h3 class="card-title">Titulo</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi. </p>
                    <a href="#" class="btn btn-dark btn-lg btn-block">Boton</a>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <img src="{{ asset('img/7.jpg') }}" class="card-img-top img-fluid" alt="Girl">
                <div class="card-body">
                    <h3 class="card-title">Titulo</h3>
                    <p class="card-subtitle text-muted mb-2">Subtitulo</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi. </p>
                    <a href="#" class="card-link">Enlace #1</a>
                    <a href="#" class="card-link">Enlace #2</a>

                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Encabezado de la card
                </div>
                <div class="card-body">
                    <h3 class="card-title">Lorem ipsum dolor.</h3>
                    <p class="card-text">Lorem ipsum dolor, Lorem ipsum dolor, Lorem ipsum dolor.</p>
                    <a href="#" class="btn btn-primary">Ir al  post</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="card-title">Lorem ipsum dolor.</h3>
                    <p class="card-text">Lorem ipsum dolor, Lorem ipsum dolor, Lorem ipsum dolor.</p>
                    <a href="#" class="btn btn-primary">Ir al  post</a>
                </div>
                <div class="card-footer">
                    Pie de la card
                </div>
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="col">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h3 class="card-text">Lorem ipsum dolor.</h3>
                    <p  class="card-text">Lorem ipsum dolor, Lorem ipsum dolor, Lorem ipsum dolor.</p>
                    <a href="#" class="btn btn-primary">Ir al post</a>
                    <a href="#" class="btn btn-light">Ir al post</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h3 class="card-text">Lorem ipsum dolor.</h3>
                    <p  class="card-text">Lorem ipsum dolor, Lorem ipsum dolor, Lorem ipsum dolor.</p>
                    <a href="#" class="btn btn-dark">Ir al post</a>
                    <a href="#" class="btn btn-light">Ir al post</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card border-primary">
                <div class="card-body">
                    <h3 class="card-text">Lorem ipsum dolor.</h3>
                    <p  class="card-text">Lorem ipsum dolor, Lorem ipsum dolor, Lorem ipsum dolor.</p>
                    <a href="#" class="btn btn-primary">Ir al post</a>
                    <a href="#" class="btn btn-light">Ir al post</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card border-success">
                <div class="card-body">
                    <h3 class="card-text">Lorem ipsum dolor.</h3>
                    <p  class="card-text">Lorem ipsum dolor, Lorem ipsum dolor, Lorem ipsum dolor.</p>
                    <a href="#" class="btn btn-success">Ir al post</a>
                    <a href="#" class="btn btn-light">Ir al post</a>
                </div>
            </div>
        </div>
    </div>

@stop