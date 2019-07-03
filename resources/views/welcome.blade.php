@extends('layouts.home')

@section('title', 'Menu Videotutorial Bootstrap')
@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')
    
    <h1 class="text-center">Menu Curso Bootstrap 4</h1>

    @php
        $titles  = array("Columnas", "Columnas Alineadas Verticalmente", "Columnas Alineadas Horizontalmente", "Offsetting", "Reordenamiento de Columnas", "Columnas Anidadas");
        $titles2 = array("Responsive Utilities", "Tipografia y Textos", "Tipografia y Textos II", "Bloques de Codigo", "Imagenes y Figures", "Tablas", "Media Object");
        $titles3 = array("Alertas", "Insignias", "Botones", "Botones II", "Grupo de Botones", "Cards", "Cards II", "Masonry Cards", "Carousel", "Collapse", "Botones Dropdown");
        $titles4 = array("Formularios", "Inline Forms", "Grupos de Input", "Usando la GRID en Forms", "Checkboxes y Radiobuttons", "Formularios Personalizados", "Variantes de Input", "Cuadros de Ayuda");
        $titles5 = array("Practica Grid", "Practica Comentarios");
        $contador = 0;
    @endphp
    
    <div class="row mt-3">
        <div class="col">
            <h1>Grid de Bootstrap</h1>
            @for( $i = 8; $i <= 13; $i++)
                <a href="{{ url('/bootstrapGrid/' . $i) }}" class="btn btn-primary btn-lg mt-3">{{ $titles[$contador] }}</a>
                @php $contador++ @endphp
            @endfor
        </div>

        @php $contador = 0; @endphp

        <div class="col">
            <h1>Elementos de Bootstrap</h1>
            @for( $i = 15; $i <= 21; $i++)
                <a href="{{ url('/elementosBootstrap/' . $i) }}" class="btn btn-primary btn-lg mt-3">{{ $titles2[$contador] }}</a>
                @php $contador++ @endphp
            @endfor
        </div>
    </div>

    @php $contador = 0; @endphp

    <div class="row mt-3">
        <div class="col">
            <h1>Componentes de Bootstrap</h1>
            @for( $i = 23; $i <= 33; $i++)
                <a href="{{ url('/componentesBootstrap/' . $i) }}" class="btn btn-primary btn-lg mt-3">{{ $titles3[$contador] }}</a>
                @php $contador++ @endphp
            @endfor
        </div>

        @php $contador = 0; @endphp

        <div class="col">
            <h1>Formularios de Bootstrap</h1>
            @for( $i = 34; $i <= 41; $i++)
                <a href="{{ url('/formulariosBootstrap/' . $i) }}" class="btn btn-primary btn-lg mt-3">{{ $titles4[$contador] }}</a>
                @php $contador++ @endphp
            @endfor
        </div>
    </div>

    @php $contador = 0; @endphp

    <div class="row mt-3">
        <div class="col">
            <h1>Practicas Bootstrap</h1>
            @for( $i = 0; $i < 2; $i++)
                <a href="{{ url('/practicas/' . $i) }}" class="btn btn-primary btn-lg mt-3 mb-3">{{ $titles5[$contador] }}</a>
                @php $contador++ @endphp
            @endfor
        </div>
    </div>
    
@stop