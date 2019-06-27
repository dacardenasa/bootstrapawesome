@extends('layouts.home')

@section('title', 'GRID')
@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')
    
    <h1>Menu Curso Bootstrap 4</h1>

    @php
        $titles = array("Columnas", "Columnas Alineadas Verticalmente", "Columnas Alineadas Horizontalmente", "Offsetting", "Reordenamiento de Columnas", "Columnas Anidadas");
        $contador = 0;
    @endphp

@for( $i = 8; $i <= 13; $i++)
    <div class="row mt-3">
        <a href="{{ url('/bootstrapGrid/' . $i) }}" class="btn btn-primary btn-lg">{{ $titles[$contador] }}</a>
    </div>
    @php $contador++ @endphp
@endfor


@stop