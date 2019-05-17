@extends('layouts.home')

@section('title', 'Collapse Bootstrap')

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row mt-3">
      <div class="col-6">
          <p>
              <a href="#bloque1" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="bloque1" class="btn btn-primary">Bloque 1</a>
          </p>
          <div class="collapse" id="bloque1">
              <div class="card card-body">
                  <h2>Titulo</h2>
                  <p>{!! lorem(1) !!}</p>
              </div>
          </div>
      </div>

      <div class="col-6">
          <p>
              <a href="#bloque2" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="bloque2" class="btn btn-primary">Bloque 2</a>
          </p>
          <div class="collapse" id="bloque2">
              <div class="card card-body">
                  <h2>Titulo</h2>
                  <p>{!! lorem(1) !!}</p>
              </div>
          </div>
      </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <div id="accordion">
                <!-- CARD #1-->
                <div class="card">
                    <div class="card-header" id="heading1">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Contenido No 1</button>
                        </h5>
                    </div>
                    <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion">
                        <div class="card-body">
                            {!! lorem(1) !!}
                        </div>
                    </div>
                </div>

                <!-- CARD #2-->
                <div class="card">
                    <div class="card-header" id="heading2">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">Contenido No 2</button>
                        </h5>
                    </div>
                    <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                        <div class="card-body">
                            {!! lorem(1) !!}
                        </div>
                    </div>
                </div>

                <!-- CARD #3-->
                <div class="card">
                    <div class="card-header" id="heading3">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">Contenido No 3</button>
                        </h5>
                    </div>
                    <div id="collapse3" class="collapse" aria-labelledby="heading1" data-parent="#accordion">
                        <div class="card-body">
                            {!! lorem(1) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop