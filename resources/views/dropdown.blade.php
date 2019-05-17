@extends('layouts.home')

@section('title', 'Dropdown Bootstrap')

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row mt-3">
      <div class="col-6">
          <div class="btn-group mr-2 mb-2">
                  <button class="btn btn-primary dropdown-toggle" id="dp-categorias" data-toggle="dropdown">
                      Categorias
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dp-categorias">
                      <h6 class="dropdown-header">Categorias</h6>
                      <a href="#" class="dropdown-item">HTML</a>
                      <a href="#" class="dropdown-item">CSS</a>
                      <a href="#" class="dropdown-item">JS</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">Bootstrap</a>
                  </div>
              </div>

          <div class="btn-group mr-2 mb-2">
              <button class="btn btn-secondary dropdown-toggle" id="dp-categorias2" data-toggle="dropdown">
                  Categorias
              </button>
              <div class="dropdown-menu" aria-labelledby="dp-categorias2">
                  <h6 class="dropdown-header">Categorias</h6>
                  <a href="#" class="dropdown-item">HTML</a>
                  <a href="#" class="dropdown-item">CSS</a>
                  <a href="#" class="dropdown-item">JS</a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">Bootstrap</a>
              </div>
          </div>

          <div class="btn-group mr-2 mb-2">
              <button class="btn btn-success dropdown-toggle" id="dp-categorias3" data-toggle="dropdown">
                  Categorias
              </button>
              <div class="dropdown-menu" aria-labelledby="dp-categorias3">
                  <h6 class="dropdown-header">Categorias</h6>
                  <a href="#" class="dropdown-item">HTML</a>
                  <a href="#" class="dropdown-item">CSS</a>
                  <a href="#" class="dropdown-item">JS</a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">Bootstrap</a>
              </div>
          </div>

          <div class="btn-group mr-2 mb-2">
              <button class="btn btn-info dropdown-toggle" id="dp-categorias4" data-toggle="dropdown">
                  Categorias
              </button>
              <div class="dropdown-menu" aria-labelledby="dp-categorias4">
                  <h6 class="dropdown-header">Categorias</h6>
                  <a href="#" class="dropdown-item">HTML</a>
                  <a href="#" class="dropdown-item">CSS</a>
                  <a href="#" class="dropdown-item">JS</a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">Bootstrap</a>
              </div>
          </div>

          <div class="btn-group mr-2 mb-2">
              <button class="btn btn-warning dropdown-toggle" id="dp-categorias5" data-toggle="dropdown">
                  Categorias
              </button>
              <div class="dropdown-menu" aria-labelledby="dp-categorias5">
                  <h6 class="dropdown-header">Categorias</h6>
                  <a href="#" class="dropdown-item">HTML</a>
                  <a href="#" class="dropdown-item">CSS</a>
                  <a href="#" class="dropdown-item">JS</a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">Bootstrap</a>
              </div>


          </div>

          <div class="btn-group mr-2 mb-2">
              <button class="btn btn-danger dropdown-toggle" id="dp-categorias6" data-toggle="dropdown">
                  Categorias
              </button>
              <div class="dropdown-menu" aria-labelledby="dp-categorias6">
                  <h6 class="dropdown-header">Categorias</h6>
                  <a href="#" class="dropdown-item">HTML</a>
                  <a href="#" class="dropdown-item">CSS</a>
                  <a href="#" class="dropdown-item">JS</a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">Bootstrap</a>
              </div>
          </div>
      </div>
    </div>

    <div class="row mt-3">
        <div class="col-6">
            <div class="btn-group mr-2 mb-2">
                <button class="btn btn-primary">Categorias</button>
                <button class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dp-categorias" data-toggle="dropdown">
                    <span class="sr-only">Menu</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dp-categorias">
                    <h6 class="dropdown-header">Categorias</h6>
                    <a href="#" class="dropdown-item">HTML</a>
                    <a href="#" class="dropdown-item">CSS</a>
                    <a href="#" class="dropdown-item">JS</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Bootstrap</a>
                </div>
            </div>

            <div class="btn-group mr-2 mb-2">
                <button class="btn btn-secondary">Categorias</button>
                <button class="btn btn-secondary dropdown-toggle dropdown-toggle-split" id="dp-categorias2" data-toggle="dropdown">
                    <span class="sr-only">Menu</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dp-categorias2">
                    <h6 class="dropdown-header">Categorias</h6>
                    <a href="#" class="dropdown-item">HTML</a>
                    <a href="#" class="dropdown-item">CSS</a>
                    <a href="#" class="dropdown-item">JS</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Bootstrap</a>
                </div>
            </div>

            <div class="btn-group mr-2 mb-2">
                <button class="btn btn-info">Categorias</button>
                <button class="btn btn-info dropdown-toggle dropdown-toggle-split" id="dp-categorias3" data-toggle="dropdown">
                    <span class="sr-only">Menu</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dp-categorias3">
                    <h6 class="dropdown-header">Categorias</h6>
                    <a href="#" class="dropdown-item">HTML</a>
                    <a href="#" class="dropdown-item">CSS</a>
                    <a href="#" class="dropdown-item">JS</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Bootstrap</a>
                </div>
            </div>

            <div class="btn-group mr-2 mb-2">
                <button class="btn btn-success">Categorias</button>
                <button class="btn btn-success dropdown-toggle dropdown-toggle-split" id="dp-categorias4" data-toggle="dropdown">
                    <span class="sr-only">Menu</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dp-categorias4">
                    <h6 class="dropdown-header">Categorias</h6>
                    <a href="#" class="dropdown-item">HTML</a>
                    <a href="#" class="dropdown-item">CSS</a>
                    <a href="#" class="dropdown-item">JS</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Bootstrap</a>
                </div>
            </div>

            <div class="btn-group mr-2 mb-2">
                <button class="btn btn-danger">Categorias</button>
                <button class="btn btn-danger dropdown-toggle dropdown-toggle-split" id="dp-categorias5" data-toggle="dropdown">
                    <span class="sr-only">Menu</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dp-categorias5">
                    <h6 class="dropdown-header">Categorias</h6>
                    <a href="#" class="dropdown-item">HTML</a>
                    <a href="#" class="dropdown-item">CSS</a>
                    <a href="#" class="dropdown-item">JS</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Bootstrap</a>
                </div>
            </div>

            <div class="btn-group mr-2 mb-2">
                <button class="btn btn-warning">Categorias</button>
                <button class="btn btn-warning dropdown-toggle dropdown-toggle-split" id="dp-categorias6" data-toggle="dropdown">
                    <span class="sr-only">Menu</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dp-categorias6">
                    <h6 class="dropdown-header">Categorias</h6>
                    <a href="#" class="dropdown-item">HTML</a>
                    <a href="#" class="dropdown-item">CSS</a>
                    <a href="#" class="dropdown-item">JS</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Bootstrap</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-6">
            <div class="btn-group mr-2 mb-2">
                <button class="btn btn-primary btn-lg">Categorias</button>
                <button class="btn btn-primary btn-lg dropdown-toggle dropdown-toggle-split" id="dp-categorias" data-toggle="dropdown">
                    <span class="sr-only">Menu</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dp-categorias">
                    <h6 class="dropdown-header">Categorias</h6>
                    <a href="#" class="dropdown-item">HTML</a>
                    <a href="#" class="dropdown-item">CSS</a>
                    <a href="#" class="dropdown-item">JS</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Bootstrap</a>
                </div>
            </div>

            <div class="btn-group mr-2 mb-2">
                <button class="btn btn-primary btn-sm">Categorias</button>
                <button class="btn btn-primary btn-sm dropdown-toggle dropdown-toggle-split" id="dp-categorias" data-toggle="dropdown">
                    <span class="sr-only">Menu</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dp-categorias">
                    <h6 class="dropdown-header">Categorias</h6>
                    <a href="#" class="dropdown-item">HTML</a>
                    <a href="#" class="dropdown-item">CSS</a>
                    <a href="#" class="dropdown-item">JS</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Bootstrap</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-6">
            <div class="btn-group mr-2 mb-2">
                <button class="btn btn-primary btn-lg">Categorias</button>
                <button class="btn btn-primary btn-lg dropdown-toggle dropdown-toggle-split" id="dp-categorias" data-toggle="dropdown">
                    <span class="sr-only">Menu</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dp-categorias">
                    <h6 class="dropdown-header">Categorias</h6>
                    <button class="dropdown-item" type="button">HTML</button>
                    <button class="dropdown-item" type="button">CSS</button>
                    <button class="dropdown-item" type="button">JS</button>
                </div>
            </div>
        </div>
    </div>

@stop