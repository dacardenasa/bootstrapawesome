@extends('layouts.home')

@section('title', 'Grupo Botones')

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row pt-5">
       <div class="col">
           <div class="btn-group">
                <button class="btn btn-outline-secondary">1</button>
                <button class="btn btn-outline-secondary">2</button>
                <button class="btn btn-outline-secondary">3</button>
                <button class="btn btn-outline-secondary">4</button>
           </div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col">
            <div class="btn-toolbar" role="toolbar">
                <div class="btn-group mr-4">
                    <button class="btn btn-outline-secondary">1</button>
                    <button class="btn btn-outline-secondary">2</button>
                    <button class="btn btn-outline-secondary">3</button>
                    <button class="btn btn-outline-secondary">4</button>
                </div>

                <div class="btn-group mr-4">
                    <button class="btn btn-outline-secondary">1</button>
                    <button class="btn btn-outline-secondary">2</button>
                    <button class="btn btn-outline-secondary">3</button>
                    <button class="btn btn-outline-secondary">4</button>
                </div>

                <div class="btn-group mr-4">
                    <button class="btn btn-outline-secondary">1</button>
                    <button class="btn btn-outline-secondary">2</button>
                    <button class="btn btn-outline-secondary">3</button>
                    <button class="btn btn-outline-secondary">4</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col">
            <div class="btn-group btn-group-lg">
                <button class="btn btn-outline-secondary">1</button>
                <button class="btn btn-outline-secondary">2</button>
                <button class="btn btn-outline-secondary">3</button>
                <button class="btn btn-outline-secondary">4</button>
            </div>
            <br><br>
            <div class="btn-group btn-group-sm">
                <button class="btn btn-outline-secondary">1</button>
                <button class="btn btn-outline-secondary">2</button>
                <button class="btn btn-outline-secondary">3</button>
                <button class="btn btn-outline-secondary">4</button>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col">
            <div class="btn-group-vertical">
                <button class="btn btn-outline-secondary">1</button>
                <button class="btn btn-outline-secondary">2</button>
                <button class="btn btn-outline-secondary">3</button>
                <button class="btn btn-outline-secondary">4</button>
            </div>
        </div>
    </div>

@stop