@extends('layouts.home')

@section('title', 'Carrousel Bootstrap')

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row">
      <div class="col-12 mt-3">
          <div class="carousel slide" id="principal-carousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#principal-carousel" data-slid-to="0" class="active"></li>
                <li data-target="#principal-carousel" data-slid-to="1"></li>
                <li data-target="#principal-carousel" data-slid-to="2"></li>
            </ol>

              <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('img/carousel1.jpg')}}" alt="" class="img-fluid">
                </div>

                <div class="carousel-item">
                    <img src="{{asset('img/carousel2.jpg')}}" alt="" class="img-fluid">
                </div>

                <div class="carousel-item">
                    <img src="{{asset('img/carousel3.jpg')}}" alt="" class="img-fluid">
                </div>

            </div>

              <a href="#principal-carousel" class="carousel-control-prev" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Anterior</span>
              </a>

              <a href="#principal-carousel" class="carousel-control-next" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Siguiente</span>
              </a>
          </div>

      </div>
    </div>

    <div class="row my-3">
        <div class="col-12">
            <div class="carousel slide" id="second-carousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#second-carousel" data-slid-to="0" class="active"></li>
                    <li data-target="#second-carousel" data-slid-to="1"></li>
                    <li data-target="#second-carousel" data-slid-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-caption d-block">
                            <h4>Titulo de la imagen</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi. Nulla ut consequat quam. Etiam at facilisis metus, id lobortis elit.</p>
                        </div>
                        <img src="{{asset('img/carousel1.jpg')}}" alt="" class="img-fluid">
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-caption d-block">
                            <h4>Titulo de la imagen</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi. Nulla ut consequat quam. Etiam at facilisis metus, id lobortis elit.</p>
                        </div>
                        <img src="{{asset('img/carousel2.jpg')}}" alt="" class="img-fluid">
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-caption d-block">
                            <h4>Titulo de la imagen</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi. Nulla ut consequat quam. Etiam at facilisis metus, id lobortis elit.</p>
                        </div>
                        <img src="{{asset('img/carousel3.jpg')}}" alt="" class="img-fluid">
                    </div>

                </div>

                <a href="#second-carousel" class="carousel-control-prev" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>

                <a href="#second-carousel" class="carousel-control-next" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>

        </div>
    </div>

@stop