@extends('layouts.home3')

@section('title', 'Comentarios Practice')
@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row comentarios justify-content-center">
        <div class="col-12 col-sm-10 col-md-8">
            <form action="" class="form_comentarios d-flex justify-content-end flex-wrap">
                <textarea name="" id="" placeholder="comentario"></textarea>
                <button class="btn" type="button">Comentar</button>
            </form>
            
            <div class="media">
                <img src="{{ asset('img/1.jpg') }}" width="64" height="64" alt="Img" class="mr-3">
                <div class="media-body">
                    <p class="nombre">Carla Ximenez <span>9:21am, hoy</span></p>
                    <p class="comentario">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Phasellus sed urna arcu. Integer sit amet risus nisi. Nulla ut consequat quam.
                        Etiam at facilisis metus, id lobortis elit. Donec vel nulla egestas, malesuada arcu vel, pellentesque augue.
                        Nullam quis dapibus neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                    <div class="botones text-right">
                        <a href="#">Responder</a>
                        <a href="#">Editar</a>
                        <a href="#">Borrar</a>
                    </div>

                    <div class="media">
                        <img src="{{ asset('img/2.jpg') }}" width="64" height="64" alt="Img" class="mr-3">
                        <div class="media-body">
                            <p class="nombre">Monica Sanchez <span>9:23am, hoy</span></p>
                            <p class="comentario">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus sed urna arcu. Integer sit amet risus nisi. Nulla ut consequat quam.
                                Etiam at facilisis metus, id lobortis elit. Donec vel nulla egestas, malesuada arcu vel, pellentesque augue.
                                Nullam quis dapibus neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                            <div class="botones text-right">
                                <a href="#">Responder</a>
                                <a href="#">Editar</a>
                                <a href="#">Borrar</a>
                            </div>
                        </div>
                    </div>

                    <div class="media">
                        <img src="{{ asset('img/3.jpg') }}" width="64" height="64" alt="Img" class="mr-3">
                        <div class="media-body">
                            <p class="nombre">Lorena Cárdenas <span>9:26am, hoy</span></p>
                            <p class="comentario">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus sed urna arcu. Integer sit amet risus nisi. Nulla ut consequat quam.
                                Etiam at facilisis metus, id lobortis elit. Donec vel nulla egestas, malesuada arcu vel, pellentesque augue.
                                Nullam quis dapibus neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                            <div class="botones text-right">
                                <a href="#">Responder</a>
                                <a href="#">Editar</a>
                                <a href="#">Borrar</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>





@stop