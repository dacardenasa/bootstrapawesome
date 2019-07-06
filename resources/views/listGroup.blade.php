@extends('layouts.home')

@section('title', 'ListGroup')

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row mt-3">
        <div class="col">
            <ul class="list-group">
                <li class="list-group-item">Lorem ipsum dolor sit amet</li>
                <li class="list-group-item active">Lorem ipsum dolor sit amet</li>
                <li class="list-group-item disabled">Lorem ipsum dolor sit amet</li>
                <li class="list-group-item">Lorem ipsum dolor sit amet</li>
            </ul>
        </div>
        <div class="col">
            <div class="group-list">
                <a href="#" class="list-group-item list-group-item-action">Lorem ipsum dolor sit amet.</a>
                <a href="#" class="list-group-item list-group-item-action">Lorem ipsum dolor sit amet.</a>
                <a href="#" class="list-group-item list-group-item-action active">Lorem ipsum dolor sit amet.</a>
                <a href="#" class="list-group-item list-group-item-action">Lorem ipsum dolor sit amet.</a>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <ul class="list-group">
                <li class="list-group-item">Lorem ipsum dolor sit amet</li>
                <li class="list-group-item list-group-item-success">Lorem ipsum dolor sit amet</li>
                <li class="list-group-item list-group-item-info">Lorem ipsum dolor sit amet</li>
                <li class="list-group-item list-group-item-warning">Lorem ipsum dolor sit amet</li>
                <li class="list-group-item list-group-item-danger">Lorem ipsum dolor sit amet</li>
                <li class="list-group-item list-group-item-lite">Lorem ipsum dolor sit amet</li>
                <li class="list-group-item list-group-item-dark">Lorem ipsum dolor sit amet</li>
            </ul>
        </div>

        <div class="col">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">Lorem ipsum dolor sit amet</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-success">Lorem ipsum dolor sit amet</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-info">Lorem ipsum dolor sit amet</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-warning">Lorem ipsum dolor sit amet</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Lorem ipsum dolor sit amet</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-lite">Lorem ipsum dolor sit amet</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Lorem ipsum dolor sit amet</a>
            </div>
        </div>

        <div class="col">
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Lorem Ipsum dolor
                    <span class="badge badge-primary">1</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Lorem Ipsum dolor
                    <span class="badge badge-primary">2</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Lorem Ipsum dolor
                    <span class="badge badge-primary">3</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-center">
                    <div class="d-flex w-100 justify-content-between align-items-center">
                        <h4 class="mb-1">Lorem ipsum dolor.</h4>
                        <small>11:58pm</small>
                    </div>
                    <p  class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin elit nisl, bibendum in aliquam vel, aliquam ac leo. Donec elementum, tellus quis lacinia commodo, elit nisi elementum diam, vel elementum diam neque ac massa. Phasellus pulvinar elementum erat quis ullamcorper.
                        Pellentesque sit amet sagittis quam, vulputate porta eros. </p>
                </a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-center">
                    <div class="d-flex w-100 justify-content-between align-items-center">
                        <h4 class="mb-1">Lorem ipsum dolor.</h4>
                        <small>11:58pm</small>
                    </div>
                    <p  class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin elit nisl, bibendum in aliquam vel, aliquam ac leo. Donec elementum, tellus quis lacinia commodo, elit nisi elementum diam, vel elementum diam neque ac massa. Phasellus pulvinar elementum erat quis ullamcorper.
                        Pellentesque sit amet sagittis quam, vulputate porta eros. </p>
                </a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-center">
                    <div class="d-flex w-100 justify-content-between align-items-center">
                        <h4 class="mb-1">Lorem ipsum dolor.</h4>
                        <small>11:58pm</small>
                    </div>
                    <p  class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin elit nisl, bibendum in aliquam vel, aliquam ac leo. Donec elementum, tellus quis lacinia commodo, elit nisi elementum diam, vel elementum diam neque ac massa. Phasellus pulvinar elementum erat quis ullamcorper.
                        Pellentesque sit amet sagittis quam, vulputate porta eros. </p>
                </a>
            </div>
        </div>
    </div>

@stop