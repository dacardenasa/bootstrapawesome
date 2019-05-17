@extends('layouts.home')

<style>
    .columna {
        background: #2191fb;
        color: #fff;
        padding: 20px;
        margin-bottom: 20px;
    }
</style>

@section('title', 'Utilidades Responsivas Bootstrap')
@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row">
        <div class="columna col d-block d-sm-none">XS - Extra Small</div>
        <div class="columna col d-none d-sm-block d-md-none">SM - Small</div>
        <div class="columna col d-none d-md-block d-lg-none">MD - Medium</div>
        <div class="columna col d-none d-lg-block d-xl-none">LG - Large</div>
        <div class="columna col d-none d-xl-block">XL - Extra large</div>
    </div>

@stop