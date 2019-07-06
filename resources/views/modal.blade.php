@extends('layouts.home')

@section('title', 'Ventanas Modales')

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row mt-3">
        <div class="col">
            <button class="btn btn-primary" data-toggle="modal" data-target="#fm-modal" >Abrir Modal</button>
            <div class="modal fade" id="fm-modal" tabindex="-1" role="dialog" aria-labelledby="fm-modal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="">Titulo de la ventana</h5>
                            <button class="close" data-dismiss="modal" aria-label="cerrar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h2>Hola Mundo</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi. Nulla ut consequat quam. Etiam at facilisis metus, id lobortis elit. Donec vel nulla egestas, malesuada arcu vel, pellentesque augue. Nullam quis dapibus neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>
                        </div>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary" data-toggle="modal" data-target="#fm-modal-grid" >Abrir Modal con GRID</button>
            <div class="modal fade" id="fm-modal-grid" tabindex="-1" role="dialog" aria-labelledby="fm-modal-grid" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="">GRID</h5>
                            <button class="close" data-dismiss="modal" aria-label="cerrar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi. Nulla ut consequat quam. Etiam at facilisis metus, id lobortis elit. Donec vel nulla egestas, malesuada arcu vel, pellentesque augue. Nullam quis dapibus neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                                    </div>
                                    <div class="col-12">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi. Nulla ut consequat quam. Etiam at facilisis metus, id lobortis elit. Donec vel nulla egestas, malesuada arcu vel, pellentesque augue. Nullam quis dapibus neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-success">Aceptar</button>
                            <button class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@stop