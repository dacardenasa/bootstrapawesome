<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bootstrapGrid/8', function () {
    return view('columnas');
});

Route::get('/bootstrapGrid/9', function () {
    return view('columnas_alineadas_verticalmente');
});

Route::get('/bootstrapGrid/10', function () {
    return view('columnas_alineadas_horizontalmente');
});

Route::get('/bootstrapGrid/11', function () {
    return view('offseting');
});

Route::get('/bootstrapGrid/12', function () {
    return view('ordenamiento_columnas');
});

Route::get('/bootstrapGrid/13', function () {
    return view('columnas_anidadas');
});

Route::get('/practicas/grid', function () {
    return view('practicas.grid.grid');
});

Route::get('/elementosBootstrap/15', function () {
    return view('responsiveUtilities');
});

Route::get('/elementosBootstrap/16', function () {
    return view('tipografia');
});

Route::get('/elementosBootstrap/17', function () {
    return view('tipografia2');
});

Route::get('/elementosBootstrap/18', function () {
    return view('bloquescodigo');
});

Route::get('/elementosBootstrap/19', function () {
    return view('imagenes');
});

Route::get('/elementosBootstrap/20', function () {
    return view('tablas');
});

Route::get('/elementosBootstrap/21', function () {
    return view('mediaObject');
});

Route::get('/practicas/comentarios', function () {
    return view('practicas.comentarios.comentarios');
});

Route::get('/componentesBootstrap/23', function () {
    return view('alertas');
});

Route::get('/componentesBootstrap/24', function () {
    return view('insignias');
});

Route::get('/componentesBootstrap/25', function () {
    return view('botones');
});

Route::get('/componentesBootstrap/26', function () {
    return view('botones2');
});

Route::get('/componentesBootstrap/27', function () {
    return view('grupoBotones');
});

Route::get('/componentesBootstrap/28', function () {
    return view('cards');
});

Route::get('/componentesBootstrap/29', function () {
    return view('cards2');
});

Route::get('/componentesBootstrap/30', function () {
    return view('masonry');
});

Route::get('/componentesBootstrap/31', function () {
    return view('carrousel');
});

Route::get('/componentesBootstrap/32', function () {
    return view('collapse');
});

Route::get('/componentesBootstrap/33', function () {
    return view('dropdown');
});

Route::get('/formulariosBootstrap/34', function () {
    return view('formularios');
});

Route::get('/formulariosBootstrap/35', function () {
    return view('inlineForms');
});

Route::get('/formulariosBootstrap/36', function () {
    return view('inputGroup');
});

Route::get('/formulariosBootstrap/37', function () {
    return view('formulariosGrid');
});

Route::get('/formulariosBootstrap/38', function () {
    return view('Checkbox-radiobuttons');
});

Route::get('/formulariosBootstrap/39', function () {
    return view('formulariosPersonalizados');
});

Route::get('/formulariosBootstrap/40', function () {
    return view('variantesInput');
});

Route::get('/formulariosBootstrap/41', function () {
    return view('cuadrosAyuda');
});

Route::get('/componentesBootstrap/42', function () {
    return view('jumbotron');
});

Route::get('/componentesBootstrap/43', function () {
    return view('listGroup');
});
