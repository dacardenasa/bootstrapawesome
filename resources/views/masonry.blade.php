@extends('layouts.home')

@section('title', 'Grid Pinterest Bootstrap')

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row">
      <div class="col my-3">
        <div class="card-columns">
            <div class="card">
                <img src="{{asset('img/8.jpg')}}" class="card-img-top img-fluid" alt="Image">
                <div class="card-body">
                    <h3 class="card-title">Titulo 1</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi.</p>
                    <a href="#" class="btn btn-primary btn-block btn-lg">Boton</a>
                </div>
            </div>

            <div class="card">
                <img src="{{asset('img/9.jpg')}}" class="card-img-top img-fluid" alt="Image">
                <div class="card-body">
                    <h3 class="card-title">Titulo 2</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi.</p>
                    <a href="#" class="btn btn-primary btn-block btn-lg">Boton</a>
                </div>
            </div>

            <div class="card">
                <img src="{{asset('img/5.jpg')}}" class="card-img-top img-fluid" alt="Image">
                <div class="card-body">
                    <h3 class="card-title">Titulo 3</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi.</p>
                    <a href="#" class="btn btn-primary btn-block btn-lg">Boton</a>
                </div>
            </div>

            <div class="card">
                <img src="{{asset('img/11.jpeg')}}" class="card-img-top img-fluid" alt="Image">
                <div class="card-body">
                    <h3 class="card-title">Titulo 4</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi.</p>
                    <a href="#" class="btn btn-primary btn-block btn-lg">Boton</a>
                </div>
            </div>

            <div class="card">
                <img src="{{asset('img/7.jpg')}}" class="card-img-top img-fluid" alt="Image">
                <div class="card-body">
                    <h3 class="card-title">Titulo 5</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi.</p>
                    <a href="#" class="btn btn-primary btn-block btn-lg">Boton</a>
                </div>
            </div>

            <div class="card">
                <img src="{{asset('img/6.jpeg')}}" class="card-img-top img-fluid" alt="Image">
                <div class="card-body">
                    <h3 class="card-title">Titulo 6</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi.</p>
                    <a href="#" class="btn btn-primary btn-block btn-lg">Boton</a>
                </div>
            </div>

            <div class="card bg-success text-white">
                <div class="card-body">
                    <h3 class="card-title">Titulo 7</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi.</p>
                    <a href="#" class="btn btn-light btn-block btn-lg">Boton</a>
                </div>
            </div>
        </div>
      </div>
    </div>

@stop