@extends('layouts.home')

@section('title', 'Tablas Bootstrap')

@section('descripcion', 'Descripcion del sitio web')
@section('keywords', 'Palabras clave del sitio web')

@section('content')

    <div class="row">
        <div class="col">
            <table class="table table-sm table-hover table-bordered table-responsive-lg">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Pais</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-success">
                        <td>Carlos</td>
                        <td>21</td>
                        <td>Mexico</td>
                    </tr>
                    <tr class="bg-primary text-white">
                        <td>Alejandro</td>
                        <td>34</td>
                        <td>España</td>
                    </tr>
                    <tr>
                        <td>Cesar</td>
                        <td>37</td>
                        <td>Colombia</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@stop