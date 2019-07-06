@extends('layouts.home')

@section('title', 'ListGroup2')

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row mt-3">
        <div class="col-4">
            <div class="list-group" id="lista" role="tablist">
                <a href="#elemento1" class="list-group-item list-group-item-action active" data-toggle="list" role="tab" aria-controls="elemento1">Elemento 1</a>
                <a href="#elemento2" class="list-group-item list-group-item-action" data-toggle="list" role="tab" aria-controls="elemento2">Elemento 2</a>
                <a href="#elemento3" class="list-group-item list-group-item-action" data-toggle="list" role="tab" aria-controls="elemento3">Elemento 3</a>
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="elemento1" role="tabpanel" aria-labelledby="elemento1">
                    <h3>Titulo #1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi. Nulla ut consequat quam. Etiam at facilisis metus, id lobortis elit. Donec vel nulla egestas, malesuada arcu vel, pellentesque augue. Nullam quis dapibus neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>
                </div>
                <div class="tab-pane fade show" id="elemento2" role="tabpanel" aria-labelledby="elemento2">
                    <h3>Titulo #2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi. Nulla ut consequat quam. Etiam at facilisis metus, id lobortis elit. Donec vel nulla egestas, malesuada arcu vel, pellentesque augue. Nullam quis dapibus neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>
                </div>
                <div class="tab-pane fade show" id="elemento3" role="tabpanel" aria-labelledby="elemento3">
                    <h3>Titulo #3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi. Nulla ut consequat quam. Etiam at facilisis metus, id lobortis elit. Donec vel nulla egestas, malesuada arcu vel, pellentesque augue. Nullam quis dapibus neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>
                </div>
            </div>
        </div>
    </div>

@stop