@extends('layouts.home')

@section('title', 'Bloques Codigo Bootstrap')
@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row">
        <div class="col-6">
            <h2>Bloques de codigo en linea</h2>
            <p>Lorem ipsum dolor sit amet, <code>&lt;consectetur&gt;&lt;consectetur/&gt;</code> adipiscing elit. </p>

            <hr>

            <h2>Bloques de codigo</h2>
            <p>
            <pre>
                <code>
                    &lt;h1&gt;Lorem ipsum dolor sit amet.&lt;/h1&gt;
                    &lt;p&gt;Lorem ipsum dolor sit amet.&lt;/p&gt;
                </code>
            </pre>
            </p>

            <hr>

            <h2>Teclas
                <p>Para copiar texto presiona <kbd>ctrl+c</kbd></p>
                <p>Para pegar texto presiona <kbd>ctrl+v</kbd></p>
                <p>Para cortas texto presiona <kbd>ctrl+x</kbd></p>
            </h2>

        </div>
    </div>

@stop