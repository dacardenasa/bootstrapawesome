@extends('layouts.home2')

@section('title', 'Grid Practice')
@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <header class="row mt-3">
        <div class="col">
            <h1>HEADER</h1>
        </div>
    </header>

    <section class="contenedor-main row">
        <main class="col-md-8">
            <h2>MAIN</h2>
            <p>{!! lorem(2) !!}</p>
        </main>
        <aside class="col-md-4 align-self-center">
            <h3>ASIDE</h3>
        </aside>
    </section>

    <section class="row widgets justify-content-around">
        <div class="col-12  col-md-4 col-lg-3">
            <h2>Parrafo 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi. Nulla ut consequat quam. Etiam at facilisis metus, id lobortis elit. </p>
        </div>

        <div class="col-12  col-md-4 col-lg-3">
            <h2>Parrafo 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi. Nulla ut consequat quam. Etiam at facilisis metus, id lobortis elit. </p>
        </div>

        <div class="col-12  col-md-4 col-lg-3">
            <h2>Parrafo 3</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus nisi. Nulla ut consequat quam. Etiam at facilisis metus, id lobortis elit. </p>
        </div>
    </section>

    <footer class="row">
        <div class="col">
            <h4>Footer</h4>
        </div>
    </footer>

@stop